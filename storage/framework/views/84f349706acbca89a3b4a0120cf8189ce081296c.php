<?php $__env->startSection('page'); ?>
<div class="container " style="padding-top:85px;">
      <table class="table table=bordered table-hover">
        <thead>
        <tr>
          <th scope="col">Kode</th>
          <th scope="col">Nama</th>
          <th scope="col">Harga</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($product['code']); ?></td>
                <td><?php echo e($product['name']); ?></td>
                <td><?php echo e('Rp. '.number_format($product['price'])); ?></td>
                <td>
                <a class="btn btn-sm btn-info" href="<?php echo e(url('product/detail')); ?>?parameter= <?php echo e($product['parameter']); ?>">Detail</a>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mikrotik\resources\views/product/index.blade.php ENDPATH**/ ?>