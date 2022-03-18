@extends('layouts.app')
@section('content')

    <div class="row mt-3">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> microCRUD - просмотреть запись</h2>
            </div>
            <div class="pull-right mt-3 mb-3">
                <a class="btn btn-secondary" href="{{ route('posts.index') }}"> Вернуться к списку</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group">
                <strong>Название:</strong>
                {{ $post->title }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Описание:</strong>
                {{ $post->description }}
            </div>
        </div>

    </div>
@endsection
