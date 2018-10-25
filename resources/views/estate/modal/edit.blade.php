<div class="modal-dialog" role="document">
    <div class="modal-content">

        {{Form::open(['url'=>route('estate-edit-save')])}}

        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Редактирование имущества</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">

            {{Form::hidden('estate_id', $estate->id)}}
            <div class="form-group input-group input-group-lg">
                {{Form::label('name', 'Наименование', ['class'=>'input-group-addon'])}}
                {{Form::text('name', $estate->name, ['class'=>'form-control'])}}
            </div>
            <div class="form-group input-group input-group-lg">
                {{Form::label('estate_type_id', 'Тип имущества', ['class'=>'input-group-addon'])}}
                {{Form::select('estate_type_id', $estate_types, $estate->estate_type->id, ['class' => 'form-control'])}}
            </div>
            <div class="form-group input-group input-group-lg">
                {{Form::label('since', 'Год выпуска', ['class'=>'input-group-addon'])}}
                {{Form::text('since', $estate->since, ['class'=>'form-control'])}}
            </div>
            <div class="form-group input-group input-group-lg">
                {{Form::label('quantity', 'Количество', ['class'=>'input-group-addon'])}}
                {{Form::text('quantity', $estate->quantity, ['class'=>'form-control'])}}
            </div>
            <div class="form-group input-group input-group-lg">
                {{Form::label('price', 'Цена', ['class'=>'input-group-addon'])}}
                {{Form::text('price', $estate->price, ['class'=>'form-control'])}}
            </div>
            <div class="form-group input-group input-group-lg">
                {{Form::label('date', 'Дата продажи', ['class'=>'input-group-addon'])}}
                {{Form::text('date', $estate->date ? Carbon\Carbon::parse($estate->date)->format('d.m.Y') : null, ['class'=>'form-control datepicker'])}}
            </div>
            <div class="form-group input-group input-group-lg">
                {{Form::label('sell_price', 'Цена продажи', ['class'=>'input-group-addon'])}}
                {{Form::text('sell_price', @$estate->sell_price, ['class'=>'form-control'])}}
            </div>
            <div class="form-group input-group input-group-lg">
                {{Form::label('offer', '№ договора', ['class'=>'input-group-addon'])}}
                {{Form::text('offer', @$estate->offer, ['class'=>'form-control'])}}
            </div>

        </div>
        <div class="modal-footer">
            {{Form::button('Отмена', ['class'=>'btn btn-secondary', 'data-dismiss'=>'modal'])}}
            {{Form::submit('Сохранить', ['class'=>'btn btn-primary'])}}
        </div>

        {{Form::close()}}

    </div>
</div>

<script type="application/javascript">
    $('.datepicker').datepicker({
        format: "dd.mm.yyyy",
        language: "ru"
    });
</script>