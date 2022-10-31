<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Formularz</title>
</head>
<body>
<section class="container pt-5">
    <form method="Post" action="complete.php">
        <div class="mb-3">
            <label for="email" class="form-label">Adres e-mail</label>
            <input type="email" class="form-control" id="email" name="email">
            <div id="emailHelp" class="form-text">Nie udostępniamy nikomu Twojego adresu.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Hasło</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">Zapamiętaj mnie</label>
        </div>
        <button type="submit" class="btn btn-primary">Zaloguj się</button>
    </form>
</section>

<script src="js/bootstrap.min.js"></script>
<script src="js/popper.js"></script>

</body>
</html>