@extends('layouts.master')


@section('title')
    Contact
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('src/css/form.css') }}">
@endsection

@section('content')
    @include('includes.info-box')
{!! Form::open(['method'=>'POST']) !!}
    {{csrf_field()}}
    <div class="form-group">
        {!! Form::label('title','Title') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}
@endsection