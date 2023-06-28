@extends('layouts.app')

<?php
$url = "https://mikrotik.startxindonesia.co.id/api/v1/invoice/detail?type=parameter&param=".$_GET['parameter'];
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
              <a class="btn btn-sm btn-info" href="{{ url('/invoice') }}">Back</a>
            </td>
    </tbody>
  </table>
</div>

@endSection