<h1>All artists</h1>
@foreach( $artists as $artist )
    <h3><a href="/artists/{{ $artist->id }}">{{ $artist->name }}</a></h3>
@endforeach
