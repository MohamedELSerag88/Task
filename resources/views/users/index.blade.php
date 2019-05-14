@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @include('flash::message')
            <h4>Users</h4>
            <a href="/users/create" type="button" class="btn btn-primary" style="margin-bottom: 20px;">{{ __('app.addnew') }}</a>
            <div class="table-responsive">
                <table id="mytable" class="table table-bordred table-striped">
                    <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th>type</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->type }}</td>
                                <td><a href="/users/{{ $user->id }}/edit" title="Edit"><button class="btn btn-primary btn-xs"  ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                                <td>
                                        {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                                        <div class='btn-group'>
                                            {!! Form::button('<span class="glyphicon glyphicon-trash"></span>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                        </div>
                                     {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="clearfix"></div> 
            </div> 
        </div>
    </div>
</div>
@endsection