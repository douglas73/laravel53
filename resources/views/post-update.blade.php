@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard  - Edit Register</div>

                <div class="panel-body">
                        
                            <h3><strong>{{ $post->title }}</strong></h3>
                            <p>{{ $post->description }}</p>
                            <p><small>Author: <strong>{{ $post->user->name }}</strong></small></p>

                </div>


            </div>
        </div>
    </div>
</div>
@endsection
