@extends('layouts.css')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 30px;">
  <div class="col-2">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><i class="fas fa-home"></i> Menu Utama</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><i class="fas fa-warehouse"></i> Status</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages"><i class="fas fa-clipboard-list"></i> Daftar Pengguna</a>
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
          Jumlah Laporan & Pengguna <i class="fas fa-angle-down"></i>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
                <form>
                  <div class="col-6">
                    <label class="sr-only" for="inlineFormInputGroup">Jumlah Laporan & Pengguna</label>
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
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-sort-numeric-up"></i></div>
                      </div>  
                      <button type="button" class="btn btn-primary">
                      Pengguna
                      <span class="badge badge-light">
                          {{$count_user}}
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
                  Status Laporan <i class="fas fa-angle-down"></i>
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
                      <th colspan="2">Aksi</th>
                    </tr>
                  </thead>
                    @foreach ($lapor as $lapors)
                    <tbody>
                        <tr>
                          <th scope="row">{{$lapors->id}}</th>
                          <td>{{$lapors->judul}}</td>
                          <td>{{$lapors->penulis}}</td>
                          <td>{{$lapors->deskripsi}}</td>
                          <td>{{$lapors->telepon}}</td>
                          <td><img src="{{url('/gambar/', $lapors->gambar)}}" style="width: 30%;height: 30%;"> </td>
                          <td>{{$lapors->status}}</td>
                          <td><a href="{{url('admin/update', $lapors->id)}}">Terima</a></td>
                          <td><a href="{{url('admin/delete_lapor', $lapors->id)}}">Hapus</a></td>
                        </tr>
                    </tbody>
                   @endforeach
                </table>              
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
                  Daftar Pengguna <i class="fas fa-angle-down"></i>
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Email</th>
                      <th colspan="2">Pengaturan</th>
                    </tr>
                  </thead>
                    @foreach ($user as $users)
                    <tbody>
                        <tr>
                          <th scope="row">{{$users->id}}</th>
                          <td>{{$users->name}}</td>
                          <td>{{$users->email}}</td>
                          <td><a href="{{url('admin/edit', $users->id)}}">Ubah</a></td>
                          <td><a href="{{url('admin/delete', $users->id)}}">Hapus</a></td>
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
