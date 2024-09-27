<?php
session_start(); // Iniciar la sesión

$valor = isset($_SESSION['valor']) ? $_SESSION['valor'] : 'python'; // Valor por defecto

if (isset($_GET['lang'])) {
    $valor = $_GET['lang'];
    $_SESSION['valor'] = $valor; // Almacenar el valor en la sesión
}
?>
<div class="container">
<?php include 'includes/proyectos/remates/info.php'?>
<h4>Lenguajes</h4>
<div class="selector ">
<button class="lenguaje <?php if($valor=="python"){echo "lenguajeSelect";} ?>" onclick="changeLanguage('python')">Python</button>
<button class="lenguaje <?php if($valor=="celery"){echo "lenguajeSelect";} ?>" onclick="changeLanguage('celery')">Celery</button>
<button class="lenguaje <?php if($valor=="vue"){echo "lenguajeSelect";} ?>" onclick="changeLanguage('vue')">Vue</button>
</div>
<div id="content">
    <?php include "includes/proyectos/remates/".$valor.".php"; ?>
</div>
</div>

<script>
function changeLanguage(lang) {
    // Redirige con el nuevo parámetro
    window.location.href = "?lang=" + lang;
}
</script>
