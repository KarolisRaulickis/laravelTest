{{-- Cia index view
<br>
title = {{$title}} --}}

@extends('layouts.app')

@section('content')
    <div>atejo<br>  {{ __('Test input') }}</div>

    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif

@endsection