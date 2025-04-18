<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My Tasks</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('logout')); ?>">Logout</a>
                    </li>
                </ul>
                <a class="btn btn-outline-success" href="<?php echo e(route('task.add')); ?>">Add Task</a>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH C:\Users\Calina\to-do-app\resources\views/include/header.blade.php ENDPATH**/ ?>