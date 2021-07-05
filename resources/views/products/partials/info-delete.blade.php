@if (Session::has('info-delete'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{Session::get('info-delete')}}
    </div>
@endif