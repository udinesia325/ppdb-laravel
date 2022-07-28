@extends('template.index')

@section('content')
    <div class="row justify-content-center pt-5 gap-4">

        <a href="{{ route('siswa') }}"
            class="col col-12 col-md-5 card text-decoration-none shadow bg-info mx-2 my-5 d-flex justify-content-center align-items-center base-card"
            style="height:13em" data-arah="siswa">
            <h1 class="text-white">Lihat Siswa Terdaftar</h1>
            <p class="text-white">{{ $jumlah }} siswa Terdaftar</p>
        </a>
        <a href="{{ route('register') }}"
            class="col col-12 col-md-5 card text-decoration-none shadow bg-danger mx-2 my-5 d-flex justify-content-center align-items-center base-card"
            style="height:13em" data-arah="siswa">
            <h1 class="text-white ">Daftar Siswa Baru</h1>
        </a>
            <div class="col- col-12 d-flex justify-content-center align-items-center">
        @if (Auth::guest())
                <a href="{{ route('login') }}" class="btn  btn-outline-primary px-5">Login</a>
            @else
                <a href="{{ route('logout') }}" class="btn  btn-outline-primary px-5">Logout</a>
        @endif
            </div>



    </div>
@endsection
