@extends('layouts.app')

@section('content')

@if($users)
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Список пользователей</h3>
                <ul class="list-group">
                    @foreach($users as $user)
                        <li class="list-group-item">
                            <a href="{{ route('users.show', $user->id) }}" data-toggle="tooltip" data-placement="top" title="Посмотреть профиль">{{ $user->name }}</a>
                            <br>
                            @if(Auth::user()->id != $user->id)
                                <a class="text-secondary" href="{{ route('messages.show', ['id' => $user->id]) }}">Отправить сообщение</a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@else
    <div>Нет зарегистрированных пользователей</div>
@endif

@if($users->total() > $users->count())
    <div class="container" style="margin-top: 20px;">
        <div class="row justify-content-center">
            <div class="col-md-2">
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endif
@endsection
