

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
    <ul>
        @foreach ($contacts as $contact)
            <li>{{ $contact->name }} - {{ $contact->mobile }}</li>
        @endforeach
    </ul>

    </body>
</html>