<?php $__env->startSection("content"); ?>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="container" style="max-width: 500px;">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0 text-center">Add a New Task</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route("task.add.post")); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter task title">
                        </div>
                        <div class="mb-3">
                            <label for="deadline" class="form-label">Deadline</label>
                            <input type="datetime-local" name="deadline" class="form-control" id="deadline">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="description" rows="3" placeholder="Write a short description..."></textarea>
                        </div>
                        <?php if(session()->has("success")): ?>
                            <div class="alert alert-success">
                                <?php echo e(session()->get("success")); ?>

                            </div>
                        <?php endif; ?>
                        <?php if(session("error")): ?>
                            <div class="alert alert-danger">
                                <?php echo e(session()->get("error")); ?>

                            </div>
                        <?php endif; ?>
                        <div class="text-end">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout.default", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Calina\to-do-app\resources\views/tasks/add.blade.php ENDPATH**/ ?>