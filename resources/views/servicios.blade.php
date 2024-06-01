@extends('layout')

@section('title','Servicio')

@section('content')
    <h2>Servicios</h2>

    <ul>
        
        @if ($servicios)
            @foreach ($servicios as $item)
                <li>{{$item['titulo']}}</li>
            @endforeach
        @else
            <li>No existe ningun servicio que mostrar aqui</li>
        @endif
            

        
    </ul>

@endsection