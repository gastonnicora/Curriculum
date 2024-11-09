    <div class="container">
<?php include 'includes/proyectos/remates/info.php'?>
<h4 id="lenguajes">Lenguajes</h4>
<div class="selector " >
<button id="pythonB" class="lenguaje  lenguajeSelect" onclick="changeLanguage('python')">Python</button>
<button id="celeryB" class="lenguaje " onclick="changeLanguage('celery')">Celery</button>
<button id="socketB" class="lenguaje " onclick="changeLanguage('socket')">Socket</button>
<button id="vueB" class="lenguaje " onclick="changeLanguage('vue')">Vue</button>
</div>
<div name="content" id="python">
    <?php include "includes/proyectos/remates/python.php"; ?>
</div>
<div name="content" id="celery" style="display:none">
    <?php include "includes/proyectos/remates/celery.php"; ?>
</div>
<div name="content" id="socket" style="display:none">
    <?php include "includes/proyectos/remates/socket.php"; ?>
</div>
<div name="content" id="vue" style="display:none">
    <?php include "includes/proyectos/remates/vue.php"; ?>
</div>

</div>

<script>
    let l = "python"
function changeLanguage(lang) {
    document.getElementById(lang).style.display = 'block';
    const select=document.getElementsByClassName("lenguajeSelect")[0];
    select.classList.remove("lenguajeSelect");
    document.getElementById(lang+"B").classList.add("lenguajeSelect");
    document.getElementById(l).style.display = 'none';
    l=lang
    document.getElementById("lenguajes").scrollIntoView({ behavior: 'smooth' })
}
</script>
