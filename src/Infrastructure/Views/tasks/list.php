<!-- src/Infrastructure/Views/tasks/list.php -->
<?php $title = "View Tasks"; ob_start(); ?>
<div class="container">
    <h2 class="mb-4">Tasks List</h2>
    <?php 
        if (isset($tasks) && !empty($tasks)) {
            echo '<div class="list-group">';
            foreach ($tasks as $task) {
                echo '<div class="list-group-item">';
                echo "<h5 class='mb-1'>{$task->title}</h5>";
                echo "<p class='mb-1'>{$task->description}</p>";
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo '<p class="text-danger">No tasks found.</p>';
        }
    ?>
</div>
<?php $content = ob_get_clean(); ?>

<?php include '../src/Infrastructure/Views/layouts/main_layout.php'; ?>

