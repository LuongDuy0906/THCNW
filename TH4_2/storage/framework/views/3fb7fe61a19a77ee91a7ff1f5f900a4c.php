<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1">
    <title>Task List App</title>
    <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
    dungkt@tlu.edu.vn9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6
    FUUVM" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg￾light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('issues.index')); ?>">Task List App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria￾label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo e(route('issues.index')); ?>">Danh sách Task</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Thêm mới</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
    <?php echo $__env->yieldContent('content'); ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bdungkt@tlu.edu.vnootstrap.bundle.min.js" integrity="sha384-
            geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\TH4_2\resources\views/issues/app.blade.php ENDPATH**/ ?>