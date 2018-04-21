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
        <a class="navbar-brand" href="{{ URL::to('users') }}">User Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('users') }}">View All Users</a></li>
        <li><a href="{{ URL::to('users/create') }}">Create a User</a>
    </ul>
</nav>

<h1>Showing {{ $users->name }}</h1>
<div class="jumbutron-center">
    <p>
        <strong>Name : </strong> {{ $users->name }} </br>
        <strong>Email : </strong> {{ $users->email }} </br>
        <strong>Create Date : </strong> {{ $users->created_at }}
    <p>
</div>