@extends('layouts.app')

@section('content')
    <div class="container col-md-9">
        <div class="card">
            <div class="card-header">
                Мероприятия по делу: {{@$user->surname}} {{@$user->name}} {{@$user->patron}}
            </div>
            <div class="card-body col-lg-auto align-self-center">

                <button onclick="send(event, '{{route('event-add')}}', '{{@$user->id}}')" type="button" class=" mb-2 btn btn-primary">Добавить мероприятие</button>

                <table class="table table-hover table-responsive">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Статус</th>
                        <th>Тип мероприятия</th>
                        <th>Организация</th>
                        <th>Комментарий</th>
                        <th>Дата</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($events as $event)
                        <tr>
                            <th scope="row">{{@$event->id}}</th>
                            <td>@if($event->open == 1) Выполнено @else Не выполнено @endif</td>
                            <td>{{@$event->event_type->name}}</td>
                            <td>{{@$event->organization->name}}</td>
                            <td>{{@$event->comment}}</td>
                            <td>{{@$event->date}}</td>
                            <td>
                                <button onclick="send(event, '{{route('event-edit')}}', '{{@$event->id}}');" type="button" class="btn btn-warning">редактировать</button>
                            </td>
                            <td>
                                <button onclick="send(event, '{{route('event-delete')}}', '{{@$event->id}}');" type="button" class="btn btn-danger">удалить</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"></div>

            </div>
        </div>
    </div>
@endsection