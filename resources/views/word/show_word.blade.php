@extends('layouts/main')
@section('content')
    <div class="container">
        <div class="row">
                <div class="col-3"></div>
                <div class="col-6 mt-3">
                    <table class="table">
                        <tr>
                            <td class="w-25">Word</td>
                            <td colspan="2">{{$word->word}}</td>
                        </tr>
                        <tr>
                            <td>Context</td>
                            <td colspan="2">{{$word->context}}</td>
                        </tr>
                        <tr>
                            <td>Translate</td>
                            <td colspan="2">{{$word->translate}}</td>
                        </tr>
                        <tr>
                            <th class="text-start">
                                <a style="height: 35px; width: 80px" href="{{route('word.index')}}" class="btn btn-primary">Back</a>
                            </th>
                            @can('view', auth()->user())
                            <td>
                                    <form action="{{route('word.destroy', $word)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
                            </td>
                            @endcan
                            <td class="text-end">
                                <a style="height: 35px; width: 80px" class="btn btn-primary" href="{{route('word.edit', $word)}}">Edit</a>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-3"></div>
        </div>
    </div>
@endsection

