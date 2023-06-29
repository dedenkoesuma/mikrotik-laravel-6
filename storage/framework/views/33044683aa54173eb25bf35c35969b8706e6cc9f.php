<?php
$url = "https://mikrotik.startxindonesia.co.id/api/v1/invoice/detail?type=parameter&param=".$_GET['parameter'];
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
curl_close($curl);

$data = json_decode($response, true);

?>
<?php $__env->startSection('page'); ?>
    <div class="container ">
    <table class="table table=bordered table-hover">
      <tbody>
        <tr>
        <th>Status</th>
        <td><?php echo $data['response']['data']['status']['client']; ?></td>
        </tr>
        <tr>
        <th>Periode</th>
        <td><?php echo $data['response']['data']['period']['period']; ?></td>
        </tr>
        <tr>
        <th>Invoice</th>
        <td><?php echo $data['response']['data']['invoiced']['dFY']; ?></td>
        </tr>
        <tr>
        <th>Expired</th>
        <td><?php echo $data['response']['data']['expired']['dFY']; ?></td>
        </tr> 
        <tr>
        <th>Code</th>
        <td><?php echo $data['response']['data']['code']; ?></td>
        </tr> 
        <tr>
        <th>Value</th>
        <td><?php echo 'Rp. '.number_format( $data['response']['data']['value']); ?></td>
        </tr> 
        <td>
                <a class="btn btn-sm btn-info" href="../invoice.php">Back</a>
              </td>
      </tbody>
    </table>
    </div>
    </div>
    <?php require('../partials/scripts.php'); ?>
</body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mikrotik\resources\views/detail/invoice.blade.php ENDPATH**/ ?>