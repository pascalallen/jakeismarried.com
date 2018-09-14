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
            {!! Form::open(['url' => 'images/upload', 'method' => 'post', 'files' => true]) !!}
                {!! Form::file('image', $attributes = []) !!}
                {!! Form::submit('Upload') !!}
            {!! Form::close() !!}
        </div>
    </div>
	<div class="row justify-content-center align-items-center">
        @foreach($images as $image)
            <div class="col-md-4 mb-3">
                @if($image->imgur_id)
                    <img src="https://imgur.com/{{ $image->imgur_id }}.jpg" class="img-fluid">
                @endif
                @if($image->imgur_link)
                    <img src="{{ $image->imgur_link }}" class="img-fluid">
                @endif
            </div>
        @endforeach
	</div>
@endsection