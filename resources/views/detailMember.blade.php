@extends('layouts.main')

@section('container')
    <h1 class="mb-4">
        {{ $title }}
    </h1>
    <center>
        <h2 class="mb-5">{{ $post['nama'] }}</h2>
        <img src="/images/{{ $post['foto'] }}" alt="{{ $post['nama'] }}"
        width="256px" height="256px" class="mb-5 rounded-circle">
        <h4 class="mb-5">
            Kelas : {{ $post['jurusan'] }}, <br>
            Absensi : {{ $post['absensi'] }}, <br>
            Asal : {{ $post['asal'] }}
        </h4>
    </center>

    <a href="/member">Back to Member List</a>
@endsection
