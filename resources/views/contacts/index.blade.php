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

<h1>All Contacts : {{ $user->name }}</h1>

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Mobile</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($contacts as $contact)
        <tr>
            <td>{{ $contact->id }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->mobile }}</td>

            <td> 
                <a class="btn btn-small btn-success" href="{{ route('users.contacts.show', [$user, $contact]) }}">Show this User</a>
                <a class="btn btn-small btn-info"    href="{{ route('users.contacts.edit', [$user, $contact]) }}">Edit this User</a>
                
                <form action="{{ route('users.contacts.destroy', [$user, $contact]) }}" method="POST" style="display:inline;">
                    @method('DELETE')
                    @csrf

                    <button type="submit" class="btn btn-small btn-danger">Delete this User</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>