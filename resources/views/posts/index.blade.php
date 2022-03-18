@extends('layouts.app')
@section('content')

    <div class="row mt-3">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>microCRUD - список</h2>
            </div>
            <div class="pull-right mt-3 mb-3">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Добавить запись</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Название</th>
            <th>Описание</th>
            <th>Действие</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td class="col-4">{{ $post->title }}</td>
                <td class="col-4">{{ $post->description }}</td>
                <td class="col-4">
                    <a class="btn btn-info me-1" href="{{ route('posts.show',$post->id) }}">Просмотреть</a>
                    <a class="btn btn-primary me-1" href="{{ route('posts.edit',$post->id) }}">Редактировать</a>
                    <form class="d-inline" action="{{ route('posts.destroy',$post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
