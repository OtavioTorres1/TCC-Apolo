<!DOCTYPE html>
<html>
<head>
    <title>Novo contato</title>
</head>
<body>
    <h2>Dados do contato</h2>
    
    <p><strong>Nome:</strong> {{ $dados['nome'] }} {{ $dados['sobrenome'] }}</p>
    <p><strong>E-mail:</strong> {{ $dados['email'] }}</p>
    <p><strong>Telefone:</strong> {{ $dados['telefone'] ?? 'Não informado' }}</p>
    <p><strong>Mensagem:</strong></p>
    <p>{{ $dados['assunto'] }}</p>
</body>
</html>