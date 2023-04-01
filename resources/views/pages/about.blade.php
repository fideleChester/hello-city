@extends('main')

@section('title','About Us | '.config('app.name'))

@section('content')
<div class="img">
    <img src="{{asset("images/print.png")}}" alt="Hello World">
</div>
<div class="hello">
    <p>Built with <span id='heart'>&hearts;</span> by ELFID K@K@U.</p>

    <p><a href="{{route('home')}}">Revenir à  la page d'Accueil</a></p>
</div>


@endsection

