<div class="container">
<h4>Vue</h4>
<p>
    Esta es la interfaz de usuario de la aplicación, desarrollada con Vue.js. 
    Permite a los usuarios interactuar de manera dinámica y fluida con el sistema, 
    ofreciendo una experiencia de usuario rica y responsiva.
</p>

<h5>Objetivos</h5>
<p>
    El objetivo era crear una interfaz intuitiva que facilite la navegación y el acceso a las 
    funcionalidades del sistema, conectándose con la API y el servidor Socket para obtener y mostrar datos en tiempo real.
</p>

<h5>Características Clave</h5>
<ul>
    <li>Interfaz reactiva que actualiza automáticamente la vista en función de los cambios en los datos.</li>
    <li>Implementación de rutas dinámicas utilizando Vue Router para una navegación fluida.</li>
    <li>Gestión de estado mediante Vuex para manejar datos globales y sincronizar el estado entre componentes.</li>
    <li>Utiliza un CDN de Socket.io para las comunicaciones en tiempo real, facilitando la interacción instantánea con el servidor.</li>
</ul>

<h5>Tecnologías Utilizadas</h5>
<p>Vue.js, Vue Router, Vuex, Socket.io, Docker.</p>

<h5>Desafíos y Soluciones</h5>
<p>
    Uno de los desafíos fue garantizar que las actualizaciones en tiempo real se reflejaran de manera 
    eficiente en la interfaz. Para abordar esto, implementé un sistema de escucha de eventos utilizando 
    Socket.io que permite recibir datos en tiempo real y actualizar la vista de forma dinámica.
</p>
<p>
    Además, enfrenté problemas con <code>socket.io-client</code> para conectar con el servidor. 
    Para solucionar esto, decidí utilizar un CDN de Socket.io, lo que simplificó la configuración y 
    mejoró la estabilidad de la conexión.
</p>

<h5>Próximos Pasos</h5>
<p>Planeo agregar más funcionalidades:
    <ul>
        <li>Mejoras en la interfaz de usuario para una mejor accesibilidad.</li>
    </ul>
</p>

<p>Link del repositorio: <a href="https://github.com/gastonnicora/Vue.git" target="_blank">GitHub</a></p>
<p>Link de la imagen Docker: <a href="https://hub.docker.com/r/gastonnicora/remates-vue" target="_blank">Docker Hub</a></p>
</div>
