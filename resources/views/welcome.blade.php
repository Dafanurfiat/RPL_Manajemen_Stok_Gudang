<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href={{ asset('css/main.css') }}>
</head>
<body>
    <div class="photo-login"></div>
    <div class="login-container">
        <img src={{ asset('Gambar/TendaBiru.png') }}>
        <h2>Welcome Back</h2>
        <h4>To</h4>
        <h3>Tenda Biru</h3>
        <form>
            <input type="email" id="email" name="email" required placeholder="Email">
            <input type="password" id="password" name="password" required placeholder="Password">
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>