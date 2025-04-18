<?php $__env->startSection("content"); ?>

    <main class="flex-shrink-0 mt-5">
        <div class="container" style="max-width:600px">
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
                <div class="my-3 p-3 bg-body rounded shadow-sm">
                    <div class="mb-3 mt-1">
                        Welcome <?php echo e(auth()->user()->name); ?>

                    </div>
                    <h6 class="border-bottom pb-2 mb-0">List of Tasks</h6>
                    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="d-flex text-body-secondary pt-3">


                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M13 18l6 -6" /><path d="M13 6l6 6" /></svg>


                            <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                <div class="d-flex justify-content-between">
                                    <strong class="text-gray-dark"><?php echo e($task->title); ?> | <?php echo e($task->deadline); ?></strong>
                                    <a href="<?php echo e(route('task.status.update',$task->id)); ?>" class="btn btn-success" ><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg></a>

                                    <a href="<?php echo e(route('task.delete',$task->id)); ?>" class="btn btn-danger" ><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                    </a>

                                </div>
                                <span class="d-block"><?php echo e($task->description); ?></span>
                            </div>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <div class="mt-3">
                            <?php echo e($tasks->links()); ?>


                        </div>

                </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout.default", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Calina\to-do-app\resources\views/welcome.blade.php ENDPATH**/ ?>