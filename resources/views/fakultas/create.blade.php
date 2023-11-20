@extends('layout.main')
@section('title', 'Fakultas')
@section('content')

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Tambah Fakultas</h4>

                <form class="forms-sample" method="POST" action="{{route('fakultas.store')}}">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputUsername1">Nama Fakultas</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Fakultas" value="{{old('nama')}}">
                    @error('nama')
                      <label for-"nama" class="text-danger">{{$message}}</label>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-primary mr-2" fdprocessedid="ff1kyw">Simpan</button>
                  <a href="{{url('fakultas')}}" class="btn btn-light" fdprocessedid="s74qgr">Batal</button>
                </form>
              </div>
            </div>
          </div>
    </div>
@endsection
