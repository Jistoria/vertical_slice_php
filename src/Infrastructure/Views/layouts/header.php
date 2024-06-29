<!-- src/Infrastructure/Views/layouts/header.php -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="../10644960.png" alt="Logo" width="50" height="50">
            <a class="navbar-brand" href="#"><?= $title ?? 'Application Tasks' ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/tasks">Tasks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tasks/create">Create Task</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>