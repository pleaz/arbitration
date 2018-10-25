@extends('layouts.app')

@section('content')
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header">
                Календарь мероприятий (общее)
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('calendar-open')}}">показать только невыполненые мероприятия</a>
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