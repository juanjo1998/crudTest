@if (Session::has('info-store'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{Session::get('info-store')}}
    </div>
@endif