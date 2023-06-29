<?php $__env->startSection('page'); ?>
<div class="container "style="padding-top:85px;">
    <table class="table table=bordered table-hover">
      <thead>
        <tr>
          <th scope="col">Status</th>
          <th scope="col">Periode</th>
          <th scope="col">Invoiced</th>
          <th scope="col">Expired</th>
          <th scope="col">Code</th>
          <th scope="col">Value</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
              <td><?php echo e($invoice['status']['client']); ?></td>
              <td><?php echo e($invoice['period']['period']); ?></td>
              <td><?php echo e($invoice['invoiced']['dFY']); ?></td>
              <td><?php echo e($invoice['expired']['dFY']); ?></td>
              <td><?php echo e($invoice['code']); ?></td>
              <td><?php echo e('Rp.'.number_format($invoice['value'])); ?></td>
              <td>
                <a class="btn btn-sm btn-info" href="<?php echo e(url('/invoiceDetail')); ?>?parameter=<?php echo e($invoice['parameter']); ?>">Detail</a>
              </td>
          </tr> 
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mikrotik\resources\views/invoice.blade.php ENDPATH**/ ?>