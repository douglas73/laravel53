@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                       @forelse($post as $p)
                                <h3><strong>{{ $p->title }}</strong></h3>
                                <p>{{ $p->description }}</p>
                                <p><small>Author: <strong>{{ $p->user->name }}</strong></small></p>
                            @can('update-post', $p)
                                <a href="{{ url("/post/$p->id/update")}}">Editar</a>
                                
                            @endcan
                            <hr>
                        @empty 

                            <p>Não foi encontrado nenhuma postagem</p>

                        @endforelse
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
