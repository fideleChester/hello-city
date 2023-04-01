@extends('main')

@section('title')


@section('content')
<div class="img">
    <img src="{{asset("images/drapeau.jpeg")}}" alt="Togo Flag">
</div>
<div class="hello">
<h1 id="hi">Hello from Togo! </h1>

<p class="time">It's currently <span id="time">{{date('h:i A')}}</span></p>
</div>

@endsection
