@extends('layout.public')
@section('title', 'Homepage')

@section('homeContent')
    <header>
        @include('partials.header')
    </header>

    <main>
        <div class="container">

                @include('partials.table')
            
        </div>
    </main>
@endsection