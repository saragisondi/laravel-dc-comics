@extends('layout.main')

@section('content')

<div class="container d-flex">
  <div class="row">

      <div class="col my-4" >
          <div class="card px-4 h-100" style="width: 80rem;">
            <div class="card-body">
              <h5 class="card-title">Descrizione:</h5>
              <p class="card-text">{{$comic->description}}</p>
              <h5 class="card-title">Artisti:</h5>
              <p>{{$comic->artists}}</p>
              <h5 class="card-title">Scrittori:</h5>
              <p>{{$comic->writers}}</p>
            </div>
            <a href="{{route('comic.index')}}" class="btn btn-primary my-4">Torna indietro</a>
          </div>
        </div>

  </div>
</div>
@endsection
