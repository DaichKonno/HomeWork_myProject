<?php

require_once('functions.php');

if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['coments']))
{
    echo 'You must fill in all of the fields.';
    echo '<a href="index.php">Back</a>';
    exit;
}

$name = $_POST['name'];
$email = $_POST['email'];
$coments = $_POST['coments'];

mb_internal_encoding('UTF-8');
mb_language('Japanese');
mb_send_mail('wildeste@hotmail.co.jp', 'メッセージが届きました', "名前:$name \nメールアドレス:$email \nメッセージ:$coments");

header('Location:index.php?thanks=1');
exit;

?>
