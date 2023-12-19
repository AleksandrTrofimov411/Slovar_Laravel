@extends('layouts/main')
@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-4"></div>
        <div class="col-4">
            <form action="{{ route('word.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="word" class="form-label text-black">Word</label>
                    <input value="{{old('word')}}" type="text" class="form-control" name="word" id="word" placeholder="Word">
                    @error('word')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="context" class="form-label text-black">Context</label>
                    <textarea name="context" type="text" class="form-control" id="context" placeholder="Context">{{old('context')}}</textarea>
                    @error('context')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="translate" class="form-label text-black">Translate</label>
                    <input value="{{old('translate')}}" name="translate" type="text" class="form-control" id="translate" placeholder="Translate">
                    @error('translate')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="w-100 btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

