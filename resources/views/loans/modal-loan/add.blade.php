<div class="modal-dialog" role="document">
    <div class="modal-content">

        {{Form::open(['url'=>route('loan-add-save')])}}

        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Добавление займа, кредита</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">

            {{Form::hidden('case_id', $cases)}}

            <div class="form-group input-group input-group-lg">
                {{Form::label('loan_type_id', 'Вид обязательства', ['class'=>'input-group-addon'])}}
                {{Form::select('loan_type_id', $loan_types, null, ['class' => 'form-control'])}}
            </div>
            <div class="form-group input-group input-group-lg">
                {{Form::label('lender_type_id', 'Кредитор', ['class'=>'input-group-addon'])}}
                {{Form::select('lender_type_id', $lender_types, null, ['class' => 'form-control'])}}
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    {{Form::radio('kind', '2', true, ['class'=>'form-check-input'])}} Брал как ИП
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    {{Form::radio('kind', '1', null, ['class'=>'form-check-input'])}} Брал как ФЛ
                </label>
            </div>
            <div class="form-group input-group input-group-lg">
                {{Form::label('contract', 'Договор', ['class'=>'input-group-addon'])}}
                {{Form::text('contract', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group input-group input-group-lg">
                {{Form::label('arrears', 'Общая задолженность', ['class'=>'input-group-addon'])}}
                {{Form::text('arrears', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group input-group input-group-lg">
                {{Form::label('debt', 'Основной долг', ['class'=>'input-group-addon'])}}
                {{Form::text('debt', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group input-group input-group-lg">
                {{Form::label('fine', 'Пени', ['class'=>'input-group-addon'])}}
                {{Form::text('fine', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group input-group input-group-lg">
                {{Form::label('account', '№ счета', ['class'=>'input-group-addon'])}}
                {{Form::text('account', null, ['class'=>'form-control'])}}
            </div>

        </div>
        <div class="modal-footer">
            {{Form::button('Отмена', ['class'=>'btn btn-secondary', 'data-dismiss'=>'modal'])}}
            {{Form::submit('Добавить', ['class'=>'btn btn-primary'])}}
        </div>

        {{Form::close()}}

    </div>
</div>