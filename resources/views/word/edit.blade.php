@extends('layouts/main')
@section('content')
    +
<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
        <form action="{{ route('word.update', $word) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="word" class="form-label">Word</label>
                <input type="text" class="form-control" name="word" id="word" placeholder="Word" value="{{ $word->word }}">
                @error('word')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="context" class="form-label">Context</label>
                <textarea name="context" type="text" class="form-control" id="context" placeholder="Context">{{ $word->context }}</textarea>
                @error('context')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="translate" class="form-label">Translate</label>
                <input name="translate" type="text" class="form-control" id="translate" placeholder="Translate" value="{{ $word->translate }}">
                @error('translate')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        </div>
    </div>
</div>
@endsection

