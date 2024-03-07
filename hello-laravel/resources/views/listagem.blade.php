@extends('templates.app')

@section('title','Listagem de usuários')

@section('content')
    <h1>Listagem de usuários</h1>
    <table class="table table-bordered">
        <thead>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de nascimento</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['email']}}</td>
                    <td>{{$user['birthday']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
