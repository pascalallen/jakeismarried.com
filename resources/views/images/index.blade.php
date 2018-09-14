@extends('layouts.master')

@section('title') Images @endsection

@section('content')
    <div class="row text-center">
        <div class="col">
            <h1>Photos!</h1>
        </div>
    </div>
    <div class="row text-center">
        <div class="col">
            
        </div>
    </div>
	<div class="row justify-content-center align-items-center">
        @foreach($images as $image)
            <div class="col-md-4 mb-3">
                <img src="https://imgur.com/{{ $image->imgur_id }}.jpg" class="img-fluid">
            </div>
        @endforeach
	</div>
@endsection