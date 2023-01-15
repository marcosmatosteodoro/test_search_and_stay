<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <div class="contaier">
        <form action="/login" method="post">
            <div>
                <label for="email">Email</label>
                <input type="email" name="email"placeholder="clarc@email.com">
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Entrar</button>


        </form>
    </div>
</body>
</html>