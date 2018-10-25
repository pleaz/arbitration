<div class="modal-dialog" role="document">
    <div class="modal-content">

        {{Form::open(['url'=>route('estate-add-save')])}}

        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Добавление имущества</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">

            {{Form::hidden('case_id', $cases)}}
            <div class="form-group input-group input-group-lg">
                {{Form::label('name', 'Наименование', ['class'=>'input-group-addon'])}}
                {{Form::text('name', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group input-group input-group-lg">
                {{Form::label('estate_type_id', 'Тип имущества', ['class'=>'input-group-addon'])}}
                {{Form::select('estate_type_id', $estate_types, null, ['class' => 'form-control'])}}
            </div>
            <div class="form-group input-group input-group-lg">
                {{Form::label('since', 'Год выпуска', ['class'=>'input-group-addon'])}}
                {{Form::text('since', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group input-group input-group-lg">
                {{Form::label('quantity', 'Количество', ['class'=>'input-group-addon'])}}
                {{Form::text('quantity', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group input-group input-group-lg">
                {{Form::label('price', 'Цена', ['class'=>'input-group-addon'])}}
                {{Form::text('price', null, ['class'=>'form-control'])}}
            </div>

        </div>
        <div class="modal-footer">
            {{Form::button('Отмена', ['class'=>'btn btn-secondary', 'data-dismiss'=>'modal'])}}
            {{Form::submit('Добавить', ['class'=>'btn btn-primary'])}}
        </div>

        {{Form::close()}}

    </div>
</div>