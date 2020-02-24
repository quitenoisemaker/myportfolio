@extends('layouts.admin')



@section('content')

@if (Auth::check())

<h2 class="text-center">You are welcome to my Portfolio Admin section</h2>

@else

<h2 class="text-center">Please login</h2>

@endif

@stop