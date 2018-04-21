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
        <li><a href="{{ URL::to('users') }}">View All Users</a></li>
        <li><a href="{{ route('users.contacts.index', $user) }}">View All Contacts</a></li>
        <li><a href="{{ route('users.contacts.create', $user) }}">Create Contacts</a></li>
    </ul>
</nav>


<h3>Edit Contacts {{ $user->name }} : {{ $contact->name}}</h3>
<form method="post" action="{{ route('users.contacts.show', [$user,$contact]) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Name : </label>
        <input type="text" name="name" value="{{ $contact->name }}"/>
    </div>
    <div class="form-group">
        <label>Mobile : </label>
        <input type="text" name="mobile" value="{{ $contact->mobile }}"/>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>