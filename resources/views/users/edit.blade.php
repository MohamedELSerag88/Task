@extends('layouts.app')

@section('content')
<div class="container">
        <h3 class="h3">{{ __('app.products') }}</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {!! Form::model($user,array('route' => ['users.update', $user->id], 'method' => 'patch')) !!} 
            
            <div class="form-group">
                <label for="name">{{ __('app.name') }}:</label>
                {!! Form::text('name',null,["class"=>"form-control","id"=>"name"]) !!}
            </div>
            <div class="form-group">
                <label for="email">{{ __('app.email') }}:</label>
                {!! Form::email('email',null,["class"=>"form-control","id"=>"email"]) !!}
            </div>
            <div class="form-group">
                <label for="password">{{ __('app.password') }}:</label>
                <input name="password" type="password" class="form-control" id="inputPassword">
            </div>
            <div class="form-group">
                <label for="password">{{ __('app.password_confirmation') }}:</label>
                <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" >
            </div>
            <div class="form-group">
                <label for="type">{{ __('app.type') }}:</label>
                {!! Form::select('type',['admin'=>'Admin','user'=>'User'],null,["class"=>"form-control","id"=>"type"]) !!}
            </div>
            <div class="form-group" style="margin-top: 20px;">
                <button type="submit" class="btn btn-default">{{ __('app.save') }}</button>
            </div>
        </form>
</div>
@endsection