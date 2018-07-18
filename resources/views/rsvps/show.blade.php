@extends('layouts.master')

@section('title')Thanks! :)@endsection

@section('content')
    <div class="row h-100 justify-content-center align-items-center text-center">
        <h1>Thank You :)</h1>
        <div class="card mx-auto mt-5 fixed-top" style="max-width: 18rem; background-color: #78BC61;">
            <div class="card-header">Success!<span class="float-right clickable cursor-pointer" id="card" data-effect="fadeOut"><i class="fa fa-times"></i></span></div>
            <div class="card-body">
                <h5 class="card-title">Your RSVP has been saved!</h5>
                <p class="card-text" style="font-size:1.5vh;">This is going to be so fun! <br> 
                I will let you know if any of the details change.
                P.S. Come back to this page if you need to make any changes. Have a great day!</p>
            </div>
        </div>
    </div>
    <div class="row h-100 justify-content-center align-items-center">
		{!! Form::open(array('class' => 'form rsvp-form col-md-10')) !!}
			<div class="row">
				<div class="form-group col-md-4">
					{!! Form::label('firstNameLabel', 'First Name') !!}
					{!! Form::text('first_name', $rsvp->first_name, array('class' => 'form-control', 'placeholder' => 'R.')) !!}
				</div>
				<div class="form-group col-md-4">
					{!! Form::label('lastNameLabel', 'Last Name') !!}
					{!! Form::text('last_name', $rsvp->last_name, array('class' => 'form-control', 'placeholder' => 'Kelly')) !!}
				</div>
				<div class="form-group col-md-4">
					{!! Form::label('emailLabel', 'E-Mail Address') !!}
					{!! Form::text('email', $rsvp->email, array('class' => 'form-control', 'placeholder' => 'fuzzy-muffin@gmail.com')) !!}
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-8">
					{!! Form::label('commentsLabel', 'Comments') !!}
					{!! Form::textarea('comments', $rsvp->comments, array('class' => 'form-control', 'placeholder' => 'Jake, this is your destiny...')) !!}
				</div>
				<div class="col-md-4">
					<div class="form-group">
						{!! Form::label('phoneNumberLabel', 'Phone Number') !!}
						{!! Form::text('phone_number', $rsvp->phone_number, array('class' => 'form-control', 'placeholder' => '512-555-5555')) !!}
					</div>
					<div class="form-group">
						{!! Form::label('rsvpLabel', 'Can you make it?') !!}
						<br>
						{!! 
							Form::select('rsvp', ['Yes' => 'Yes', 'No' => 'No'], $rsvp->rsvp, array('class' => 'form-control')) 
						!!}
					</div>
				</div>
			</div>
			<div class="form-group">
				{!! Form::submit('Update', array('class' => 'btn')) !!}
			</div>
		{!! Form::close() !!}
	</div>
@endsection