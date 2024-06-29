<!-- src/Infrastructure/Views/home.php -->
<?php 
$title = "PHP Vertical Slice Architecture";
ob_start(); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-4">PHP Vertical Slice Architecture</h1>
            <div class="alert alert-info" role="alert">
                La arquitectura vertical slice permite desarrollar y mantener características individuales de manera independiente, mejorando la modularidad y la escalabilidad del proyecto.
            </div>
            <p class="lead">¿Qué es la arquitectura vertical slice?</p>
            <p>
                La arquitectura vertical slice es un enfoque de diseño en el cual cada característica de la aplicación se desarrolla como una "rebanada vertical" completa, desde la interfaz de usuario hasta la base de datos. Esto significa que cada característica incluye todos los componentes necesarios para su funcionamiento, tales como controladores, servicios, repositorios, y vistas.
            </p>
            <p class="lead">Ventajas de la arquitectura vertical slice:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item">Independencia: Cada funcionalidad puede desarrollarse y probarse de manera independiente.</li>
                <li class="list-group-item">Modularidad: Facilita la reutilización de código y la implementación de nuevas características.</li>
                <li class="list-group-item">Mantenibilidad: Hace que el código sea más fácil de mantener y escalar.</li>
                <li class="list-group-item">Claridad: Proporciona una estructura clara y organizada para el código.</li>
            </ul>
            <p class="lead">Aplicabilidad en lenguajes como PHP:</p>
            <p>
                Aunque la arquitectura vertical slice es comúnmente utilizada en lenguajes modernos, también puede aplicarse eficazmente en lenguajes más antiguos como PHP. Al estructurar tu proyecto de esta manera, puedes aprovechar las ventajas de esta arquitectura sin importar el lenguaje de programación.
            </p>
            <p>En este proyecto, hemos aplicado la arquitectura vertical slice de la siguiente manera:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item">Cada funcionalidad, como la creación de tareas y la visualización de tareas, se organiza en su propio directorio dentro de <code>src/Features</code>.</li>
                <li class="list-group-item">Cada directorio de funcionalidad contiene controladores, servicios y repositorios específicos para esa funcionalidad.</li>
                <li class="list-group-item">La infraestructura compartida, como la configuración de la base de datos y los layouts de las vistas, se encuentra en <code>src/Infrastructure</code>.</li>
            </ul>
            <p>
                Esta estructura facilita el desarrollo, prueba y mantenimiento de cada funcionalidad de manera independiente, mejorando la eficiencia y la calidad del código.
            </p>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php include '../src/Infrastructure/Views/layouts/main_layout.php'; ?>

