<?php
$url = "https://mikrotik.startxindonesia.co.id/api/v1/product/detail?type=parameter&param=". $_GET['parameter'];
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
curl_close($curl);

$data = json_decode($response, true);
?>
<?php $__env->startSection('page'); ?>

<div class="container "style="padding-top:85px;">
  <table class="table table=bordered table-hover">
    <tbody>
      <tr>
      <th>Status</th>
      <td><?php echo $data['response']['data']['status']['name']; ?></td>
      </tr>
      <tr>
      <th>Kode</th>
      <td><?php echo $data['response']['data']['code']; ?></td>
      </tr>
      <tr>
      <th>Nama</th>
      <td><?php echo $data['response']['data']['name']; ?></td>
      </tr>
      <tr>
      <th>Harga</th>
      <td><?php echo 'Rp. '.number_format( $data['response']['data']['price']); ?></td>
      </tr> 
      <tr>
      <th>Speed</th>
      <td><?php echo $data['response']['data']['speed']; ?></td>
      </tr> 
      <td>
              <a class="btn btn-sm btn-info" href="<?php echo e(url('/product')); ?>">Back</a>
            </td>
    </tbody>
  </table>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mikrotik\resources\views/productDetail.blade.php ENDPATH**/ ?>