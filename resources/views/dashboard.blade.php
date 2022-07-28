@extends('template.index')

@section('content')
<h1 class="m-3">Data siswa terdaftar di SMK Babussalam</h1>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">nama</th>
                        <th scope="col">tgl lahir</th>
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
                        <td>
                        <a href="/siswa/cetak/{{ $s->id }}" class="btn btn-sm btn-danger fw-bold">Cetak PDF</a>
                        @if(!Auth::guest())
                        <a href="/siswa/detail/{{ $s->id }}" class="btn btn-sm btn-warning fw-bold">detail</a>
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
