@extends('layout.main')
@section('title', 'Prodi')
@section('content')

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Tambah Prodi</h4>

                <form class="forms-sample" method="POST" action="{{route('prodi.store')}}">
                  @csrf

                  <div class="form-group">
                    <label for="exampleInputUsername1">Nama Program Studi</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Prodi" value="{{old('nama')}}">
                    @error('nama')
                      <label for-"nama" class="text-danger">{{$message}}</label>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputUsername1">Nama Fakultas</label>
                    <select name="fakultas_id" class="form-control" >
                      @foreach ($fakultas as $item)
                        <option value="{{$item->id}}">{{$item ->nama}}</option>
                      @endforeach
                    </select>
                    @error('fakultas_id')
                      <label for="nama" class="text-danger">{{$$message}}</label>
                    @enderror
                  </div>

                  <button type="submit" class="btn btn-primary mr-2" fdprocessedid="ff1kyw">Simpan</button>
                  <a href="{{url('prodi')}}" class="btn btn-light" fdprocessedid="s74qgr">Batal</button>
                </form>
              </div>
            </div>
          </div>
    </div>
@endsection

