<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('users') }}">Contacts User</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('users') }}">View All Users</a></li>
        <li><a href="{{ route('users.contacts') }}">Create a User</a>
    </ul>
</nav>

<h1>Showing {{ $user->name }}</h1>
<div class="jumbutron-center">
    <p>
        <strong>Name : </strong> {{ $user->name }} </br>
        <strong>Email : </strong> {{ $user->email }} </br>
        <strong>Create Date : </strong> {{ $user->created_at }}
    <p>
</div>
<div>
    <a class="btn btn-small btn-info" href="{{ URL::to('users/' . $user->id . '/edit') }}">Edit this User</a>
    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
        @method('DELETE')
        @csrf

        <button type="submit" class="btn btn-small btn-danger">Delete this User</button>
    </form>
</div>