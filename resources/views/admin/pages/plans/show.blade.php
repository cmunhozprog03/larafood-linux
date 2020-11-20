@extends('adminlte::page')

@section('title', "Detalhes do Plano {$plan->name}")

@section('content_header')
  <h1>Detalhes do Plano: <b>{{$plan->name}}</b></h1>
@stop

@section('content')
    <div class="card">
      <ul>
        <li>
          <strong>Nome: </strong> {{$plan->name}}
        </li>
        <li>
          <strong>URL: </strong> {{$plan->url}}
        </li>
        <li>
          <strong>Preço: </strong> {{number_format($plan->price, 2, ',', '.')}}
        </li>
        <li>
          <strong>Nome: </strong> {{$plan->name}}
        </li>
      </ul>
      <div>
        <form action="{{ route('plans.destroy', $plan->url)}}" method="POST">
          @csrf
          @method('DELETE')
            <button type="submit" class="btn btn-danger btn-lg">DELETAR O PLANO: {{$plan->name}} </button>
        </form>
      </div>
    </div>
@endsection