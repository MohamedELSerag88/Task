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
        {!! Form::open(array('url' => array( LaravelLocalization::setLocale().'/products'),'enctype' => 'multipart/form-data')) !!} 
            
            <div class="form-group">
                <label for="name">{{ __('app.name') }}:</label>
                {!! Form::text('name',null,["class"=>"form-control","id"=>"name"]) !!}
            </div>
            <div class="form-group">
                <label for="Arabicname">{{ __('app.arabicname') }}:</label>
                {!! Form::text('ar_name',null,["class"=>"form-control","id"=>"Arabicname"]) !!}
            </div>
            <div class="form-group">
                    <label for="price">{{ __('app.price') }}:</label>
                    {!! Form::number('price',null,["class"=>"form-control","id"=>"price", "step"=>"0.01"]) !!}
                </div>
            <div class="form-group">
                <label for="description">{{ __('app.description') }}:</label>
                {!! Form::textarea('description',null,["class"=>"form-control","id"=>"description"]) !!}
            </div>
            {{-- <div class="input-group">
                
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                    aria-describedby="inputGroupFileAddon01" name="image">
                    <label class="custom-file-label" for="inputGroupFile01">Choose Image</label>
                </div>
            </div> --}}
            <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">{{ __('app.image') }}</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="image"/> <!-- rename it -->
                    </div>
                </span>
            </div>
            <div class="form-group" style="margin-top: 20px;">
                <button type="submit" class="btn btn-default">{{ __('app.add') }}</button>
            </div>
        </form>
</div>
@endsection