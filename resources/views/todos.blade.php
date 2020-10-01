<h1>{{ $title }}</h1>

<ul>
    @foreach($todos as $todo)
    <li>{{ $todo }}</li>
    @endforeach
</ul>
