 
<?php $__env->startSection('page'); ?>

<div class="container "style="padding-top:85px;">
  <table class="table table=bordered table-hover">
    <tbody>
      <tr>
      <th>Status</th>
      <td><?php echo e($detail['response']['data']['status']['name']); ?></td>
      </tr>
      <tr>
      <th>Kode</th>
      <td><?php echo e($detail['response']['data']['code']); ?></td>
      </tr>
      <tr>
      <th>Nama</th>
      <td><?php echo e($detail['response']['data']['name']); ?></td>
      </tr>
      <tr>
      <th>Harga</th>
      <td><?php echo e('Rp. '.number_format( $detail['response']['data']['price'])); ?></td>
      </tr> 
      <tr>
      <th>Speed</th>
      <td><?php echo e($detail['response']['data']['speed']); ?></td>
      </tr> 
      <td>
              <a class="btn btn-sm btn-info" href="<?php echo e(url('/product')); ?>">Back</a>
            </td>
    </tbody>
  </table>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mikrotik\resources\views/product/detail.blade.php ENDPATH**/ ?>