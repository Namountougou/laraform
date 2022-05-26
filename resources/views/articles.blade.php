@extends('layouts.app')

@section('content')

<h1>Listes des articles</h1>
@foreach($art as $article)
<div class="card">
   
        {{$article}}
    </div>

@endforeach

@endsection