@extends('layouts.app')

@section('content')
 {{--                                               Negrazu bet w/e --}}
@php
    $mainNum = 6;
    $vikingNum = 2; 

    $mainNumArray = array();
    $vikingNumArray = array();

    for($i = 1; $i <= $mainNum; $i++){
        while(true){
            $number = rand(1,48);
            if (!in_array($number, $mainNumArray)) {
                $mainNumArray[] =  $number;
            break;
            }
         } 
    }

    for($i = 1; $i <= $vikingNum; $i++){
        while(true){
            $number = rand(1,8);
            if (!in_array($number, $vikingNumArray)) {
                $vikingNumArray[] =  $number;
            break;
            }
         } 
    }

    sort($mainNumArray);
    sort($vikingNumArray);
@endphp
 

@for ($i = 1; $i <= $mainNum; $i++)
Rand main: {{ $i }} - {{ $mainNumArray[$i - 1] }}  <br>
@endfor
<br>
@for ($i = 1; $i <= $vikingNum; $i++)
Rand Viking: {{ $i }} - {{ $vikingNumArray[$i - 1] }} <br> 
@endfor

<br>  <br> 


@php
    $mainNum = 6;
    $vikingNum = 2; 

    $mainNumArray = array();
    $vikingNumArray = array();

    for($i = 1; $i <= $mainNum; $i++){
        while(true){
            $number = mt_rand(1,48);
            if (!in_array($number, $mainNumArray)) {
                $mainNumArray[] =  $number;
            break;
            }
         } 
    }

    for($i = 1; $i <= $vikingNum; $i++){
        while(true){
            $number = mt_rand(1,8);
            if (!in_array($number, $vikingNumArray)) {
                $vikingNumArray[] =  $number;
            break;
            }
         } 
    }

    sort($mainNumArray);
    sort($vikingNumArray);
@endphp
 

@for ($i = 1; $i <= $mainNum; $i++)
MT_Rand main: {{ $i }} - {{ $mainNumArray[$i - 1] }}  <br>
@endfor
<br>
@for ($i = 1; $i <= $vikingNum; $i++)
MT_Rand Viking: {{ $i }} - {{ $vikingNumArray[$i - 1] }} <br> 
@endfor

<br><br><br><br>

<div class="container">
    <h1>container</h1>
    <p>container.</p>
</div> 

<div class="container-fluid">
    <h1>container-fluid</h1>
    <p>container-fluid</p>
</div> 
 
<div class="container p-3 my-3 border">Pad + color</div> 
<div class="container p-3 my-3 bg-dark text-white">Pad + color</div> 
<div class="container p-3 my-3 bg-primary text-white">Pad + color</div> 

<div class="container-sm">.container-sm</div>
<div class="container-md">.container-md</div>
<div class="container-lg">.container-lg</div>
<div class="container-xl">.container-xl</div> 

<div class="container">
    <h2>Button Elements</h2>
    <a href="#" class="btn btn-info" role="button">Link Button</a>
    <button type="button" class="btn btn-info">Button</button>
    <input type="button" class="btn btn-info" value="Input Button">
    <input type="submit" class="btn btn-info" value="Submit Button">
  </div>

  <div class="container">
    <h2>Button States</h2>
    <button type="button" class="btn btn-primary">Primary Button</button>
    <button type="button" class="btn btn-primary active">Active Primary</button>
    <button type="button" class="btn btn-primary" disabled>Disabled Primary</button>
    <a href="#" class="btn btn-primary disabled">Disabled Link</a>
  </div>

  <div class="btn-group btn-group-lg">
    <button type="button" class="btn btn-primary">Apple</button>
    <button type="button" class="btn btn-primary">Samsung</button>
    <button type="button" class="btn btn-primary">Sony</button>
  </div> 

  <div class="btn-group-vertical">
    <button type="button" class="btn btn-primary">Apple</button>
    <button type="button" class="btn btn-primary">Samsung</button>
    <button type="button" class="btn btn-primary">Sony</button>
  </div> 

  <h1>Example heading <span class="badge badge-secondary">New</span></h1>

  <button type="button" class="btn btn-primary">
    Messages <span class="badge badge-light">4</span>
  </button>

  <div class="progress">                                              {{--   play here                     --}}
    <div class="progress-bar" style="width:70%">70%</div>
  </div> 




@endsection