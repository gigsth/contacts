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
    </ul>
</nav>


<h3>Showing Contacts {{ $user->name }} : {{ $contact->name}}</h3>
<div class="jumbutron-center">
    <p>
        <strong>Name : </strong> {{ $contact->name }} </br>
        <strong>Mobile : </strong> {{ $contact->mobile }} </br>
        <strong>Create Date : </strong> {{ $contact->created_at }}
    <p>
</div>
