<?php
    $name = $_SESSION['name'];
?>
<header>
    <div class="div_1">Super<div class="cor_alter">Adm</div></div>
    <div class="div_2"><?= $name ?></div>
    <div class="div_3"><img src="img/profile.png" class="icon"></div>
    <a class="div_4" href="logoff.php"> <i class="fa-solid fa-power-off btn_power"></i> </a>
</header>