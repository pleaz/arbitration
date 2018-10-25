@extends('layouts.app')

@section('content')
    <div class="container col-md-12">
        <div class="card">
            <div class="card-header">
                Долги по делу: {{@$user->surname}} {{@$user->name}} {{@$user->patron}}
            </div>
            <div class="card-body col-lg-auto align-self-center">

                <button onclick="send(event, '{{route('obligation-add')}}', '{{@$user->id}}')" type="button" class=" mb-2 btn btn-primary">Добавить обязательный платеж</button>
                <button onclick="send(event, '{{route('loan-add')}}', '{{@$user->id}}')" type="button" class=" mb-2 btn btn-primary">Добавить займ, кредит</button>

                <table class="table table-hover table-responsive">
                    <thead>
                    <tr>
                        <th>Тип</th>
                        <th>Вид обязательного платежа/Вид обязательства</th>
                        <th>Кредитор</th>
                        <th>Договор</th>
                        <th>Недоимка/Общая задолженность</th>
                        <th>Основной долг</th>
                        <th>Пени, штрафы</th>
                        <th>№ счета</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loans as $loan)
                        <tr>

                            @if($loan->getTable() == 'obligation')
                                <td>Обязательный платеж</td>
                                <td>{{@$loan->obligation_type->name}}</td>
                                <td>-</td>
                                <td>-</td>
                                <td>{{@$loan->arrears}}</td>
                                <td>-</td>
                                <td>{{@$loan->fine}}</td>
                                <td>-</td>
                                <td>
                                    <button onclick="send(event, '{{route('obligation-edit')}}', '{{@$loan->id}}');" type="button" class="btn btn-warning">редактировать</button>
                                </td>
                                <td>
                                    <button onclick="send(event, '{{route('obligation-delete')}}', '{{@$loan->id}}');" type="button" class="btn btn-danger">удалить</button>
                                </td>
                            @elseif($loan->getTable() == 'loan')
                                <td>Займ, кредит</td>
                                <td>{{@$loan->loan_type->name}}</td>
                                <td>{{@$loan->lender_type->name}}</td>
                                <td>{{@$loan->contract}}</td>
                                <td>{{@$loan->arrears}}</td>
                                <td>{{@$loan->debt}}</td>
                                <td>{{@$loan->fine}}</td>
                                <td>{{@$loan->account}}</td>
                                <td>
                                    <button onclick="send(event, '{{route('loan-edit')}}', '{{@$loan->id}}');" type="button" class="btn btn-warning">редактировать</button>
                                </td>
                                <td>
                                    <button onclick="send(event, '{{route('loan-delete')}}', '{{@$loan->id}}');" type="button" class="btn btn-danger">удалить</button>
                                </td>
                            @endif


                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"></div>

            </div>
        </div>
    </div>
@endsection