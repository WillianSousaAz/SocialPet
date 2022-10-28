<div class="navigation">
    <a href=""><span style="--i:0; --x:-1; --y:0"><ion-icon name="lock-closed-outline"></ion-icon></span></a>
    <a href=""><span style="--i:1; --x:1; --y:0"><ion-icon name="ban-outline"></ion-icon></span></a>
    <a href="adicionar.php"><span style="--i:2; --x:0; --y:-1"><ion-icon name="person-add-outline"></ion-icon></span></a>
    <a href=""><span style="--i:3; --x:0; --y:1"><ion-icon name="ban-outline"></ion-icon></span></a>
    <a href="painel.php"><span style="--i:4; --x:1; --y:1"><ion-icon name="home-outline"></ion-icon></span></a>
    <a href="consultar.php"><span style="--i:5; --x:-1; --y:-1"><ion-icon name="person-outline"></ion-icon></span></a>
    <a href=""><span style="--i:6; --x:0; --y:0"><ion-icon name="ban-outline"></ion-icon></span></a>
    <a href=""><span style="--i:7; --x:-1; --y:1"><ion-icon name="ban-outline"></ion-icon></span></a>
    <a href="remover.php"><span style="--i:8; --x:1; --y:-1"><ion-icon name="person-remove-outline"></ion-icon></ion-icon></span></a>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    let progress = document.getElementById('progressbar');
    let totalHeight = document.body.scrollHeight - window.innerHeight;
    window.onscroll = function(){
        let progressHeight = (window.pageYOffset / totalHeight) * 100;
        progress.style.height = progressHeight + "%";
    }
    let navigation = document.querySelector('.navigation');
    navigation.onclick = function(){
        navigation.classList.toggle('active')
    }
</script>