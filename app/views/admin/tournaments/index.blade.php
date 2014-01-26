@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            Tournaments
            </div>
            <ul class="list-group">
                @foreach($tournaments as $tournament)
                <li class="list-group-item"><a href="{{URL::route('admin.tournaments.show',$tournament->id)}}">{{$tournament->name}} - {{$tournament->year}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@show







