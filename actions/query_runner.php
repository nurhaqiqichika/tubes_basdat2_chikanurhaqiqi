<?php
require '../config/database.php';
$db = getDB();

$sql = $_POST['query'];
$result = $db->query($sql);

while($row = $result->fetch_assoc()){
    print_r($row);
}
?>