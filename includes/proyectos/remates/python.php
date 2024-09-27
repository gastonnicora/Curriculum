<div class="container">
<h4>Python</h4>
<p>Esta es la API de la página, que proporciona toda la información necesaria al cliente, en este caso, Vue. Además, se comunica con un servidor Python utilizando Celery para gestionar la información de las tareas a realizar.</p>
<p>El servidor está desarrollado con Flask y Flask-SocketIO, lo que nos permite manejar las peticiones del cliente y gestionar eventos en tiempo real. Al ser una imagen de Docker, el servidor se ejecuta sobre Gunicorn.</p>

<h5>Objetivos</h5>
<p>Mantener una comunicación estable con diversos clientes mediante peticiones HTTP y WebSocket, asegurando la protección de los datos y la seguridad del usuario.</p>

<h5>Características Clave</h5>
<ul>
    <li>Autenticación y autorización mediante <code>JWT</code> para asegurar el acceso.</li>
    <li>API RESTful para interacciones estandarizadas.</li>
    <li>Soporte para WebSockets, permitiendo comunicación en tiempo real.</li>
    <li>Documentación de la API generada mediante un código propio con JSON y Jinja para visualizar los endpoints.</li>
    <li>Escalabilidad mediante contenedores Docker.</li>
    <li>Integración con Celery para la gestión de tareas asíncronas.</li>
    <li>Conexión a MariaDB para el almacenamiento de datos.</li>
    <li>Uso de Redis para la comunicación entre servicios.</li>
</ul>

<h5>Tecnologías Utilizadas</h5>
<p>Flask, Flask-SocketIO, Flask-SQLAlchemy, Redis, Docker, MariaDB.</p>

<h5>Desafíos y Soluciones</h5>
<p>Uno de los desafíos que enfrenté fue cómo hacer que los remates comenzaran a una hora determinada. Para solucionarlo, creé otro servidor con Celery que maneja estas tareas programadas. El servidor Python envía información sobre el nombre de la tarea, el momento de inicio y datos relevantes, como el UUID del remate que debe comenzar, a través de Redis. Cuando Celery completa la tarea, notifica a Python mediante peticiones HTTP usando <code>JWT</code>.</p>
<p>Además, enfrenté el reto de mantener las sesiones seguras, asegurando que pudieran ser actualizadas y cerradas en circunstancias específicas. Para abordar esto, desarrollé mi propio manejador de sesiones. Este sistema almacena la información de las sesiones en una clase, la cual contiene un diccionario con los datos de cada sesión y otro que enlaza a un usuario con todas sus sesiones. Así, cualquier modificación se refleja en todas las sesiones correspondientes.</p>

<h5>Próximos Pasos</h5>
<p>Planeo agregar más funcionalidades:
    <ul>
        <li>Permitir que las empresas puedan agregar empleados y sus respectivos permisos.</li>
        <li>Implementar un sistema de bloqueo de personas.</li>
        <li>Generar estadísticas de ventas y retiros de productos.</li>
        <li>Incorporar geolocalización de las empresas.</li>
        <li>Facilitar mensajería en tiempo real entre clientes y empresas.</li>
    </ul>
</p>

<p>Link del repositorio: <a href="https://github.com/gastonnicora/Python.git">GitHub</a></p>
<p>Link de la imagen Docker: <a href="https://hub.docker.com/r/gastonnicora/remates-python">Docker Hub</a></p>
</div>
