<?php
$file = "lista.json";
if (file_exists($file)){
    $json = file_get_contents($file);
    $data = json_decode($json, true);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Témák:</h1>
    <br>
    <form method ="post" action="save.php">
        <input type="text" name="topic"></input>
        <button type="submit">save</button>
        <br>
        <?php echo htmlspecialchars ($data['topic'])?>
    </form>
    </center>
</body>
</html>