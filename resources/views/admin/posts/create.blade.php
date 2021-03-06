@extends("layouts.admin")
@section('content')
    <h1>Create Post</h1>

        {{ Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>true]) }}
        <div class="form-group">
            {{ Form::label('title', 'Title:')}}
            {{ Form::text('title',null, ['class'=>'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('cateogary_id', 'Cateogary:') }}
            {{ Form::select('cateogary_id',array(1=>'PHP',0=>'Javascript',3=>'Laravel'),null, ['class'=>'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('photo_id', 'Photo:') }}
            {{ Form::file('photo_id',null, ['class'=>'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('body', 'Description:') }}
            {{ Form::textarea('body',null, ['class'=>'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::submit('Create Post',['class'=>'btn btn-primary']) }}
        </div>
        {{ Form::close() }}

    <div class="row">
        @include('includes.form_error')
    </div>

@stop