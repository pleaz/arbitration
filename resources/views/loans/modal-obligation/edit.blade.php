<div class="modal-dialog" role="document">
    <div class="modal-content">

        {{Form::open(['url'=>route('obligation-edit-save')])}}

        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Редактирование обязательного платежа</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">

            {{Form::hidden('obligation_id', $obligation->id)}}

            <div class="form-group input-group input-group-lg">
                {{Form::label('obligation_type_id', 'Вид обязательного платежа', ['class'=>'input-group-addon'])}}
                {{Form::select('obligation_type_id', $obligation_types, $obligation->obligation_type->id, ['class' => 'form-control'])}}
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    {{Form::radio('kind', '2', ($obligation->kind == 2) ? true : false, ['class'=>'form-check-input'])}} Долг ИП
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    {{Form::radio('kind', '1', ($obligation->kind == 1) ? true : false, ['class'=>'form-check-input'])}} Долг ФЛ
                </label>
            </div>
            <div class="form-group input-group input-group-lg">
                {{Form::label('arrears', 'Недоимка', ['class'=>'input-group-addon'])}}
                {{Form::text('arrears', $obligation->arrears, ['class'=>'form-control'])}}
            </div>
            <div class="form-group input-group input-group-lg">
                {{Form::label('fine', 'Штрафы, пени', ['class'=>'input-group-addon'])}}
                {{Form::text('fine', $obligation->fine, ['class'=>'form-control'])}}
            </div>

        </div>
        <div class="modal-footer">
            {{Form::button('Отмена', ['class'=>'btn btn-secondary', 'data-dismiss'=>'modal'])}}
            {{Form::submit('Сохранить', ['class'=>'btn btn-primary'])}}
        </div>

        {{Form::close()}}

    </div>
</div>