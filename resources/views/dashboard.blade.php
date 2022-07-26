@extends('template.index')

@section('content')
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
                        <a href="/siswa/detail/{{ $s->id }}" class="btn btn-sm btn-warning fw-bold">detail</a></td>
                    </tr>
                 <?php $no++ ?>
                @empty
                    <div class="alert alert-danger"><p>Data siswa masih kosong</p></div>
                @endforelse

                </tbody>
            </table>
    </div>
@endsection
