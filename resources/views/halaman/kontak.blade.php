@extends('layout/aplikasi')

@section('konten')    
<h1>{{ $judul }}</h1>
<p>Ini adalah tampilan kontak saya</p>
<p>
    <ul>
        <li>Email: {{ $kontak['email']}}</li>
        <li>YouTube: {{ $kontak['youtube']}}</li>
    </ul>
</p>
@endsection
    