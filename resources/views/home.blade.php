@extends('layouts.app')

@section('content')
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header">
                Основное меню
            </div>
            <div class="card-body col-md-12 align-self-center">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="list-group col-sm-3">
                    <a class="list-group-item list-group-item-action list-group-item-info" href="{{route('user-form')}}">Создание клиента</a>
                    <a class="list-group-item list-group-item-action list-group-item-info" href="{{route('user-list')}}">Просмотр клиентов</a>
                    <a class="list-group-item list-group-item-action list-group-item-info" href="{{route('calendar')}}">Календарь мероприятий</a>
                </div>

            </div>
        </div>
    </div>
@endsection
