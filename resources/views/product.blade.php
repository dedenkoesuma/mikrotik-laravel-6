@extends('layouts.app')
<?php
$url = "https://mikrotik.startxindonesia.co.id/api/v1/product";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
curl_close($curl);

$data = json_decode($response, true);
?>
@section('page')
<div class="container " style="padding-top:85px;">
      <table class="table table=bordered table-hover">
        <thead>
        <tr>
          <th scope="col">Kode</th>
          <th scope="col">Nama</th>
          <th scope="col">Harga</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($data['response']['data'] as $j) { ?>
            <tr>
                <td><?php echo $j['code']; ?></td>
                <td><?php echo $j['name']; ?></td>
                <td><?php echo 'Rp. '.number_format($j['price']); ?></td>
                <td>
                <a class="btn btn-sm btn-info" href="{{ url('/productDetail') }}?parameter=<?php echo $j['parameter']; ?>">Detail</a>
              </td>
            </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
@endSection