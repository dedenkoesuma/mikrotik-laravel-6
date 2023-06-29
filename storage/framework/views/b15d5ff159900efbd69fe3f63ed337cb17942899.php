<?php $__env->startSection('page'); ?>
<div class="container "style="padding-top:85px;">
  <table class="table table=bordered table-hover">
    <tbody>
      <tr>
      <th>Status</th>
      <td><?php echo e($detail['status']['client']); ?></td>
      </tr>
      <tr>
      <th>Periode</th>
      <td><?php echo e($detail['period']['period']); ?></td>
      </tr>
      <tr>
      <th>Invoice</th>
      <td><?php echo e($detail['invoiced']['dFY']); ?></td>
      </tr>
      <tr>
      <th>Expired</th>
      <td><?php echo e($detail['expired']['dFY']); ?></td>
      </tr> 
      <tr>
      <th>Code</th>
      <td><?php echo e($detail['code']); ?></td>
      </tr> 
      <tr>
      <th>Value</th>
      <td><?php echo e('Rp. '.number_format( $detail['value'])); ?></td>
      </tr> 
      <td>
              <a class="btn btn-sm btn-info" href="<?php echo e(url('/invoice')); ?>">Back</a>
            </td>
    </tbody>
  </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('/layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mikrotik\resources\views/invoice/detail.blade.php ENDPATH**/ ?>