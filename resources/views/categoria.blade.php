
@extends('layouts.layout')

@section('content')
    <div class="col-2">
        <div class="list-group">
            <a href="{{ route('categoria') }}"
                class="list-group-item list-group-item-action @if(0 == $idCategoria) active @endif">
                Todas
            </a>
            @foreach ($categorias as $value )
            <a href="{{ route('categoriaPorId', ['idCategoria'=>$value->id]) }}"
                class="list-group-item list-group-item-action @if($value->id == $idCategoria) active @endif">
                {{ $value->categoria }}
            </a>
            @endforeach
        </div>
    </div>

    <div class="col-10">
        @include('_produtos', ['data'=>$produtos])
    </div>

@endsection
