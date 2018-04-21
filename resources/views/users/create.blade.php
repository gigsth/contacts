<!DOCTYPE html>
<html>
    <head>
        <title>User Contact</title>
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

            <h1>Create User</h1>

            <form method="post" action="{{ route('users.store') }}">
                @csrf
                <div class="form-group">
                    <label>Name : </label>
                    <input type="text" name="name" />
                </div>
                <div class="form-group">
                    <label>Email : </label>
                    <input type="email" name="email" />
                </div>
                <div class="form-group">
                    <button type="submit" >Submit</button>
                </div>
            </form>

        </div>
    </body>
</html>