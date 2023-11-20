@extends('layout.main')
@section('title','Halaman Dosen')
@section('content')

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Dosen</h4>
                <p class="card-description">
                Daftar Dosen
                </p>
                <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item )
                            <tr>
                                <td>{{$item['kode']}}</td>
                                <td>{{$item['nama']}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
