<?php

if (isset($_GET['id'])){
$directorio=$_GET['id'];
If (unlink($directorio)) {
    header("Location: ./backup_restore?msj=6");
} else {
    header("Location: ./backup_restore?msj=7");
}
}else{

}
?>