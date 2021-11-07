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
</main>
@endsection







    {{-- @foreach ($dischi as $disco)
        {{$disco['title']}}
@endforeach --}}