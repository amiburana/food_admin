<?php
include "classes/db.php";

if (isset($_GET['delete_id']) && isset($_GET['user_data'])) {
    # code...
    $id = $_GET['delete_id'];
    $email = $_GET['user_data'];

    $q = "DELETE FROM blog WHERE id = '$id' ";

    $d = new Db();
    $r = $d -> Delete_db($q);
if ($r) {
    # code...
    header("location: admin_site.php");
    die;
}



}



?>