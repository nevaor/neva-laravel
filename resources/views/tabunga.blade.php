@extends('layout.main')
@section('title')
 Tabungan
 @endsection

 @section('content')
     
<table class="table">
  <thead>
    <tr>
      <th scope="">nis</th>
      <th scope="col">nama</th>
      <th scope="col">rayon</th>
      <th scope="col">jumlah uang</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
@endsection