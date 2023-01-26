<!DOCTYPE html>

<?php
    $characters = '0123456789abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ\|!£$%&/=?@#-_.,*§';

    $pswLength = $_GET['psw-length'];

    if (isset($pswLength)) {
        function getNewPassword($characters, $passwordLength) {
            $newPassword = '';

            for ($i=0; $i < $passwordLength; $i++) { 
                $randomNum = rand(1, strlen($characters));

                $newPassword .= $characters[$randomNum];
            }
            return $newPassword;
        }
    }
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
                    echo getNewPassword($characters, $pswLength);
                ?>
            </pre>
        </main>
    </body>
</html>