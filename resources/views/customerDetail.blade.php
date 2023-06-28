@extends('layouts.app')
<?php
$url = "https://mikrotik.startxindonesia.co.id/api/v1/customer/detail?type=parameter&param=".$_GET['parameter']."&include=subscription";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
curl_close($curl);

$data = json_decode($response, true);
?>
@section('page')
<div class="container "style="padding-top:85px;">
    <?php if(isset($data['response']['data']['subscription']) && is_array($data['response']['data']['subscription'])) {?>
      <?php 
      foreach ($data['response']['data']['subscription']['data'] as $subscription) { ?>
  <table class="table table=bordered table-hover">
    <tbody>
    <tr>
      <th>Kode</th>
      <td><?php echo $subscription['code']; ?></td>
      </tr>
      <tr>
      <th>Number</th>
      <td><?php echo $subscription['number']; ?></td>
      </tr>
      <tr>
      <th>Status</th>
      <td><?php echo $subscription['status']['value']; ?></td>
      </tr>
      <tr>
      <th>Start</th>
      <td><?php echo $subscription['start']['dFY']; ?></td>
      </tr> 
      <tr>
      <th>Install</th>
      <td><?php echo $subscription['install']['dFY'];?></td>
      </tr> 
      <tr>
      <th>latitude</th>
      <td><?php echo $subscription['latitude']; ?></td>
      </tr> 
      <tr>
      <tr>
      <th>longitude</th>
      <td><?php echo $subscription['longitude']; ?></td>
      </tr> 
    </tbody>
      </table>
      <?php  }?>
      <?php  }?>
      <a class="btn btn-sm btn-info" href="{{ url('/customer') }}">Back</a>
</div>

    @endSection