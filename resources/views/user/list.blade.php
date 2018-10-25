@extends('layouts.app')

@section('content')
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header">
                Список дел
            </div>
            <div class="card-body col-md-12 align-self-center">
                <div class="list-group col-sm-4">
                    @foreach($list as $item)
                        <a class="list-group-item list-group-item-action list-group-item-info" href="{{route('user', ['id' => @$item['id']])}}">
                            {{@$item['surname']}} {{@$item['name']}} {{@$item['patron']}}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
