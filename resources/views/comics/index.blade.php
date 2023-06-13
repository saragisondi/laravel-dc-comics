@extends('layout.main')

@section('content')
<div class="container">

  <h1 class="fw-bold text-center my-5 text-uppercase text-primary">Comics</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col text-uppercase ">ID</th>
        <th scope="col text-uppercase ">Titolo</th>
        <th scope="col text-uppercase ">Serie</th>
        <th scope="col text-uppercase ">Tipo</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr >
        @foreach ($comics as $comic)
        <td>{{$comic->id}}</td>
        <td>{{$comic->title}}</td>
        <td>{{$comic->series}}</td>
        <td>{{$comic->type}}</td>
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
</div>
@endsection


