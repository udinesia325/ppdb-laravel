@extends('template.index')
@section('content')
    <div class="card mx-auto-shadow px-2 py-2">
        <div class="card-body">
            <h5 class="card-title">{{ $siswa->nm_peserta }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">NIK : {{ $siswa->nik }}</h6>
            <p class="card-text">{{ $siswa->alm_lengkap }}</p>
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nama Ayah : {{  $siswa->nm_ayah }}</li>
                    <li class="list-group-item">Pekerjaan Ayah : {{  $siswa->pekerjaan_ayah }}</li>
                  
                   
                </ul>
            </div>
        </div>
    </div>
@endsection
