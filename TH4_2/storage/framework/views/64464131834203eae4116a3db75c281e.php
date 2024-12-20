<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1">
    <title>Issues List App</title>
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
    </nav>
    <div class="container">
        <h1>Danh sách các vấn đề</h1>
        <a href="<?php echo e(route('issues.create')); ?>" class="btn btn-primary">Thêm mới</a>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên máy tính</th>
                    <th>Hệ điều hành</th>
                    <th>Người báo cáo</th>
                    <th>Ngày báo cáo</th>
                    <th>Mức độ sự cố</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $issues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $issue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($issue->id); ?></td>
                    <td><?php echo e($issue->computer->computer_name); ?></td>
                    <td><?php echo e($issue->computer->operating_system); ?></td>
                    <td><?php echo e($issue->reported_by); ?></td>
                    <td><?php echo e($issue->reported_date); ?></td>
                    <td><?php echo e($issue->urgency); ?></td>
                    <td><?php echo e($issue->status); ?></td>
                    <td>
                        <a href="<?php echo e(route('issues.edit', $issue->id)); ?>" class="btn btn-warning">Sửa</a>
                        <form action="<?php echo e(route('issues.destroy', $issue->id)); ?>" method="POST" style="display: inline-block;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <?php echo e($issues->links('pagination::bootstrap-4')); ?>

        </div>
    </div><?php /**PATH C:\xampp\htdocs\TH4_2\resources\views/issues/index.blade.php ENDPATH**/ ?>