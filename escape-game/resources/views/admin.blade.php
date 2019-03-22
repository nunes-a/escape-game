@extends('layout')

@section('title', 'Escape Game')

@section('content')
	<div id="app">
		@php
			$nommaster = "3";
			//$colequipe = "rouge";
		@endphp
		<header-component></header-component>
		<admin-component></admin-component>
		<footer-component></footer-component>
	</div>
@endsection
