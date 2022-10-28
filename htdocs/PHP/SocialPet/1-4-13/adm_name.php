<div class="perfil-user">
    <img class="logo-img" src="../img/Icon (6).svg" alt="">

    <figure>
        <blockquote class="blockquote">
            <p class="user-adm"><?= $_SESSION['ad_name'] ?></p>
        </blockquote>
        <figcaption class="blockquote-footer">
            <?php 
                if ($_SESSION['nvl'] == 'SIM') {
                    echo 'Olá meu Criador é uma honra servilo';
                } else {
                    echo 'Comum';
                }
            ?>
        </figcaption>
    </figure>
    <p class="user-adm"></p>
</div>