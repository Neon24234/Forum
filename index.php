<?php
     $file = 'temak.json';
     if(file_exists($file))
        {
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
    <h1>Témák:</h1>
    <form method ="post" action="save.php">
        <textarea name="tema" cols="60" rows="10" value='<?php echo htmlspecialchars($data['tema']);?>'></textarea>
        <br>
        <button type="submit">save</button>
    </form>
</body>
</html>