@extends('layouts.app')

@section('content')
            
    @if(count($Data) > 0)


        @foreach($Data as $d)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <small>Written on {{$d->id}} and  {{$d->Message}}</small> 
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <small>Written on {{$d->id}} and  {{$d->Name}}</small> 
                    </div>
                </div>
            </div>
        @endforeach


    @else
        <p>No data</p>
    @endif 
@endsection