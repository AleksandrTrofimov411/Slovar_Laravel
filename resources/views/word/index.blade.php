@extends('layouts/main')
@section('content')
    <div class="container">
        <div class="row mt-2">
            <div class="col-2 bg-light align-items-center">
                <table class="table">
                    <thead>
                    <tr><th colspan="3" class="text-center">Search by letters</th></tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 'a')}}"><button type="button" class="btn btn-outline-secondary">Aa</button></a></td>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 'b')}}"><button type="button" class="btn btn-outline-secondary">Bb</button></a></td>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 'c')}}"><button type="button" class="btn btn-outline-secondary">Cc</button></a></td>
                    </tr>
                    <tr>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 'd')}}"><button type="button" class="btn btn-outline-secondary">Dd</button></a></td>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 'e')}}"><button type="button" class="btn btn-outline-secondary">Ee</button></a></td>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 'f')}}"><button type="button" class="btn btn-outline-secondary">Ff</button></a></td>
                    </tr>
                    <tr>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 'g')}}"><button type="button" class="btn btn-outline-secondary">Gg</button></a></td>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 'h')}}"><button type="button" class="btn btn-outline-secondary">Hh</button></a></td>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 'i')}}"><button type="button" class="btn btn-outline-secondary">Ii</button></a></td>
                    </tr>
                    <tr>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 'j')}}"><button type="button" class="btn btn-outline-secondary">Jj</button></a></td>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 'k')}}"><button type="button" class="btn btn-outline-secondary">Kk</button></a></td>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 'l')}}"><button type="button" class="btn btn-outline-secondary">Ll</button></a></td>
                    </tr>
                    <tr>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 'm')}}"><button type="button" class="btn btn-outline-secondary">Mm</button></a></td>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 'n')}}"><button type="button" class="btn btn-outline-secondary">Nn</button></a></td>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 'o')}}"><button type="button" class="btn btn-outline-secondary">Oo</button></a></td>
                    </tr>
                    <tr>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 'p')}}"><button type="button" class="btn btn-outline-secondary">Pp</button></a></td>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 'q')}}"><button type="button" class="btn btn-outline-secondary">Qq</button></a></td>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 'r')}}"><button type="button" class="btn btn-outline-secondary">Rr</button></a></td>
                    </tr>
                    <tr>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 's')}}"><button type="button" class="btn btn-outline-secondary">Ss</button></a></td>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 't')}}"><button type="button" class="btn btn-outline-secondary">Tt</button></a></td>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 'u')}}"><button type="button" class="btn btn-outline-secondary">Uu</button></a></td>
                    </tr>
                    <tr>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 'v')}}"><button type="button" class="btn btn-outline-secondary">Vv</button></a></td>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 'w')}}"><button type="button" class="btn btn-outline-secondary">Ww</button></a></td>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 'x')}}"><button type="button" class="btn btn-outline-secondary">Xx</button></a></td>
                    </tr>
                    <tr>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 'y')}}"><button type="button" class="btn btn-outline-secondary">Yy</button></a></td>
                        <td><a class="text-end link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show_filtered_by_letter', 'z')}}"><button type="button" class="btn btn-outline-secondary">Zz</button></a></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <div class="col-8 bg-light">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Letter</th>
                        <th class="text-center" scope="col">Word</th>
                        <th scope="col">Context</th>
                        <th scope="col">Translate</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($words as $word)
                        <tr>
                            <th class="text-center" scope="row">{{$word->word[0]}}</th>
                            <td class="text-center"><a class="link-offset-2 link-underline link-underline-opacity-0" href="{{route('word.show', $word)}}"><h5>{{$word->word}}</h5></a></td>
                            <td>{{$word->context}}</td>
                            <td>{{$word->translate}}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="4">
                            <div class="d-flex justify-content-center">
                                {{$words->withQueryString()->links()}}
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-2 bg-light">
                <form class="text-center" href="{{route('word.index')}}" method="get">
                    <label class="form-label text-black mt-2">Search</label>
                    <input style="height: 25px" type="text" class="form-control" id="word" name="word">
                    <button style="width: 70px; height: 35px" class="btn btn-primary mt-3" type="submit"><img class="search-img" src="{{asset('icons/search.svg')}}" alt="img"></button>
                </form>
            </div>
        </div>
    </div>

@endsection

