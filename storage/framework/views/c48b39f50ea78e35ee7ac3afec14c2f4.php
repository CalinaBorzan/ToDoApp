<?php $__env->startSection("style"); ?>
    <style>
        html,
        body {
            height: 100%;
        }

        .form-signin {
            max-width: 330px;
            padding: 1rem;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <main class="form-signin w-100 m-auto">
        <form method="POST" action="<?php echo e(route("register.post")); ?>">
            <?php echo csrf_field(); ?>
            <img class="mb-4" src="assets/img/img.png" alt="" width="130" height="100">
            <h1 class="h3 mb-3 fw-normal">Create you account</h1>

            <div class="form-floating">
                <input name="fullname" type="text" class="form-control" id="floatingInput" placeholder="Enter name">
                <label for="floatingInput">Full name</label>
                <?php $__errorArgs = ['fullname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-floating">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-floating" style="margin-bottom: 10px">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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


            <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2025</p>
        </form>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout.auth", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Calina\to-do-app\resources\views/auth/register.blade.php ENDPATH**/ ?>