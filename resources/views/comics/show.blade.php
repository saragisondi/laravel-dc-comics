@extends('layout.main')

@section('content')

<div class="container d-flex">
  <div class="row">

      <div class="col my-4" >
          <div class="card px-4 h-100" style="width: 80rem;">
            <h2 class="text-center fw-bold my-5 text-uppercase text-primary-emphasis">{{$comic->title}}</h2>
            <div class="container ">
              <img src="{{$comic->thumb}}" class="card-img-top  alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold text-uppercase text-primary-emphasis ">Descrizione:</h5>
              <p class="card-text">{{$comic->description}}</p>
              <h5 class="card-title fw-bold text-uppercase text-primary-emphasis ">Data uscita:</h5>
              <p class="card-text">{{$comic->sale_date}}</p>
              <h5 class="card-title fw-bold text-uppercase text-primary-emphasis ">Artisti:</h5>
              <p>{{$comic->artists}}</p>
              <h5 class="card-title fw-bold text-uppercase text-primary-emphasis">Scrittori:</h5>
              <p>{{$comic->writers}}</p>
              <h5 class="card-title fw-bold text-uppercase text-danger text-center fs-2">Prezzo:</h5>
              <p class="text-center fs-1 fw-bold">{{$comic->price}}</p>
              <div class="col text-center">
                <a href="{{route('comic.index')}}" class="btn btn-primary my-4 fw-bold">Torna indietro</a>
              </div>
            </div>
          </div>
        </div>

  </div>
</div>
@endsection
