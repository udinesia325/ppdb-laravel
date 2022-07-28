<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Data Siswa {{ $siswa->nm_peserta }}</title>
</head>

<body>
    <div class="container">
        <h3 class="text-center mt-3 pt-4 mb-2">Data Siswa Terdaftar Di SMK BABUSSALAM</h3>
        <p class="text-center">Tahun Ajaran {{ date('Y') }}/{{ date('Y') + 1 }}</p>

        <div class="row justify-content-center">
            <div class="col col-8 px-5 d-flex flex-column">
                <hr>
                <table cellpadding="4">
                    <tr>
                        <td><b>Nama </b></td>
                        <td>: {{ $siswa->nm_peserta }}</td>
                    </tr>
                    <tr>
                        <td><b>NIK</b> </td>
                        <td>: {{ $siswa->nik }}</td>
                    </tr>
                    <tr>
                        <td><b>Jurusan</b> </td>
                        <td>: {{ $siswa->jurusan === 'rpl' ? 'Rekayasa Perangkat Lunak' : 'Tata Boga' }}
                        </td>
                    </tr>
                    <tr>
                        <td><b>Agama</b> </td>
                        <td>: {{ $siswa->agama }}</td>
                    </tr>
                    <tr>
                        <td><b>Tempat Lahir</b> </td>
                        <td>: {{ $siswa->tmp_lahir }}</td>
                    </tr>
                    <tr>
                        <td><b>Tanggal Lahir</b> </td>
                        <td>: {{ $siswa->tgl_lahir }}</td>
                    </tr>
                    <tr>
                        <td><b>Jenis Kelamin </b></td>
                        <td>: {{ $siswa->jk == 'l' ? 'Laki Laki' : 'Perempuan' }}</td>
                    </tr>
                    <tr>
                        <td><b>Alamat</b> </td>
                        <td>: {{ $siswa->alm_lengkap }}</td>
                    </tr>
                    <tr>
                        <td><b>Kode Pos </b></td>
                        <td>: {{ $siswa->kode_pos }}</td>
                    </tr>
                    <tr>
                        <td><b>Nama Ayah</b></td>
                        <td>: {{ $siswa->nm_ayah }}</td>
                    </tr>
                    <tr>
                        <td><b>NIK</b></td>
                        <td>: {{ $siswa->nik_ayah }}</td>
                    </tr>
                    <tr>
                        <td><b>Pekerjaan</b></td>
                        <td>: {{ $siswa->pekerjaan_ayah }}</td>
                    </tr>
                    <tr>
                        <td><b>Pendidikan</b></td>
                        <td>: {{ $siswa->pendidikan_ayah }}</td>
                    </tr>
                    <tr>
                        <td><b>Nama Ibu</b></td>
                        <td>: {{ $siswa->nm_ibu }}</td>
                    </tr>
                    <tr>
                        <td><b>NIK</b></td>
                        <td>: {{ $siswa->nik_ibu }}</td>
                    </tr>
                    <tr>
                        <td><b>Pekerjaan</b></td>
                        <td>: {{ $siswa->pekerjaan_ibu }}</td>
                    </tr>
                    <tr>
                        <td><b>Pendidikan</b></td>
                        <td>: {{ $siswa->pendidikan_ibu }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
