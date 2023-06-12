@extends('layout.main')

@section('content')
<h1>Fumetti</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Titolo</th>
      <th scope="col">Descrizione</th>
      {{-- <th scope="col">Immagine</th> --}}
      <th scope="col">Prezzo</th>
      <th scope="col">Serie</th>
      <th scope="col">Data di uscita</th>
      <th scope="col">Tipo</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($comics as $comic)
      <tr>
        <td>{{$comic->id}}</td>
        <td>{{$comic->title}}</td>
        <td>{{$comic->description}}</td>
        {{-- <td>{{$comic->thumb}}</td> --}}
        <td>{{$comic->price}}</td>
        <td>{{$comic->series}}</td>
        <td>{{$comic->sale_date}}</td>
        <td>{{$comic->type}}</td>
      </tr>
    @endforeach

  </tbody>
</table>
@endsection
