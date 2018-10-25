<div class="modal-dialog" role="document">
    <div class="modal-content">

        {{Form::open(['url'=>route('event-edit-save')])}}

        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Редактирование мероприятия</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">

            {{Form::hidden('event_id', $event->id)}}
            <div class="form-group input-group input-group-lg">
                {{Form::label('event_type_id', 'Тип мероприятия', ['class'=>'input-group-addon'])}}
                {{Form::select('event_type_id', $event_types, $event->event_type_id, ['class' => 'form-control'])}}
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    {{Form::radio('open', '0', $event->open == 1 ? false : true, ['class'=>'form-check-input'])}} Не выполнено
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    {{Form::radio('open', '1', $event->open == 1 ? true : false, ['class'=>'form-check-input'])}} Выполнено
                </label>
            </div>
            <div class="form-group input-group input-group-lg">
                {{Form::label('organization_id', 'Организация', ['class'=>'input-group-addon'])}}
                {{Form::select('organization_id', $organizations, $event->organization_id, ['class' => 'form-control'])}}
            </div>
            <div class="form-group input-group input-group-lg">
                {{Form::label('date', 'Дата', ['class'=>'input-group-addon'])}}
                {{Form::text('date', $event->date ? Carbon\Carbon::parse($event->date)->format('d.m.Y') : null, ['class'=>'form-control datepicker'])}}
            </div>
            <div class="form-group input-group input-group-lg">
                {{Form::label('comment', 'Комментарий', ['class'=>'input-group-addon'])}}
                {{Form::textarea('comment', $event->comment, ['class'=>'form-control', 'rows'=>'3'])}}
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