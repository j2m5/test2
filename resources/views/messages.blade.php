@extends('layouts.app')

@section('content')

    <div class="container">
        @if($errors->any())
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">{{ $errors->first() }}</div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    @forelse($messages as $message)
                        <li class="list-group-item">
                            <div>{{ $message->user->name }}</div>
                            <div>{{ $message->content }}</div>
                            <div>{{ $message->created_at }}</div>
                        </li>
                    @empty
                        <li class="list-group-item">Сообщений нет</li>
                    @endforelse
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('messages.store') }}" method="post">
                    <input type="hidden" name="to" value="{{ $id }}">
                    @csrf
                    <div class="form-group">
                        <textarea style="resize:none;" class="form-control" name="content" rows="3" placeholder="Напишите сообщение"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>

@endsection

