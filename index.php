<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di Password</title>
</head>
<body>
    <h1>Generatore di Password</h1>
    
    <form method="GET" action="">
        <label for="length">Lunghezza password:</label>
        <input type="number" id="length" name="length" min="4" max="20" required>
        <button type="submit">Genera Password</button>
    </form>

    <?php
    if (isset($_GET['length'])) {
        $length = intval($_GET['length']);
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
        $password = substr(str_shuffle(str_repeat($characters, $length)), 0, $length);
        echo "<h2>Password generata: <strong>$password</strong></h2>";
    }
    ?>
</body>
</html>