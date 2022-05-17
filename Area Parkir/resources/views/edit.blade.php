@extends('template')
@section('title', 'Edit Data pengunjung')

@section('konten')
@foreach($pengunjung as $pjg)
    
    <div class="content ">
        <div class="edit">
        <form action="/pengunjung/update" method ="post"> 
            {{csrf_field()}}
            id <br>  <input type=text, name="id", required="required" value="{{$pjg['id']}}" readonly><br>
            Nama Lengkap <br>  <input type=text, name="nama", required="required" value="{{$pjg['nama']}}"><br>
            plat <br> <input type=text, name="plat", required="required" value="{{$pjg['plat']}}"><br>
            nomor <br><input type=text, name="nomor", required="required" value="{{$pjg['nomor']}}"><br>
            jenis <br> <input type=text, name="jenis", required="required" value="{{$pjg['jenis']}}"><br>
            merek <br> <input type=text, name="merek", required="required" value="{{$pjg['merek']}}"><br>
            <input type="submit" value="Simpan Data">   
        </form>
        </div>
    @endforeach
@endsection