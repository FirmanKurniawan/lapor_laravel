<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        {{-- BOOTSTRAP --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> --}}
    </head>
    <body>
        <div class="flex-center position-ref full-height" style="margin: 10px 0 0 10px;">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-primary mr-sm-2">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary mr-sm-2">Masuk</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary">Daftar</a>
                    @endif
                    @endauth
                </div>
            @endif
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 10px;">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="https://semanickzaine.files.wordpress.com/2016/11/arch-linux-wallpapers-4.jpg" alt="First slide" style="height: 300px;">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://static.cdn-cdpl.com/wp-images/2014/07/kali_wall_cover-image(700x350-crop).png" alt="Second slide" style="height: 300px;">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://hdqwalls.com/wallpapers/linux-mint-black.jpg" alt="Third slide" style="height: 300px;">
            </div>
          </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
        </div>

        <div class="container" style="margin: 20px 0px 20px 100px">
            <div style="margin-bottom: 30px;">
            </div>
            <div class="card-deck">
                <div class="row" style="width: 100%;">
                @foreach ($lapor as $lapors)
                    <div class="col-md-4">
                      <div class="card" style="margin: 20px 0 20px 0">
                        <img class="card-img-top" style="height: 180px; width: 100%; display: block;" src="{{url('/gambar/',$lapors->gambar)}}" data-holder-rendered="true">
                        <div class="card-body">
                          <h5 class="card-title">{{$lapors->judul}}</h5>
                          <p class="card-text">{{$lapors->deskripsi}}</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Last Updated : {{$lapors->updated_at->diffForHumans()}}</small><br>
                          <small class="text-muted">Penulis      : {{$lapors->penulis}}</small>
                        </div>
                      </div>
                    </div>
                @endforeach
                <div class="justify-content-center">
                {!! $lapor->render() !!}
                </div>
                </div>
            </div>
        </div>

{{-- <nav aria-label="...">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active">
      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav> --}}

    </body>
</html>
