

@extends('layouts.app')
@section('title', 'comics')


@section('content')

    <div class="container-comics">

        <div class="box-button-container">

            <div class="container-box">

                @foreach($formati as $formato)

                    <div class="box">


                    <img class="image-comics" src="{{ $formato['thumb']}}" alt="{{$formato['series']}}">

                    <p>{{$formato['series']}}</p>


                    </div>
                @endforeach

            </div>
            

            <button class="btn btn-comics" href="">load more</button>

            <!-- @dump($formato) -->
        </div>

    </div>

@endsection

