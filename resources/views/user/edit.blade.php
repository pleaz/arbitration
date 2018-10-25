@extends('layouts.app')

@section('content')
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header">
                Редактирование дела
            </div>
            <div class="card-body col-md-12 align-self-center">

                {{Form::open(['url'=>route('user-update', ['id' => @$user['id']])])}}

                {{Form::hidden('id', @$user['id'])}}

                @if(isset($result))
                    <div class="alert alert-success" role="alert">
                        {{ $result }}
                    </div>
                @endif

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('surname', 'Фамилия', ['class'=>'input-group-addon'])}}
                            {{Form::text('surname', @$user['surname'], ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('name', 'Имя', ['class'=>'input-group-addon'])}}
                            {{Form::text('name', @$user['name'], ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('patron', 'Отчество', ['class'=>'input-group-addon'])}}
                            {{Form::text('patron', @$user['patron'], ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('snils', 'СНИЛС', ['class'=>'input-group-addon'])}}
                            {{Form::text('snils', @$user['snils'], ['class'=>'form-control', 'data-mask'=>'999-999-999-99'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('inn', 'ИНН', ['class'=>'input-group-addon'])}}
                            {{Form::text('inn', @$user['inn'], ['class'=>'form-control', 'data-mask'=>'999999999999'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('p_serial', 'Пасп серии', ['class'=>'input-group-addon'])}}
                            {{Form::text('p_serial', @$user['p_serial'], ['class'=>'form-control', 'data-mask'=>'99 99'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('p_number', 'Пасп номер', ['class'=>'input-group-addon'])}}
                            {{Form::text('p_number', @$user['p_number'], ['class'=>'form-control', 'data-mask'=>'999999'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('p_issuer', 'Пасп выдан', ['class'=>'input-group-addon'])}}
                            {{Form::text('p_issuer', @$user['p_issuer'], ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('p_date', 'Дата выд', ['class'=>'input-group-addon',])}}
                            {{Form::text('p_date', @$user['p_date'], ['class'=>'form-control datepicker'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('n_proxy', '№ доверенности', ['class'=>'input-group-addon',])}}
                            {{Form::text('n_proxy', @$user['n_proxy'], ['class'=>'form-control'])}}
                        </div>
                        <!--<div class="form-group input-group input-group-lg">
                            {{Form::label('manager', 'Ответственный', ['class'=>'input-group-addon'])}}
                            {{Form::text('manager', @$user['manager'], ['class'=>'form-control'])}}
                        </div>-->
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('date_birth', 'Дата рожд', ['class'=>'input-group-addon'])}}
                            {{Form::text('date_birth', @$user['date_birth'], ['class'=>'form-control datepicker'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('place_birth', 'Место рожд', ['class'=>'input-group-addon'])}}
                            {{Form::text('place_birth', @$user['place_birth'], ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('index', 'Индекс', ['class'=>'input-group-addon'])}}
                            {{Form::text('index', @$user['index'], ['class'=>'form-control', 'data-mask'=>'999999'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('region', 'Регион', ['class'=>'input-group-addon'])}}
                            {{Form::text('region', @$user['region'], ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('area', 'Район', ['class'=>'input-group-addon'])}}
                            {{Form::text('area', @$user['area'], ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('city', 'Город', ['class'=>'input-group-addon'])}}
                            {{Form::text('city', @$user['city'], ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('community', 'Нас. п.', ['class'=>'input-group-addon'])}}
                            {{Form::text('community', @$user['community'], ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('street', 'улица', ['class'=>'input-group-addon'])}}
                            {{Form::text('street', @$user['street'], ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('house', 'дом', ['class'=>'input-group-addon'])}}
                            {{Form::text('house', @$user['house'], ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('build', 'Корпус', ['class'=>'input-group-addon'])}}
                            {{Form::text('build', @$user['build'], ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('home', 'Квартира', ['class'=>'input-group-addon'])}}
                            {{Form::text('home', @$user['home'], ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('channel', 'Канал продаж', ['class'=>'input-group-addon'])}}
                            {{Form::text('channel', @$user['channel'], ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('contract', 'Договор от', ['class'=>'input-group-addon'])}}
                            {{Form::text('contract', @$user['contract'], ['class'=>'form-control datepicker'])}}
                        </div>
                    </div>
                </div>

                {{Form::submit('Сохранить', ['class'=>'btn btn-primary'])}}

                <a class="btn btn-primary" href="{{route('events', ['id' => @$user['id']])}}" role="button">Мероприятия</a>
                <a class="btn btn-primary" href="{{route('estate', ['id' => @$user['id']])}}" role="button">Имущество</a>
                <a class="btn btn-primary" href="{{route('loans', ['id' => @$user['id']])}}" role="button">Долги</a>

                {{Form::close()}}
            </div>
        </div>
    </div>
@endsection