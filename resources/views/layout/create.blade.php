@extends('layout.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Tambah Siswa</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{url('/store')}}" method="POST">
                        @CSRF
                        <div class="form-group">
                            <label for="Nama">Nama siswa</label>
                            <input type="text" name="nama" class="form-control" placeholder="Rakhsha Nabil">
                        </div>

                        <div class="form-group">
                            <label for="Umur">Umur</label>
                            <input type="number" name="umur" class="form-control" placeholder="18">
                        </div>

                        <div class="form-group">
                            <label for="Jenis kelamin">Jenis kelamin</label>
                            <input type="text" name="jenisKelamin" class="form-control" placeholder="Laki-laki">
                        </div>

                        <div class="form-group">
                            <label for="Tinggi">Tinggi</label>
                            <input type="number" name="tinggi" class="form-control" placeholder="180">
                        </div>

                        <div class="form-group mt-2">
                            <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                        </div>

                        <div class="form-group mt-2">
                            <a href="{{url('/')}}"><<- kembali ke halaman utama</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection