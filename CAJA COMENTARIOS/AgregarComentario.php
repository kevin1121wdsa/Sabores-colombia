<?php
require_once("Conexion.php");

date_default_timezone_set('America/Bogota');

$commentId = isset($_POST['comentario_id']) ? $_POST['comentario_id'] : "";
$comment = isset($_POST['comment']) ? $_POST['comment'] : "";
$commentSenderName = isset($_POST['name']) ? $_POST['name'] : "";
$date = date('Y-m-d H:i:s');

$sql = "INSERT INTO comentario(parent_comentario_id, comment, comment_sender_name, date) VALUES ('" . $commentId . "','" . $comment . "','" . $commentSenderName . "','" . $date . "')";

$result = mysqli_query($conn, $sql);

if (!$result) {
    $result = mysqli_error($conn);
}
echo $result;
?>
