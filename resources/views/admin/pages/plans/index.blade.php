@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Planos &nbsp;&nbsp; <a href="{{ route('plans.create') }}" class="btn btn-dark"><i class="fa fa-plus-circle" aria-hidden="true"></i> &nbsp; Novo</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-title">
            <form action="{{route('plans.search')}}" method="POST" class="form form-inline">
                @csrf
                <input type="text" name="filter" placeholder="Buscar..." class="form-control" value="{{ $filters['filter'] ?? ''}}">
                <button type="submit" class="btn btn-dark"> <i class="fas fa-search"></i>&nbsp; Buscar</button>

           </form>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <thead class="thead-dark">
                        <tr>
                            <th class="lead" style="font-weight: 600">Nome</th>
                            <th class="lead" style="font-weight: 600">Preços</th>
                            <th class="lead" style="font-weight: 600">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($plans as $plan)
                        <tr>
                            
                            <td class="lead" style="font-weight: 500">{{ $plan->name }}</td>
                            <td class="lead" style="font-weight: 500">{{ number_format($plan->price, 2, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('plans.show', $plan->url) }}" class="btn btn-success btn-sm" title="VER"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>
                            </td>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $plans->appends($filters)->links() !!}
            @else
                {!! $plans->links() !!}
            @endif
            
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop