@extends('layouts.master')

@section('title') RSVPs @endsection

@section('content')
    <div class="row h-100 justify-content-center align-items-center text-center">
        <div class="col">
            <h1>RSVPs</h1>
            @foreach($rsvps as $rsvp)
                <p style="color: @if($rsvp->rsvp == 'Yes') #78BC61 @else #f64d52 @endif">
                    {{ $rsvp->first_name." ".$rsvp->last_name }}
                </p>
            @endforeach
        </div>
    </div>
@endsection