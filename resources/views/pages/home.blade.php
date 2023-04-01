@extends('main')

@section('title')


@section('content')
<div class="img">
    <img src="images/drapeau.jpeg" alt="Togo Flag">
</div>
<h1>Hello from Togo! </h1>

<p>It's currently {{date('h:i A')}}</p>
@endsection
