<div class="modal-dialog" role="document">
    <div class="modal-content">

        {{Form::open(['url'=>route('event-edit-date-save')])}}

        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Отложить мероприятие</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">

            {{Form::hidden('event_id', $event->id)}}

            <div class="form-group input-group input-group-lg">
                {{Form::label('date', 'Дата выполнения', ['class'=>'input-group-addon'])}}
                {{Form::text('date', $event->date ? Carbon\Carbon::parse($event->date)->format('d.m.Y') : null, ['class'=>'form-control datepicker'])}}
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