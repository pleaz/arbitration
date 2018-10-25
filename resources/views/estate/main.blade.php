@extends('layouts.app')

@section('content')
    <div class="container col-lg-12">
        <div class="card">
            <div class="card-header">
                Имущество по делу: {{@$user->surname}} {{@$user->name}} {{@$user->patron}}
            </div>
            <div class="card-body col-lg-auto align-self-center">

                <button onclick="send(event, '{{route('estate-add')}}', '{{@$user->id}}')" type="button" class="mb-2 btn btn-primary">Добавить имущество</button>

                <table class="table table-hover table-responsive">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Наименование</th>
                        <th>Год выпуска</th>
                        <th>Тип имущества</th>
                        <th>Количество</th>
                        <th>Оценка</th>
                        <th>Цена продажи</th>
                        <th>Дата продажи</th>
                        <th>Договор №</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($estates as $estate)
                    <tr>
                        <th scope="row">{{@$estate->id}}</th>
                        <td>{{@$estate->name}}</td>
                        <td>{{@$estate->since}}</td>
                        <td>{{@$estate->estate_type->name}}</td>
                        <td>{{@$estate->quantity}}</td>
                        <td>{{@$estate->price}}</td>
                        <td>{{@$estate->sell_price}}</td>
                        <td>{{@$estate->date}}</td>
                        <td>{{@$estate->offer}}</td>
                        <td>
                            <button onclick="send(event, '{{route('estate-edit')}}', '{{@$estate->id}}');" type="button" class="btn btn-warning">редактировать</button>
                        </td>
                        <td>
                            <button onclick="send(event, '{{route('estate-delete')}}', '{{@$estate->id}}');" type="button" class="btn btn-danger">удалить</button>
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