@extends('layouts.main')

@section('container')
    <h1 class="mb-3.5">
        Halaman {{ $title }}
    </h1>
    <center>
        <h2 class="mb-4">List Anggota</h2>
            @foreach ($listMember as $member)
                <h3>
                    <a href="/member/{{ $member['link'] }}">
                        {{ $member['nama'] }}
                    </a>
                </h3>
                <h4 class="mb-5">
                    {{ $member['jurusan'] }},
                    {{ $member['absensi'] }}
                </h4>
            @endforeach
    </center>
@endsection
