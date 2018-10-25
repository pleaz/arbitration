@extends('layouts.app')

@section('content')
    <div class="container col-md-9">
        <div class="card">
            <div class="card-header">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a onclick="return false;" class="nav-link" href="#">подготовить документы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('user', ['id' => @$user->id])}}">показать должника</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('events', ['id' => @$user['id']])}}">история дела</a>
                            </li>
                            <li class="nav-item">
                                <a onclick="send(event, '{{route('event-edit-date')}}', '{{@$event->id}}');" class="nav-link" href="#">отложить</a>
                            </li>
                            <li class="nav-item">
                                <a onclick="send(event, '{{route('event-approve')}}', '{{@$event->id}}');" class="nav-link" href="#">готово</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="card-body col-lg-auto align-self-center">

                <table class="table table-hover table-responsive">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Статус</th>
                        <th>Тип мероприятия</th>
                        <th>Организация</th>
                        <th>Комментарий</th>
                        <th>Дата</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{@$event->id}}</th>
                            <td>@if($event->open == 1) Выполнено @else Не выполнено @endif</td>
                            <td>{{@$event->event_type->name}}</td>
                            <td>{{@$event->organization->name}}</td>
                            <td>{{@$event->comment}}</td>
                            <td>{{@$event->date}}</td>
                        </tr>
                    </tbody>
                </table>

                <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"></div>

            </div>
        </div>
    </div>
@endsection