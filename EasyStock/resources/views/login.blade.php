<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Tela de Login do EasyStock</h2>


    <form action="{{route('login')}}" method="POST">
        @csrf
        <P>
            <label>E-mail</label>
            <input type="text" name="email" required>
        </P>
        <p>
            <label>Senha</label>
            <input type="password" name="senha" required>
            @error('password')
                <span>{{ $message }}</span>
            @enderror 
           </p>
        <p>
            <button type="submit">Logar</button>
        </p>


    </form>
</body>
</html>