@extends('template.index')

@section('content')
 <h2 class="text-4xl text-center"> Bienvenue en {{ $state->name }}, l'état n°{{ $state->number }}</h2>
 <h3  class="text-2xl p-4 text-center">  Capitale de cet état : {{ $state->capital }}</h3>
 <p class="px-20 mx-20 leading-8"> {{ $state->description }}</p> 

@endsection