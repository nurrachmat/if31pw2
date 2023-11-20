@extends('layout.main')
@section('title', 'Mahasiswa')
@section('content')

    {{-- <h2>Halaman Mahasiswa</h2> --}}
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Mahasiswa</h4>
                <p class="card-description">
                Daftar Mahasiswa
                </p>
                <div class="table-responsive">
                <a href="{{ route('mahasiswa.create') }}" type="button" class="btn btn-primary btn-rounded btn-fw">Add</a>
                @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                <div class="table-responsive">
                <table class="table table-hover table-striped table-primary table-bordered">
                    <thead>
                        <tr>
                            <th> NPM </th>
                            <th> Nama </th>
                            <th> Tempat Lahir </th>
                            <th> Tanggal Lahir </th>
                            <th> Foto </th>
                            <th> Program Studi </th>
                            <th> Fakultas </th>
                            <th> Aksi </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswa as $item)
                        <tr>
                            <td> {{ $item-> npm}}
                            <td> {{ $item-> nama}}
                            <td> {{ $item-> tempat_lahir}}
                            <td> {{ $item-> tanggal_lahir}}
                            <td><img src="images/{{$item['foto']}}" width="50" height="50" >
                            <td> {{ $item-> prodi['nama']}}
                            <td> {{ $item-> prodi -> fakultas['nama']}}
                            <td><form method="POST" action="{{ route('mahasiswa.destroy', $item->id) }}">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm"
                                        data-toggle="tooltip" title='Delete'
                                        data-nama='{{ $item->nama }}'>Hapus</button>
                                </form>
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
