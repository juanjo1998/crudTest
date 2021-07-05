<div class="form-group">    
    {!!Form::label('name','Product name:')!!}
    {!!Form::text('name',null,['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!!Form::label('short','Short description:')!!}
    {!!Form::text('short',null,['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!!Form::label('body','Description:')!!}
    {!!Form::textarea('body',null,['class' => 'form-control'])!!}
</div>

<div class="form-group">
    <a href="{{route('products.index')}}" class="btn btn-success">Show list</a>
    {!!Form::submit('Save',['class' => 'btn btn-primary float-right'])!!}
</div>