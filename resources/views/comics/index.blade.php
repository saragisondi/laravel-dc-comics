@extends('layout.main')

@section('content')

  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titolo</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Tipo</th>
        <th scope="col">Data Uscita</th>
        <th scope="col">Serie</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr >
        @foreach ($comics as $comic)
        <td>{{$comic->id}}</td>
        <td>{{$comic->title}}</td>
        <td>{{$comic->price}}</td>
        <td>{{$comic->type}}</td>
        <td>{{$comic->sale_date}}</td>
        <td>{{$comic->series}}</td>
        <td>
          <a href="{{route('comic.show', $comic)}}" title="vai" class="btn btn-success my-4"><i class="fa-solid fa-eye"></i></a>
        </td>
        <td>
          <a href="{{route('comic.show', $comic)}}" title="modifica" class="btn btn-primary my-4"><i class="fa-solid fa-pencil"></i></a>
        </td>
        <td>
          <a href="{{route('comic.show', $comic)}}" title="delete" class="btn btn-danger my-4"><i class="fa-solid fa-trash-can"></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection


