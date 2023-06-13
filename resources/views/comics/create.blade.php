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
        <label for="description" class="form-label fw-bold">Descrizione</label>
        <input type="text" class="form-control" id="description" name="description">
      </div>

      <div class="mb-3">
        <label for="thumb" class="form-label fw-bold">Immagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb">
      </div>


      <div class="mb-3">
        <label for="price" class="form-label fw-bold">Prezzo</label>
        <input type="text" class="form-control" id="price" name="price">
      </div>

      <div class="mb-3">
        <label for="series" class="form-label fw-bold">Serie</label>
        <input type="text" class="form-control" id="series" name="series">
      </div>

      <div class="mb-3">
        <label for="sale_date" class="form-label fw-bold">Data uscita</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date">
      </div>

      <div class="mb-3">
        <label for="type" class="form-label fw-bold">Tipo</label>
        <input type="text" class="form-control" id="type" name="type">
      </div>

      <div class="mb-3">
        <label for="artists" class="form-label fw-bold">Artisti</label>
        <input type="text" class="form-control" id="artists" name="artists">
      </div>

      <div class="mb-3">
        <label for="writers" class="form-label fw-bold">Scrittori</label>
        <input type="text" class="form-control" id="writers" name="series">
      </div>



    <button type="submit" class="btn btn-primary fw-bold">Invia</button>
  </form>

    </div>
</div>

@endsection
