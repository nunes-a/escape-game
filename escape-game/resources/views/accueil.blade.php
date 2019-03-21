@extends('layout')

@section('title', 'Escape Game')

@section('content')
	<div id="app">
		<header-component></header-component>
		<accueil-component nomequipe="2"></accueil-component>
		<footer-component></footer-component>
	</div>
@endsection
