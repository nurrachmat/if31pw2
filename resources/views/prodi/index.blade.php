@extends('layout.main')
@section('title', 'Prodi')
@section('content')

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Program Studi</h4>
                    <p class="card-description">
                    Daftar Program Studi
                    </p>
                    <a href="{{ route('prodi.create') }}" type="button" class="btn btn-primary btn-rounded btn-fw">Add</a>
                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <div class="table-responsive">
                    <table class="table table-striped table-primary table-bordered">
                        <thead>
                            <tr align="center">
                                <th> Nama Program Studi</th>
                                <th> Nama Fakultas</th>
                                <th> Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prodi as $item)
                                <tr align="center">
                                    <td> {{$item -> nama }}</td>
                                    <td> {{$item -> fakultas['nama']}}</td>
                                    <td>
                                        <form method="POST" action="{{ route('prodi.destroy', $item->id) }}">
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm"
                                                data-toggle="tooltip" title='Delete'
                                                data-nama='{{ $item->nama }}'>Hapus</button>
                                            <a href="{{ route('prodi.edit', $item->id) }}" class="btn btn-xs btn-primary btn-rounded">Ubah</a>    
                                        </form>
                                    </td>
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
