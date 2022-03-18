@extends('layouts.app')
@section('content')

    <div class="row mt-3">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>microCRUD - добавить запись</h2>
            </div>
            <div class="pull-right mt-3 mb-3">
                <a class="btn btn-secondary" href="{{ route('posts.index') }}"> Вернуться к списку</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Название:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Название">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Описание:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Описание"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </form>
@endsection
