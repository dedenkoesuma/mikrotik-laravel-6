<?php $__env->startSection('page'); ?>
<div class="container "style="padding-top:85px;">
    <table class="table table=bordered table-hover">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">NIK</th>
          <th scope="col">No Hp</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
          <tr>
              <td><?php echo e($customer['id']); ?></td>
              <td><?php echo e($customer['name']); ?></td>
              <td><?php echo e($customer['nik']); ?></td>
              <td><?php echo e($customer['phone']); ?></td>
              <td>
                <a class="btn btn-sm btn-info" href="<?php echo e(url('customer/detail')); ?>?parameter=<?php echo e($customer['parameter']); ?>."&include=subscription>Detail</a>
              </td>
          </tr> 
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mikrotik\resources\views/customer/index.blade.php ENDPATH**/ ?>