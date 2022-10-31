<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">
    <title>Wpisz się</title>
</head>
<body>

    <?php include "config.php"; ?>

    <?php include "includes/nav.php"; ?>

    <?php

        if ($_POST) {
            if ("" == trim($_POST['firstname']) || "" == trim($_POST['entry'])) {
                echo "<div class='container mt-4 alert alert-danger'>Podano puste pola!</div>";
            } else {
                $firstname = trim($_POST['firstname']);
                $content = trim($_POST['entry']);
                $created_at = date('Y-m-d H:i:s');
                if (strlen($firstname) < 64 && strlen($content) < 3000) {
                    if ($database->addEntry($firstname, $content, $created_at)) {
                        echo "<div class='container mt-4 alert alert-success'>Dodano wpis</div>";
                    } else {
                        echo "<div class='container mt-4 alert alert-danger'>Wystąpił nieoczekiwany problem!</div>";
                    }
                }
            }
        }

    ?>

    <section class="container mt-5">
        <form action="" method="post">
            <div class="mb-3">
                <label for="firstname" class="form-label">Twoje imię</label>
                <input type="text" class="form-control" id="firstname" name="firstname">
            </div>
            <div class="mb-3">
                <label for="entry" class="form-label">Treść wpisu</label>
                <textarea class="form-control" id="entry" name="entry" rows="3"></textarea>
            </div>
            <div class="">
                <input type="submit" class="btn btn-primary" value="Wyślij" style="display:block;margin: 0 auto;width:200px;" />
            </div>
        </form>
    </section>

    <?php include "includes/footer.php"; ?>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.js"></script>
</body>
</html>
