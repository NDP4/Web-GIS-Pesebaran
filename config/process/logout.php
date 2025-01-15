<?php
session_start();
session_unset();
session_destroy();
header('Location: ../../bantul_admin.php');
exit();
