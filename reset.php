<?php
session_unset();
session_abort();
header("Location: ./index.php")
?>