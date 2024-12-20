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
            <a class="navbar-brand" href="<?php echo e(route('issues.index')); ?>">Issues List App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria￾label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo e(route('issues.index')); ?>">Danh sách vấn đề</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 style="margin: 50px 50px">Cập nhật thông tin vấn đề</h1>

    <form action="<?php echo e(route('issues.update', $issue->id)); ?>" method="POST" style="margin: 50px 50px">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="computer_id" class="form-label">Tên máy tính</label>
            <select class="form-control" id="computer_id" name="computer_id" required>
                <?php $__currentLoopData = $computers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $computer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($computer->id); ?>" <?php echo e($computer->id == $issue->computer_id ? 'selected' : ''); ?>><?php echo e($computer->computer_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="computer_id" class="form-label">Hệ điều hành</label>
            <select class="form-control" id="computer_id" name="computer_id" required>
                <?php $__currentLoopData = $computers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $computer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($computer->id); ?>" <?php echo e($computer->id == $issue->computer_id ? 'selected' : ''); ?>><?php echo e($computer->operating_system); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="reported_by" class="form-label">Người báo cáo</label>
            <input type="text" class="form-control" id="reported_by" name="reported_by" value="<?php echo e($issue->reported_by); ?>">
        </div>
        <div class="mb-3">
            <label for="reported_date" class="form-label">Ngày báo cáo</label>
            <input type="date" class="form-control" id="reported_date" name="reported_date" value="<?php echo e($issue->reported_date); ?>" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea class="form-control" id="description" name="description" rows="3" required><?php echo e($issue->description); ?></textarea>
        </div>
        <div class="mb-3">
            <label for="urgency" class="form-label">Độ nghiêm trọng</label>
            <input type="text" class="form-control" id="urgency" name="urgency"  value="<?php echo e($issue->urgency); ?>"required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Trạng thái</label>
            <input type="text" class="form-control" id="status" name="status" value="<?php echo e($issue->status); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</body><?php /**PATH C:\xampp\htdocs\TH4_2\resources\views/issues/edit.blade.php ENDPATH**/ ?>