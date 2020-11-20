@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Planos <a href="{{ route('plans.create') }}" class="btn btn-dark">ADD</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-title">
           <form action="" method="POST" class="form form-inline">
                @csrf
                <input type="text" name="filter" placeholder="Buscar..." class="form-control">
                
           </form>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Preços</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($plans as $plan)
                        <tr>
                            
                            <td>{{ $plan->name }}</td>
                            <td>{{ number_format($plan->price, 2, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('plans.show', $plan->url) }}" class="btn btn-warning btn-sm">VER</a>
                            </td>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            {!! $plans->links() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop