<?php
include 'includes/header.php';

$page = $_GET['page'] ?? 'dashboard';

include "pages/$page.php";

include 'includes/footer.php';
?>