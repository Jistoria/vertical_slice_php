<!-- src/Infrastructure/Views/tasks/create.php -->
<?php 
$title = "Create New Task";
ob_start(); ?>

<div class="container">
    <h2 class="mb-4">Create Task</h2>
    <?php if (isset($success)): ?>
        <div class="alert alert-success" role="alert">
            <?= $success ?>
        </div>
    <?php endif; ?>
    <form action="/tasks/create" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Título:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripción:</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Crear Tarea</button>
    </form>
</div>
<?php $content = ob_get_clean(); ?>

<?php include '../src/Infrastructure/Views/layouts/main_layout.php'; ?>
