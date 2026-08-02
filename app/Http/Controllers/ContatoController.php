<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoMail;

class ContatoController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome'      => 'required|string|max:100',
            'sobrenome' => 'nullable|string|max:100',
            'email'     => 'required|email|max:150',
            'telefone'  => 'nullable|string|max:20',
            'assunto'   => 'required|string|max:500',
        ]);

        // Salva no banco de dados
        Contato::create([
            'nome'      => $validated['nome'],
            'sobrenome' => $validated['sobrenome'] ?? null,
            'email'     => $validated['email'],
            'telefone'  => $validated['telefone'] ?? null,
            'mensagem'  => $validated['assunto'],
        ]);

        $emailsString = env('MAIL_TO_ADMINS', 'apoloempresacontato@gmail.com');
        $emails = array_map('trim', explode(',', $emailsString));

        try {
            Mail::to($emails)->send(new ContatoMail($validated));
            $mailSuccess = true;
        } catch (\Exception $e) {
            // Guarda o erro no log do Laravel
            \Log::error('Erro ao enviar e-mail de contato: ' . $e->getMessage());
            $mailSuccess = false;
            $errorMessage = $e->getMessage(); // Pega a mensagem de erro real
        }

        if ($request->ajax() || $request->wantsJson()) {
            if ($mailSuccess) {
                return response()->json(['success' => true, 'message' => 'Mensagem enviada com sucesso!']);
            } else {
                // Retorna o erro para você ver no Console (F12) do navegador!
                return response()->json([
                    'success' => false, 
                    'message' => 'Erro ao enviar e-mail.', 
                    'debug_error' => $errorMessage
                ], 500);
            }
        }

        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }
}