function send(url, id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'get',
        dataType: 'json',
        url: url,
        data: {id: id},
        success: function(data) {
            if (data.success) {
                $('.modal').empty().append(data.html).modal();
            }
        }
    });
}