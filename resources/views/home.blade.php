@extends('layout.base')
    
@section('title', 'Home')

{{-- Parte centrale --}}
@section('main')
<main>
    <div class="section_black">
        <div class="container">
            <h2 class="etichetta">
                CURRENT SERIES
            </h2>
            <div class="container-dischi">
                @foreach ($dischi as $disco)
                    <div class="column">
                        <a href="#">
                            <div class="eroe">
                                <img src="{{$disco['thumb']}}" alt="">
                                <h3>{{strtoupper($disco['title'])}}</h3>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="container-bottone">
                <a href="#" class="btn-blue">LOAD MORE</a>
            </div>
        </div>
    </div>
    <div class="section_blue">
        <div class="container">
             <div class="options">
                    @foreach ($options as $option)
                        <div class="column">
                            <div class="option">
                                <img src="{{asset("../images/{$option['path']}")}}" alt="">
                                <h3>{{$option['name']}}</h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>
@endsection







    {{-- @foreach ($dischi as $disco)
        {{$disco['title']}}
@endforeach --}}