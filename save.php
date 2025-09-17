<?php
$file = 'lista.json';
$data = $_POST;
$json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
if(file_put_contents($file,$json)){
    echo "<script>
    document.location = '/php/'
</script> ";
} else {
    echo "Hiba történt a mentés közben!";
}

?>