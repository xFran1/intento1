<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css">
</head>
<body class="container-fluid  d-flex flex-column">
    
        <div class=" row d-flex justify-content-center align-items-center vh-100 position-relative">
       
        <div class="row bg-primary d-flex justify-content-center position-absolute top-0">
            <div class="col-8 bg-secondary d-flex justify-content-center position-relative ">
            <?php if(Session::has('success')): ?>
            <span class="alert position-absolute w-5 top-0 alert-success mt-2 p-2"><?php echo e(Session::get('success')); ?></span>
        <?php endif; ?>
            </div>
        </div>

        <div class="col-6">
        <h2>Inicio sesión</h2>
      
    <div class="card-body">
                <form action="<?php echo e(route('AddUser')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Full Name</label>
                        <input type="text" name="full_name" value="<?php echo e(old('full_name')); ?>" class="form-control" id="formGroupExampleInput" placeholder="Enter Full Name">
                        <?php $__errorArgs = ['full_name'];
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
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                        <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="form-control" id="formGroupExampleInput2" placeholder="Enter Email">
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
                   
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Password</label>
                        <input type="password" name="password" value="<?php echo e(old('password')); ?>" class="form-control" id="formGroupExampleInput2" placeholder="Enter password">
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
                  

                    <button type="submit" class="btn btn-primary">Save</button>


                </form>
            </div>
          

        </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\Users\franr\Desktop\Proyecto-Laravel2\resources\views/login.blade.php ENDPATH**/ ?>