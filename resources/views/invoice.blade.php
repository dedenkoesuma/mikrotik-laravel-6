@extends('layouts.app')
<?php
$url = "https://mikrotik.startxindonesia.co.id/api/v1/invoice?filter[period]=2023-06";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
curl_close($curl);

$data = json_decode($response, true);
?>
@section('page')
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
          <?php foreach($data['response']['data'] as $j) { ?>
          <tr>
              <td><?php echo $j['status']['client']; ?></td>
              <td><?php echo $j['period']['period']; ?></td>
              <td><?php echo $j['invoiced']['dFY']; ?></td>
              <td><?php echo $j['expired']['dFY']; ?></td>
              <td><?php echo $j['code'];?></td>
              <td><?php echo 'Rp. '.number_format($j['value']); ?></td>
              <td>
                <a class="btn btn-sm btn-info" href="{{ url('/invoiceDetail') }}?parameter=<?php echo $j['parameter']; ?>">Detail</a>
              </td>
          </tr> 
          <?php } ?>
      </tbody>
    </table>
</div>
@endSection