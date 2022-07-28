@extends('template.index')

@section('content')
    <div class="row justify-content-center pt-4">
        <div class="col col-10 col-md-10 col-lg-7 px-3 py-4 card form-ku">
            <div class="card-header">
                <h1 class="text-center">Formulir Daftar Peserta Didik</h1>
            </div>
            <form action="/register" method="post" autocomplete="off">
            @csrf
                <div class="my-3 row">
                    <label for="nm_peserta" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" name="nm_peserta" id="nm_peserta" required>
                    </div>
                </div>
                <div class="my-3 row">
                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control form-control-sm" name="nik" id="nik" required>
                    </div>
                </div>
                <div class="my-3 row">
                    <label for="tmp_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" name="tmp_lahir" id="tmp_lahir" required>
                    </div>
                </div>
                <div class="my-3 row">
                    <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control form-control-sm" name="tgl_lahir" id="tgl_lahir" required>
                    </div>
                </div>
                <div class="my-3 row">
                    <label for="jk" class="col-sm-2 col-form-label">Jurusan</label>
                    <div class="col-sm-10">
                        <select name="jurusan" id=""class='form-select'>
                            <option value="rpl">Rekayasa Perangkat Lunak</option>
                            <option value="tb">Tata Boga</option>
                        </select>
                    </div>
                </div>
                <div class="my-3 row">
                    <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select name="jk" id=""class='form-select'>
                            <option value="l">Laki-Laki</option>
                            <option value="p">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="my-3 row">
                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                        <select name="agama" id=""class='form-select'>
                            <option value="islam">islam</option>
                            <option value="hindu">hindu</option>
                            <option value="kristen">kristen</option>
                            <option value="budha">budha</option>
                            <option value="katholik">katholik</option>
                        </select>
                    </div>
                </div>
                <div class="my-3 row">
                    <label for="alm_lengkap" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" name="alm_lengkap" id="alm_lengkap" required>
                    </div>
                </div>
                <div class="my-3 row">
                    <label for="kelurahan" class="col-sm-2 col-form-label">Kelurahan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" name="kelurahan" id="kelurahan" required>
                    </div>
                </div>
                <div class="my-3 row">
                    <label for="desa" class="col-sm-2 col-form-label">Desa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" name="desa" id="desa" required>
                    </div>
                </div>
                <div class="my-3 row">
                    <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" name="kecamatan" id="kecamatan" required>
                    </div>
                </div>
                <div class="my-3 row">
                    <label for="kode_pos" class="col-sm-2 col-form-label">Kode Pos</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" name="kode_pos" id="kode_pos" required>
                    </div>
                </div>
                <h5> Data Ayah</h5>
                <div class="my-3 row">
                    <label for="nm_ayah" class="col-sm-2 col-form-label">Nama Ayah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" name="nm_ayah" id="nm_ayah" required>
                    </div>
                </div>
                <div class="my-3 row">
                    <label for="nik_ayah" class="col-sm-2 col-form-label">NIK Ayah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" name="nik_ayah" id="nik_ayah" required>
                    </div>
                </div>
                <div class="my-3 row">
                    <label for="Pekerjaan_ayah" class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" name="Pekerjaan_ayah" id="Pekerjaan_ayah" required>
                    </div>
                </div>
                <div class="my-3 row">
                    <label for="pendidikan_ayah" class="col-sm-2 col-form-label">Pendidikan Ayah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" name="pendidikan_ayah" id="pendidikan_ayah" required>
                    </div>
                </div>
                <h5> Data Ibu</h5>
                <div class="my-3 row">
                    <label for="nm_ibu" class="col-sm-2 col-form-label">Nama Ibu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" name="nm_ibu" id="nm_ibu" required>
                    </div>
                </div>
                <div class="my-3 row">
                    <label for="nik_ibu" class="col-sm-2 col-form-label">NIK Ibu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" name="nik_ibu" id="nik_ibu" required>
                    </div>
                </div>
                <div class="my-3 row">
                    <label for="Pekerjaan_ibu" class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" name="Pekerjaan_ibu" id="Pekerjaan_ibu" required>
                    </div>
                </div>
                <div class="my-3 row">
                    <label for="pendidikan_ibu" class="col-sm-2 col-form-label">Pendidikan Ibu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" name="pendidikan_ibu" id="pendidikan_ibu" required>
                    </div>
                </div>
                <button class="btn btn-sm btn-primary ms-5">KIRIM</button>
            </form>
        </div>
    </div>
@endsection
