@extends('layouts.master')

@section('title')Marriage!@endsection

@section('content')
	<div class="row h-100 justify-content-center align-items-center">
		<a href="/images">
			<div id="home-carousel" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					@foreach($images as $image)
						<div class="carousel-item {{ $loop->first ? 'active' : '' }}">
							<img class="d-block w-100 jake-images" src="{{ $image->imgur_id ? "https://imgur.com/$image->imgur_id.jpg" : $image->imgur_link }}">
						</div>
					@endforeach
				</div>
			</div>
		</a>
	</div>
	<div class="row h-100 justify-content-center align-items-center">
		<div class="text-center">
			<h1>
				Jacob's Bachelor Party
			</h1>
			When: <span class="cursor-pointer" style="color:#78BC61" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="11/16 @ 11a - 11/19">Nov. 16-19</span><br>
			Where: <span class="cursor-pointer" style="color:#78BC61" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Willis Creek 2900 CR 348 Granger, TX 76530">Willis Creek</span><br>
			Who: <a href="rsvps" style="color:#78BC61">Find out</a><br>
			Details: <a href="details" style="color:#78BC61">Here</a>
		</div>
	</div>
	<div class="row h-100 justify-content-center align-items-center">
		<div class="row text-center">
			<h1 class="display-4">RSVP</h1>
		</div>
		{!! Form::open(array('action' => 'RsvpController@new', 'files' => true, 'class' => 'form col-md-10')) !!}
			<div class="row">
				<div class="form-group col-md-4">
					{!! Form::label('firstNameLabel', 'First Name') !!}
					{!! Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => 'Nikki')) !!}
				</div>
				<div class="form-group col-md-4">
					{!! Form::label('lastNameLabel', 'Last Name') !!}
					{!! Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => 'Minaj')) !!}
				</div>
				<div class="form-group col-md-4">
					{!! Form::label('emailLabel', 'E-Mail Address') !!}
					{!! Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'fuzzy-muffin@gmail.com')) !!}
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-8">
					{!! Form::label('commentsLabel', 'Comments') !!}
					{!! Form::textarea('comments', null, array('class' => 'form-control', 'placeholder' => 'Jake, this is your destiny...')) !!}
				</div>
				<div class="col-md-4">
					<div class="form-group">
						{!! Form::label('phoneNumberLabel', 'Phone Number') !!}
						{!! Form::text('phone_number', null, array('class' => 'form-control', 'placeholder' => '512-555-5555')) !!}
					</div>
					<div class="form-group">
						{!! Form::label('rsvpLabel', 'Can you make it?') !!}
						<br>
						{!! 
							Form::select('rsvp', ['Yes' => 'Yes', 'No' => 'No'], null, array('class' => 'form-control'))
						!!}
					</div>
				</div>
			</div>
			<div class="form-group">
				{!! Form::submit('RSVP!', array('class' => 'btn btn-sm btn-light')) !!}
			</div>
		{!! Form::close() !!}
	</div>
@endsection