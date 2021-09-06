

@extends('layouts.app')
@section('title', 'comics')


@section('content')

    <hr>

    <h1>comics</h1>

    <div class="box-container">

        @foreach($formati as $formato)

            <div class="box">

                <div class="image">

                    <img src="{{ $formato['thumb']}}" alt="{{$formato['series']}}">

                </div>

                <div class="title">

                    <p>{{$formato['series']}}</p>
                    
                </div>

            </div>

            <!-- @dump($formato) -->

        @endforeach

    </div>

    <div class="btn">

        <a href="">load more</a>
    
    </div>

    <hr>

@endsection

