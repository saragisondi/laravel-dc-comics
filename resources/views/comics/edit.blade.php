@extends('layout.main')

@section('content')

<div>
  <h1 class="my-5 text-center fw-bold text-primary-emphasis">Modifica Fumetto</h1>

  @if($errors->any())
  <div class="alert alert-danger" role="alert">

    <ul>
      @foreach ( $errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>

  </div>
  @endif

  <form action="{{route('comic.update', $comic)}}" method="POST">

    <div class="container">
      {{-- token di validità form --}}
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label fw-bold">Titolo</label>
        <input
        value="{{old('title')}}"
        type="text"
        class="form-control
        @error('title') is-invalid @enderror"
        id="title"
        name="title"
        placeholder="Titolo">

        @error('title')
        <p class="text-danger">{{$message}}</p>
        @enderror

      </div>

      <div class="mb-3">
        <label for="description" class="form-label fw-bold">Descrizione</label>
        <input
        value="{{old('description')}}"
        type="text"
        class="form-control @error('description') is-invalid @enderror"
        id="description"
        name="description"
        placeholder="Descrizione">

        @error('description')
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-3">
        <label for="thumb" class="form-label fw-bold">Immagine</label>
        <input
        value="{{old('thumb')}}"
        type="text"
        class="form-control @error('thumb') is-invalid @enderror"
        id="thumb"
        name="thumb"
        placeholder="Immagine">

        @error('thumb')
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>


      <div class="mb-3">
        <label for="price" class="form-label fw-bold">Prezzo</label>
        <input
        value="{{old('price')}}"
        type="text"
        class="form-control @error('price') is-invalid @enderror"
        id="price"
        name="price"
        placeholder="Prezzo">

        @error('price')
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-3">
        <label for="series" class="form-label fw-bold">Serie</label>
        <input
        value="{{old('series')}}"
        type="text"
        class="form-control @error('series') is-invalid @enderror"
        id="series"
        name="series"
        placeholder="Serie">

        @error('series')
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-3">
        <label for="sale_date" class="form-label fw-bold">Data uscita</label>
        <input
        value="{{old('sale_date')}}"
        type="text"
        class="form-control @error('sale_date') is-invalid @enderror"
        id="sale_date"
        name="sale_date"
        placeholder="Data">

        @error('sale_date')
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-3">
        <label for="type" class="form-label fw-bold">Tipo</label>
        <input
        value="{{old('type')}}"
        type="text"
        class="form-control @error('type') is-invalid @enderror"
        id="type"
        name="type"
        placeholder="Tipo">

        @error('type')
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-3">
        <label for="artists" class="form-label fw-bold">Artisti</label>
        <input
        value="{{old('artists')}}"
        type="text"
        class="form-control @error('artists') is-invalid @enderror"
        id="artists"
        name="artists"
        placeholder="Artisti">

        @error('artists')
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-3">
      <label for="writers" class="form-label fw-bold">scrittori</label>
        <input
        value="{{old('writers')}}"
        type="text"
        class="form-control @error('writers') is-invalid @enderror"
        id="writers"
        name="writers"
        placeholder="Scrittori">

        @error('writers')
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>



    <button type="submit" class="btn btn-primary fw-bold">Invia</button>
  </form>

    </div>
</div>

@endsection
