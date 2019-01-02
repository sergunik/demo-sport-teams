@extends('base')

@section('body')
    <div class="flex-center">
        <div class="text-center">
            <h1 class="site-name">Sports teams</h1>
            <div class="links">
                <a href="{{ route('team.index') }}">Teams</a>
                <a href="{{ route('player.index') }}">Players</a>
                <a href="https://github.com/sergunik/demo-sport-teams#rest-api">API</a>
            </div>
        </div>
    </div>
@endsection