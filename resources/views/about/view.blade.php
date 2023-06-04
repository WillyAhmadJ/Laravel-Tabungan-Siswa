@extends('adminlte.app')

@section('title')
About

@endsection

@section('content')

<?php
    function rupiah($angka){
        
        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
        return $hasil_rupiah;
     
    }
?>

<p>
    Aplikasi tabungan ini di bangun menggunakan Laravel Framework version 5.2.39 yang berbasis PHP. Informasi kontak:        
</p>
<p style="font-size: 18px">Contact Person <span class="glyphicon glyphicon-user"></span> : Willy Ahmad Jayadi</p><br>
<p style="font-size: 18px">Wa/Telegram <span class="glyphicon glyphicon-phone"></span> : 085759950920</p><br>
<p style="font-size: 18px">Instagram : willyahmadj</p>
@endsection