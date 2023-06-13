@extends('layout.main')

@section('content')

<div>
  <h1 class="my-5 text-center fw-bold text-primary-emphasis">Nuovo Fumetto</h1>

  <form action="{{route('comic.store')}}" method="POST">
    {{-- token di validità form --}}
    @csrf

    <div class="container">
      <div class="mb-3">
        <label for="title" class="form-label fw-bold">Titolo</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>

      <div class="mb-3">
        <label for="thumb" class="form-label fw-bold">Immagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label fw-bold">Descrizione</label>
        <input type="text" class="form-control" id="description" name="description">
      </div>

    <button type="submit" class="btn btn-primary fw-bold">Invia</button>
  </form>

    </div>
</div>

@endsection
