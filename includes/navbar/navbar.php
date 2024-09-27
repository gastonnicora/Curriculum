
    <nav class="nav navbar sticky-top">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a
                    style="padding: 0rem 0.5rem"
                    id="backButton"
                    role="button"
                    aria-label="volver"
                    tabindex="0">
                    <i class="fa-solid fa-arrow-left-long"></i>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav mr-auto">
            <li>
                <a class="navbar-brand" href="/" aria-label="Ir a la página principal">
                    <img class="img-fluid" src="assets/icon/favicon-32x32.png" alt="">
                </a>
            </li>
        </ul>

    </nav>
<script>
    document.getElementById('backButton').addEventListener('click', function() {
        window.history.back(); // Navega a la página anterior
    });

    // También puedes agregar el evento para cuando se presiona "Enter" o "Space"
    document.getElementById('backButton').addEventListener('keydown', function(event) {
        if (event.key === 'Enter' || event.key === ' ') {
            window.history.back(); // Navega a la página anterior
        }
    });
</script>