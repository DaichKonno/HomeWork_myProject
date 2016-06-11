<?php

require_once('functions.php');

if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['coments']))
{
    echo 'You must fill in all of the fields.';
    echo '<a href="index.html">Back</a>';
    exit;
}

$name = $_POST['name'];
$email = $_POST['email'];
$coments = $_POST['coments'];

mb_internal_encoding('UTF-8');
mb_language('Japanese');
mb_send_mail('wildeste@hotmail.co.jp', 'メッセージが届きました', "$coments $name $email");


?>
<head>
<meta charset="UTF-8">
<title>確認画面</title>

</head>
<body class="body">
<h1>Thanks For Message</h1>
        <p class="table">Name: <?php echo $name ?></p>
        <p class="table">e-mail: <?php echo $email ?></p>
        <p class="table">Coments: <?php echo $coments ?></p>
</body>
</html>
