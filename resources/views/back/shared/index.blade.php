@extends('back.layout')
@section('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endsection
@section('main') 
  {{ $dataTable->table(['class' => 'table table-bordered table-hover table-sm'], true) }}
  @if(Route::currentRouteName() === 'pays.index')
    <a class="btn btn-primary" href="{{ route('pays.create') }}" role="button">Créer un nouveau pays</a>
  @endif
  @if(Route::currentRouteName() === 'etats.index')
  <a class="btn btn-primary" href="{{ route('etats.create') }}" role="button">Créer un nouvel état</a>
@endif
@endsection
@section('js') 
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> 
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script> 
  {{ $dataTable->scripts() }}
  
@endsection