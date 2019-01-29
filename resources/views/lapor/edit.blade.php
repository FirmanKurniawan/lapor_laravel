@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 30px;">
    	@foreach ($lapor as $lapors)
    	<div class="card-body">
                <form action="{{url('lapor/update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$lapors->id}}">
                  <div class="form-row">
                    <div class="col-12">
                    <label>Judul</label>
                    <label class="sr-only" for="inlineFormInputGroup">Judul</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-flag-checkered"></i></div>
                      </div>
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Judul" name="judul" value="{{$lapors->judul}}">
                    </div>
                  </div>
                  <div class="col-6">
                    <label>Penulis</label>
                    <label class="sr-only" for="inlineFormInputGroup">Penulis</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                      </div>  
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Penulis" name="penulis" value="{{$lapors->penulis}}">
                    </div>
                  </div>
                  <div class="col-6">
                    <label>Deskripsi</label>
                    <label class="sr-only" for="inlineFormInputGroup">Deskripsi</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-align-justify"></i></div>
                      </div>  
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Deskripsi" name="deskripsi" value="{{$lapors->deskripsi}}">
                    </div>
                  </div>
                  <div class="col-6">
                    <label>Telepon</label>
                    <label class="sr-only" for="inlineFormInputGroup">Telepon</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-phone"></i></div>
                      </div>  
                      <input type="number" class="form-control" id="inlineFormInputGroup" placeholder="Telepon" name="telepon" value="{{$lapors->telepon}}">
                    </div>
                  </div>
                  <div class="col-6">
                    <label>Gambar</label>
                    <label class="sr-only" for="inlineFormInputGroup">Gambar</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user-shield"></i></div>
                      </div>
                      <input type="file" id="inlineFormInputGroup" placeholder="Gambar" name="gambar" value="{{$lapors->gambar}}">
                    </div>
                      <img src="{{url('/gambar/', $lapors->gambar)}}" style="width: 30%;height: 50%;margin-top: 20px;">
                  </div>
                  <div class="col-3">
                    <div class="input-group mb-2">
                      <button type="submit" class="form-control" id="inlineFormInputGroup"><a href="" class="">
                        <i class="fa fa-paper-plane"></i>
                        Submit
                      </a></button>
                    </div>
                  </div>
                  <div class="col-1">
                    <div class="input-group mb-2">
                      <a href="{{url('home')}}" class="form-control">Kembali</a>
                    </div>
                  </div>
                  </div>
                </form>
              </div>
    	@endforeach
	</div>
@endsection
