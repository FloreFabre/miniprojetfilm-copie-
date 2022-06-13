@extends('layouts.app')
@section('main')
    <h2>{{$films->titre}}</h2>
    <h2>{{$films->réalisateur->nom}}{{$films->réalisateur->prenom}}</h2>
    <h2>{{$films->extrait}}</h2>
    <img src="{{asset('storage/' . $films->affiche)}}">
    <h2>{{$films->salle->numéro}}</h2>
@endsection