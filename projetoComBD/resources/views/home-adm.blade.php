@extends('layout')
@section('principal')
<h1>Bem vindo adm, {{Auth::user()->name}}! </h1>
@endsection