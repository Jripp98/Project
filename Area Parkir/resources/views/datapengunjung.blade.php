@extends('template')
@section('title', 'Area Parkir')

@section('konten')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwall.alphacoders.com%2Fbig.php%3Fi%3D1022371&psig=AOvVaw0xK0owYO7vo2dJ3p9wLWZ-&ust=1652542430918000&source=images&cd=vfe&ved=0CAwQjRxqFwoTCNDRs6zo3PcCFQAAAAAdAAAAABAI">

<div class="container">
    <h2> DATA PENGUNJUNG </h2>
	<div class="row">
        <div class="table-responsive">                
            <table id="mytable" class="table table-bordred table-striped">
                <thead>
                    <th>Nama</th>
                    <th>Plat</th>
                    <th>Nomor</th>
                    <th>Jenis kendaraan</th>
                    <th>Merek kendaraan</th>
                </thead>
            <tbody> 
                @foreach($pengunjung as $pgj)
                <tr>
                    <td>{{$pgj->nama}}</td>
                    <td>{{$pgj->plat}}</td>
                    <td>{{$pgj->nomor}}</td>
                    <td>{{$pgj->jenis}}</td>
                    <td>{{$pgj->merek}}</td>
                    <td>
                        <a href="/pengunjung/edit/{{ $pgj->id}}">Edit</a>
                        <!-- <a href="">Edit</a>&nbsp;&nbsp;&nbsp; -->
                        <a style="color:red;" href="/pengunjung/hapus/{{ $pgj->id}}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection