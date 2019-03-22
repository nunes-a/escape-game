@extends('layout')

@section('title', 'Escape Game')

@section('content')
	<div id="app">
		@php
			$nivequipe = "3";
			$courequipe = $nivequipe + 1;
			//$colequipe = "vert";
		@endphp
		<header-component></header-component>
		<accueil-component
			:nomequipe="{{ $nomequipe }}"
			:nivequipe="{{ $nivequipe }}"
			:courequipe="{{ $courequipe }}">
		</accueil-component>
		<footer-component></footer-component>
	</div>
@endsection
