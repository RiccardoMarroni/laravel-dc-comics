@extends('layouts.app')

@section('content')
<main>
        <div class="container text-danger">
            <h1>
                Add new comic
            </h1>
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        aria-describedby="titleHelp" name="title" value="{{ old('title') }}" required maxlength="250" minlength="5">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label @error('thumb') is-invalid @enderror">Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb')}}">
                    @error('thumb')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label @error('price') is-invalid @enderror">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price')}}" required>
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label @error('series') is-invalid @enderror">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ old('series')}}" required maxlength="250" minlength="5">
                    @error('series')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label @error('sale_date') is-invalid @enderror">Data di vendita</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date')}}" required>
                    @error('sale_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <select class="form-control" id="type" name="type" required>
                        <option value="comic-book">comic book</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Crea</button>
            </form>
        </div>
    </main>
@endsection