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
    </div>
@endsection