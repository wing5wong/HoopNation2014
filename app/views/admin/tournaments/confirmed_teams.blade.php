@section('content')

<h1>Confirmed Teams</h1>
<hr>

@foreach($teams as $team)

<h2>{{ $team->name }}</h2>
<ul>
@foreach($team->players as $player)
   <li>{{ $player->first_name}} {{$player->last_name}}</li>
@endforeach
</ul>

@endforeach

@stop
