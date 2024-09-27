<div class="container">
<h4>Celery</h4>
<p>Es un servidor que utiliza Celery para el manejo de tareas del servidor Python. Este notifica al servidor Python cuándo debe realizar alguna acción, como, por ejemplo, comenzar o finalizar un remate.</p>

<h5>Objetivos</h5>
<p>El objetivo era reducir la carga del servidor Python. De esta manera, el servidor Celery se encarga del manejo del tiempo para tareas asíncronas, permitiendo que ambos servidores sean más escalables al mantener su estructura más sencilla.</p>

<h5>Características Clave</h5>
<ul>
    <li>Manejo eficiente de tareas en segundo plano.</li>
    <li>Visualización de tareas mediante Flower.</li>
</ul>

<h5>Tecnologías Utilizadas</h5>
<p>Flask, Celery, Redis, Docker.</p>

<h5>Desafíos y Soluciones</h5>
<p>Uno de los desafíos fue asegurar la comunicación entre los servicios. Para solucionar el problema de dependencia circular, al tener dos imágenes Docker en el mismo <code>docker-compose.yml</code>, decidí que el servidor Python enviara la información a Celery a través de Redis, y que este último se comunicara con peticiones HTTP cuando fuera necesario.</p>

<!-- <h5>Próximos Pasos</h5>
<p>Planeo agregar más funcionalidades, como una interfaz de usuario para visualizar las tareas en tiempo real y mejorar la gestión de errores.</p> -->


<p>Link del repositorio: <a href="https://github.com/gastonnicora/Celery.git">GitHub</a></p>
<p>Link de la imagen Docker: <a href="https://hub.docker.com/r/gastonnicora/remates-celery">Docker Hub</a></p>
</div>