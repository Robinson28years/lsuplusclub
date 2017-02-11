@extends('layouts.basic')
@section('content')
	@include('nav.pu-nav')
	{{-- <router-link to="/">Home</router-link>
	<router-link to="/2">About</router-link> --}}
	<router-view></router-view>
@endsection
