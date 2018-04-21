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
        <a class="navbar-brand" href="#">Contacts {{ $user->name }}</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ route('users.contacts.index', $user) }}">View All Contacts</a></li>
        <li><a href="{{ route('users.contacts.create', $user) }}">Create Contacts</a></li>
    </ul>
</nav>

<form method="post" action="{{ route('users.contacts.store', $user) }}">
    @csrf
    <div class="form-group">
        <label>Name : </label>
        <input type="text" name="name" />
    </div>
    <div class="form-group">
        <label>Mobile : </label>
        <input type="text" name="mobile" />
    </div>
    <div class="form-group">
        <button type="submit" >Submit</button>
    </div>
</form>