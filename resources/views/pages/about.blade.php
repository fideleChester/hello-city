@extends('main')

@section('title','About Us | '.config('app.name'))

@section('content')
<div class="img">
    <img src="images/print.png" alt="Hello World">
</div>

<p>Built with &hearts; by ELFID K@K@U.</p>

<p><a href="{{route('home')}}">Revenir à  la page d'Accueil</a></p>

@endsection

