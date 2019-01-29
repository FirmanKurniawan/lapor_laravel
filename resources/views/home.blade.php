@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 30px;">
  <div class="col-2">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><i class="fas fa-home"></i> Menu Utama</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><i class="fas fa-warehouse"></i> Lapor</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages"><i class="fas fa-clipboard-list"></i> Daftar Laporan</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header bg-primary" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Jumlah Laporan <i class="fas fa-angle-down"></i>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
                <form>
                  <div class="col-6">
                    <label class="sr-only" for="inlineFormInputGroup">Jumlah Laporan</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-sort-numeric-up"></i></div>
                      </div>  
                      <button type="button" class="btn btn-primary">
                      Laporan
                      <span class="badge badge-light">
                          {{$count}}
                      </span>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
    </div>
  </div>
  <div class="card">
  </div>
</div>
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
        <div class="accordion" id="accordionExample"></div>
          <div class="card">
            <div class="card-header bg-primary" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Formulir Laporan <i class="fas fa-angle-down"></i>
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <form action="{{url('lapor/save')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="form-row">
                    <div class="col-12">
                    <label>Judul</label>
                    <label class="sr-only" for="inlineFormInputGroup">Judul</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-flag-checkered"></i></div>
                      </div>
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Judul" name="judul">
                    </div>
                  </div>
                  <div class="col-6">
                    <label>Penulis</label>
                    <label class="sr-only" for="inlineFormInputGroup">Penulis</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                      </div>  
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Penulis" name="penulis">
                    </div>
                  </div>
                  <div class="col-6">
                    <label>Deskripsi</label>
                    <label class="sr-only" for="inlineFormInputGroup">Deskripsi</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-align-justify"></i></div>
                      </div>  
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Deskripsi" name="deskripsi">
                    </div>
                  </div>
                  <div class="col-6">
                    <label>Telepon</label>
                    <label class="sr-only" for="inlineFormInputGroup">Telepon</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-phone"></i></div>
                      </div>  
                      <input type="number" class="form-control" id="inlineFormInputGroup" placeholder="Telepon" name="telepon">
                    </div>
                  </div>
                  <div class="col-6">
                    <label>Gambar</label>
                    <label class="sr-only" for="inlineFormInputGroup">Gambar</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user-shield"></i></div>
                      </div>
                      <input type="file" id="inlineFormInputGroup" placeholder="Gambar" name="gambar">
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="input-group mb-2">
                      <button type="submit" class="form-control" id="inlineFormInputGroup"><a href="" class="">
                        <i class="fa fa-paper-plane"></i>
                        Submit
                      </a></button>
                    </div>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
        <div class="accordion" id="accordionExample"></div>
          <div class="card">
            <div class="card-header bg-primary" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Daftar Laporan <i class="fas fa-angle-down"></i>
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Judul</th>
                      <th scope="col">Penulis</th>
                      <th scope="col">Deskripsi</th>
                      <th scope="col">Telepon</th>
                      <th scope="col">Gambar</th>
                      <th scope="col">Status</th>
                      <th colspan="2">Edit</th>
                    </tr>
                  </thead>
                    @foreach ($lapor as $lapors)
                    <input type="hidden" name="status" value="{{$lapors->status}}">
                    <tbody>
                        <tr>
                          <th scope="row">{{$lapors->id}}</th>
                          <td>{{$lapors->judul}}</td>
                          <td>{{$lapors->penulis}}</td>
                          <td>{{$lapors->deskripsi}}</td>
                          <td>{{$lapors->telepon}}</td>
                          <td><img src="{{url('/gambar/', $lapors->gambar)}}" style="width: 30%;height: 30%;"> {{$lapors->gambar}}</td>
                          <td>{{$lapors->status}}</td>
                          <td><a href="{{url('lapor/edit', $lapors->id)}}">Ubah</a></td>
                          <td><a href="{{url('lapor/delete', $lapors->id)}}">Hapus</a></td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>              
            </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
