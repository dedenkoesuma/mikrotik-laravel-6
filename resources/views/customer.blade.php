@extends('layouts.app')
<?php
$url = "https://mikrotik.startxindonesia.co.id/api/v1/customer?include=subscription";
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
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">NIK</th>
          <th scope="col">No Hp</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          <?php foreach($data['response']['data'] as $j) { ?>
          <tr>
              <td><?php echo $j['id']?></td>
              <td><?php echo $j['name'] ?></td>
              <td><?php echo $j['nik'] ?></td>
              <td><?php echo $j['phone'] ?></td>
              <td>
                <a class="btn btn-sm btn-info" href="{{ url('/customerDetail')}}?parameter=<?php echo $j['parameter']."&include=subscription"; ?>">Detail</a>
              </td>
          </tr> 
          <?php } ?>
      </tbody>
    </table>
</div>
@endSection