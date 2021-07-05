@if (Session::has('info-update'))
    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{Session::get('info-update')}}
    </div>
@endif