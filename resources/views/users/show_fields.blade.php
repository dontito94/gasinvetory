<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $users->id !!}</p>
</div>

<!-- Firstname Field -->
<div class="form-group">
    {!! Form::label('firstname', 'Firstname:') !!}
    <p>{!! $users->firstname !!}</p>
</div>

<!-- Surname Field -->
<div class="form-group">
    {!! Form::label('surname', 'Surname:') !!}
    <p>{!! $users->surname !!}</p>
</div>

<!-- Username Field -->
<div class="form-group">
    {!! Form::label('username', 'Username:') !!}
    <p>{!! $users->username !!}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    <p>{!! $users->password !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $users->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $users->updated_at !!}</p>
</div>

