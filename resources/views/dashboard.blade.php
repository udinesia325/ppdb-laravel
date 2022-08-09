@extends('template.index')

@section('content')
<h1 class="m-3">Data siswa terdaftar di SMK Babussalam</h1>
@if(session()->has("pesan"))
<div class="alert alert-success alert-dismissible">
    <div class="btn-close" data-bs-dismiss="alert"></div>
    <strong>{{ session("pesan") }}</strong>
</div>
@endif

        <div class="table-responsive bg-white">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">nama</th>
                        <th scope="col">tgl lahir</th>
                         <th scope="col">jenis kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
            <?php $no = 1; ?>
                @forelse($siswa as $s)
                    
                    <tr>
                        <th scope="row">{{ $no }}</th>
                        <td>{{ $s->nm_peserta }}</td>
                        <td >{{ $s->tgl_lahir }}</td>
                        <td>{{ $s->jk }}</td>
                        <td>
                        <a href="/siswa/cetak/{{ $s->id }}" class="btn btn-sm btn-danger fw-bold">Cetak PDF</a>
                        @if(!Auth::guest())
                        <a href="/siswa/detail/{{ $s->id }}" class="btn btn-sm btn-warning fw-bold">detail</a>
                         <a href=" /siswa/hapus/{{ $s->id }}" class="btn btn-sm btn-warning fw-bold">hapus</a>
                        @else
                        @endif
                        </td>
                    </tr>
                 <?php $no++ ?>
                @empty
                    <div class="alert alert-danger"><p>Data siswa masih kosong</p></div>
                @endforelse

                </tbody>
            </table>
    </div>
@endsection
