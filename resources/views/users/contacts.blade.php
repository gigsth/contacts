<ul>
@foreach ($contacts as $contact)
    <li>{{ $contact->name }} - {{ $contact->mobile }}</li>
@endforeach
</ul>