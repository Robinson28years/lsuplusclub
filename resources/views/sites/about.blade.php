@extends('app')
@section('content')

<?php
if ($first=='tom') {
	echo "<h1>cbbbb {{$first}} {{$last}}</h1>";
}
else {
	echo "<h1>else</h1>";

}
 ?>

	{{-- @if($first=='tom1')

		<h1>cbbbb {{$first}} {{$last}}</h1>
	@else
		<h1>else</h1>
	@endif --}}
@stop
