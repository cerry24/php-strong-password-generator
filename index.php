<!DOCTYPE html>

<?php
include_once __DIR__ . '/partials/functions.php';

    $characters = '0123456789abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ\|!£$%&/=?@#-_.,*§';
    $pswLength = $_GET['psw-length'];
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Password generator</title>
    </head>
    <body>
        <main>
            <form action="index.php" method="GET">
                <label for="password-length">Inserisci lunghezza password</label>
                <input type="number" name="psw-length" id="password-length">
                <button type="submit">invia</button>
            </form>

            <pre>
                <?php
                    if (isset($pswLength)) {
                        echo getNewPassword($characters, $pswLength);
                    }
                ?>
            </pre>
        </main>
    </body>
</html>