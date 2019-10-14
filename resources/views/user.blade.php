@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="list-group">
                <li class="list-group-item">ID: {{ $user->id }}</li>
                <li class="list-group-item">Имя: {{ $user->name }}</li>
                <li class="list-group-item">Адрес электронной почты: {{ $user->email }}</li>
                <li class="list-group-item">Дата регистрации: {{ $user->created_at }}</li>
            </ul>
        </div>
    </div>
</div>

@endsection
