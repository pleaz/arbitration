<div class="modal-dialog" role="document">
    <div class="modal-content">

        {{Form::open(['url'=>route('event-delete-save')])}}
        {{Form::hidden('event_id', $event)}}

        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Подтверждение удаления</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-footer">
            {{Form::button('Отмена', ['class'=>'btn btn-secondary', 'data-dismiss'=>'modal'])}}
            {{Form::submit('Удалить', ['class'=>'btn btn-primary'])}}
        </div>

        {{Form::close()}}

    </div>
</div>