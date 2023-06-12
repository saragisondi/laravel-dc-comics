@extends('layout.main')

@section('content')
<h1>Fumetti</h1>

<div class="container d-flex">
  <div class="row">
    @foreach ($comics as $comic)
      <div class="col my-4" >
          <div class="card px-4 h-100" style="width: 18rem;">
            <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$comic->title}}</h5>
              <p class="card-text">{{$comic->price}}</p>
              <p>{{$comic->type}}</p>
              <p>{{$comic->sale_date}}</p>
              <p>{{$comic->series}}</p>
            </div>
            <a href="#" class="btn btn-primary my-4">DESCRIZIONE</a>
          </div>
        </div>
      @endforeach
  </div>
</div>
@endsection


