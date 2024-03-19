<?php
$breeds = array(
    "Maine Coon" => "Maine Coon 😺",
    "Siamese" => "Sziámi 😸",
    "Persian" => "Perzsa 😻",
    "Ragdoll" => "Ragdoll 😼",
    "Bengal" => "Bengáli 😽"
);

echo "<!DOCTYPE html>
<html>
<head>
    <title>Macskafajták 🐾</title>
    <meta charset='UTF-8'>
</head>
<body>
    <h1>Üdvözöljük a macskafajták oldalon! 🐱</h1>
    <p>Itt néhány népszerű macskafajtát találhatsz:</p>
    <ul>";

foreach ($breeds as $breed => $name) {
    echo "<li>$name</li>";
}

echo "</ul>
</body>
</html>";
?>