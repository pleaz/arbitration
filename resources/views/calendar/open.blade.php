@extends('layouts.app')

@section('content')
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header">
                Календарь мероприятий (невыполненые)
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('calendar')}}">показать все мероприятия</a>
                    </li>
                </ul>
            </div>
            <div class="card-body col-md-12 align-self-center">
                {!! $calendar->calendar() !!}
                {!! $calendar->script() !!}
            </div>
        </div>
    </div>
@endsection