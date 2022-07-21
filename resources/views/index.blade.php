@extends('layout.default')

@section('content')
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <h1>CRUD LARAVEL</h1>
                    <a href="{{url('create')}}" class="btn btn-primary">tambah siswa</a>
                </div>

                <div class="col-lg-8 mt-5">
                    <table class="table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Jenis Kelamin</th>
                                <th>Tinggi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($readTable as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->umur }}</td>
                                <td>{{ $data->jenisKelamin }}</td>
                                <td>{{ $data->tinggi }}</td>
                                <td>
                                    <a href="{{url('/show/'. $data->id)}}" class="btn btn-warning">edit</a>
                                    <a href="{{url('/destroy/'. $data->id)}}" class="btn btn-danger">delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection