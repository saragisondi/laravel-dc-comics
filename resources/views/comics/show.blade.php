@extends('layout.main')

@section('content')

<div class="container d-flex">
  <div class="row">

      <div class="col my-4" >
          <div class="card px-4 h-100" style="width: 80rem;">
            <h2 class="text-center fw-bold my-5">{{$comic->title}}</h2>
            <div class="container-img  ">
              <img src="{{$comic->thumb}}" class="card-img-top  alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold">Descrizione:</h5>
              <p class="card-text">{{$comic->description}}</p>
              <h5 class="card-title fw-bold">Artisti:</h5>
              <p>{{$comic->artists}}</p>
              <h5 class="card-title fw-bold">Scrittori:</h5>
              <p>{{$comic->writers}}</p>
              <div class="col text-center">
                <a href="{{route('comic.index')}}" class="btn btn-primary my-4 fw-bold">Torna indietro</a>
              </div>
            </div>
          </div>
        </div>

  </div>
</div>
@endsection
