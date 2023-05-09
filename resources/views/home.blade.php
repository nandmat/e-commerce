@extends('layouts.layout')

@section('content')
    @include('_produtos', ['data'=>$data])
@endsection
