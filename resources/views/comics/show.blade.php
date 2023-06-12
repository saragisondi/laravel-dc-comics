@extends('layout.main')

@section('content')

<div class="container d-flex">
  <div class="row">
    @foreach ($comics as $comic)
      <div class="col my-4" >
          <div class="card px-4 h-100" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Descrizione:</h5>
              <p class="card-text">{{$comic->description}}</p>
              <h5 class="card-title">Artisti:</h5>
              <p></p>
              <h5 class="card-title">Scrittori:</h5>
              <p></p>
            </div>
            <a href="#" class="btn btn-primary my-4">DESCRIZIONE</a>
          </div>
        </div>
      @endforeach
  </div>
</div>
@endsection
