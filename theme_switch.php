<?php
$year = 31536000 + time();
setcookie('style', $_POST['choice'], $year);
header('Location: index.php');
exit();
?>
