<table class="table table-responsive" id="users-table">
    <thead>
        <th>Firstname</th>
        <th>Surname</th>
        <th>Username</th>
        <th>Password</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($users as $users)
        <tr>
            <td>{!! $users->firstname !!}</td>
            <td>{!! $users->surname !!}</td>
            <td>{!! $users->username !!}</td>
            <td>{!! $users->password !!}</td>
            <td>
                {!! Form::open(['route' => ['users.destroy', $users->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('users.show', [$users->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('users.edit', [$users->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
