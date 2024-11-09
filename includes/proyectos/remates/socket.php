<div class="container">
<h4>Socket</h4>
<p>Servidor que recibe información de la API Python mediante Redis y le envía dicha información a los usuarios necesarios mediante Socket.io  </p>
<p>El servidor está desarrollado con Flask y Flask-SocketIO, lo que nos permite manejar las peticiones del cliente y gestionar eventos en tiempo real. Al ser una imagen de Docker, el servidor se ejecuta sobre Gunicorn.</p>

<h5>Objetivos</h5>
<p>Mantener una comunicación estable y en tiempo real con diversos clientes mediante WebSocket</p>

<h5>Características Clave</h5>
<ul>
    <li>Soporte para WebSockets, permitiendo comunicación en tiempo real.</li>
    <li>Uso de Redis para la comunicación entre servicios.</li>
</ul>

<h5>Tecnologías Utilizadas</h5>
<p>Flask, Flask-SocketIO Redis, Docker</p>

<h5>Desafíos y Soluciones</h5>
<a>Uno de los desafíos que enfrente fue mejorar el rendimiento de API. Por ello tome la decision de dividir el código en 2 contenedores (API y socket), de esta manera API queda mas simple y ademas permite aumentar la cantidad de hilos que permiten peticiones http</a>

<h5>Próximos Pasos</h5>
<p>Planeo agregar más funcionalidades:
    <ul>
        <li>Facilitar mensajería en tiempo real entre clientes y empresas.</li>
    </ul>
</p>

<p>Link del repositorio: <a href="https://github.com/gastonnicora/Socket.git">GitHub</a></p>
<p>Link de la imagen Docker: <a href="https://hub.docker.com/r/gastonnicora/remates-socket">Docker Hub</a></p>
</div>
