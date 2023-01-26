<!DOCTYPE html>

<?php
    session_start();
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Result</title>
    </head>
    <body>
        <main>
            <h2>La tua nuova password è</h2>
            <p>
                <?php
                    echo $_SESSION['generatedPassword'];
                ?>
            </p>
        </main>
    </body>
</html>