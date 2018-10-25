@extends('layouts.app')

@section('content')
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header">
                Информация по делу
            </div>
            <div class="card-body col-md-12 align-self-center">

                {{Form::open(['url'=>route('user-add')])}}

                @if(isset($result))
                    <div class="alert alert-success" role="alert">
                        {{ $result }}
                    </div>
                @endif

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('surname', 'Фамилия', ['class'=>'input-group-addon'])}}
                            {{Form::text('surname', null, ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('name', 'Имя', ['class'=>'input-group-addon'])}}
                            {{Form::text('name', null, ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('patron', 'Отчество', ['class'=>'input-group-addon'])}}
                            {{Form::text('patron', null, ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('snils', 'СНИЛС', ['class'=>'input-group-addon'])}}
                            {{Form::text('snils', null, ['class'=>'form-control', 'data-mask'=>'999-999-999-99'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('inn', 'ИНН', ['class'=>'input-group-addon'])}}
                            {{Form::text('inn', null, ['class'=>'form-control', 'data-mask'=>'999999999999'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('p_serial', 'Пасп серии', ['class'=>'input-group-addon'])}}
                            {{Form::text('p_serial', null, ['class'=>'form-control', 'data-mask'=>'99 99'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('p_number', 'Пасп номер', ['class'=>'input-group-addon'])}}
                            {{Form::text('p_number', null, ['class'=>'form-control', 'data-mask'=>'999999'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('p_issuer', 'Пасп выдан', ['class'=>'input-group-addon'])}}
                            {{Form::text('p_issuer', null, ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('p_date', 'Дата выд', ['class'=>'input-group-addon'])}}
                            {{Form::text('p_date', null, ['class'=>'form-control datepicker'])}}
                        </div>
                        <!--<div class="form-group input-group input-group-lg">
                            {{Form::label('manager', 'Ответственный', ['class'=>'input-group-addon'])}}
                            {{Form::text('manager', null, ['class'=>'form-control'])}}
                        </div>-->
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('date_birth', 'Дата рожд', ['class'=>'input-group-addon'])}}
                            {{Form::text('date_birth', null, ['class'=>'form-control datepicker'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('place_birth', 'Место рожд', ['class'=>'input-group-addon'])}}
                            {{Form::text('place_birth', null, ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('index', 'Индекс', ['class'=>'input-group-addon'])}}
                            {{Form::text('index', null, ['class'=>'form-control', 'data-mask'=>'999999'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('region', 'Регион', ['class'=>'input-group-addon'])}}
                            {{Form::text('region', null, ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('area', 'Район', ['class'=>'input-group-addon'])}}
                            {{Form::text('area', null, ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('city', 'Город', ['class'=>'input-group-addon'])}}
                            {{Form::text('city', null, ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('community', 'Нас. п.', ['class'=>'input-group-addon'])}}
                            {{Form::text('community', null, ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('street', 'улица', ['class'=>'input-group-addon'])}}
                            {{Form::text('street', null, ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('house', 'дом', ['class'=>'input-group-addon'])}}
                            {{Form::text('house', null, ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('build', 'Корпус', ['class'=>'input-group-addon'])}}
                            {{Form::text('build', null, ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('home', 'Квартира', ['class'=>'input-group-addon'])}}
                            {{Form::text('home', null, ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('channel', 'Канал продаж', ['class'=>'input-group-addon'])}}
                            {{Form::text('channel', null, ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group input-group input-group-lg">
                            {{Form::label('contract', 'Договор от', ['class'=>'input-group-addon'])}}
                            {{Form::text('contract', null, ['class'=>'form-control datepicker'])}}
                        </div>
                    </div>
                </div>

                {{Form::submit('Сохранить', ['class'=>'btn btn-primary'])}}
                {{Form::close()}}

            </div>
        </div>
    </div>
@endsection
