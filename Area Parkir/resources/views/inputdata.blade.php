@extends('template')
@section('title', 'Input Data pengunjung')

@section('konten')
    <form action="/pengunjung/store" method ="post">
        <center>
        {{csrf_field()}}
        Nama Lengkap <br>  <input type=text, name="nama", required="required"><br>
        plat <br> <input type=text, name="plat", required="required"><br>
        nomor <br><input type=text, name="nomor", required="required"><br>
        jenis <br> <input type=text, name="jenis", required="required"><br>
        merek <br> <input type=text, name="merek", required="required"><br>
        <input type="submit" value="Simpan Data">
        </center>
    </form>

@endsection