@extends('layouts.app')

@section('content')

<div class="container">

    <div class="container">
        <h1>Edit: {{$comic->title}}</h1>
    </div>

    <div class="container mb-3">

        <form action="{{route('comics.update', $comic)}}" method="POST">

            @csrf

            @method('PUT')

            <div class="mb-3">
                <label for="title" class="col-form-label">Comic Title</label>       
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title', $comic->title)}}">
                @error('title')
                    <div class="invalid-feedback mt-2">{{$message}}</div>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="description" class="col-form-label">Comic description</label>
                <textarea class="form-control" id="description" name="description" cols="30" rows="10">{{old('desription', $comic->description)}}</textarea>
            </div>
    
            <div class="mb-3">
                <label for="thumb" class="col-form-label">Comic thumb (URL)</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{old('thumb', $comic->thumb)}}">
                @error('thumb')
                    <div class="invalid-feedback mt-2">{{$message}}</div>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="price" class="col-form-label">Comic price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price', $comic->price)}}">
                @error('price')
                    <div class="invalid-feedback mt-2">{{$message}}</div>
                @enderror
            </div>
    
            <div class="mb-3">    
                <label for="series" class="col-form-label">Comic series</label>
                <select class="form-select @error('series') is-invalid @enderror" name="series" id="series" aria-label="Default select example">
                    <option selected>Select a Comic series</option>
                    @foreach($series as $key => $value)
                        <option @selected(old('series') == $key) value="{{$key}}">{{ $value }}</option>
                    @endforeach
                </select>
                {{-- <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{old('series', $comic->series)}}"> --}}
                @error('series')
                    <div class="invalid-feedback mt-2">{{$message}}</div>
                @enderror
            </div>
    
            <div class="mb-3">    
                <label for="sale-date" class="col-form-label">Comic Sale Date</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale-date" name="sale_date" value="{{old('sale_date', $comic->sale_date)}}">
                @error('sale_date')
                    <div class="invalid-feedback mt-2">{{$message}}</div>
                @enderror
            </div>
    
            <div class="mb-3 mb-3">    
                <label for="comic-type" class="col-form-label">Comic type</label>
                <select class="form-select @error('type') is-invalid @enderror" name="type" id="type" aria-label="Default select example">
                    <option selected>Select a Comic type</option>
                    @foreach($types as $key => $value)
                        <option @selected(old('type') == $key) value="{{$key}}">{{ $value }}</option>
                    @endforeach
                </select>
                {{-- <input type="text" class="form-control @error('type') is-invalid @enderror" id="comic-type" name="type" value="{{old('type', $comic->type)}}"> --}}
                @error('type')
                    <div class="invalid-feedback mt-2">{{$message}}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Edit new comic</button>

        </form>

        {{-- @if ($errors->any())

            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        
        @endif --}}

    </div>

</div>

@endsection
