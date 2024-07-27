@extends('layout')

@section('title', 'Servicio')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/servicios.css') }}">

    @auth
    <tr>
        <td colspan="4">
            <a href="{{route('servicios.create')}}" class="btn-primary"><i class="bi bi-plus"></i> Nuevo Servicio</a>
        </td>
    </tr> 
    @endauth

    <div class="container-servicios">
        <h2 class="titulo-servicio">Lista Servicios</h2>

        <ul class="lista-servicios">
            @if ($servicios)
                @foreach ($servicios as $servicio)
                    <li class="item-servicio">
                        <span class="texto-servicio">
                            <a href="{{ route('servicios.show', $servicio->id) }}" class="enlace-servicio">{{ $servicio->titulo }}</a>
                        </span>
                        @if ($servicio->image)
                            <img src="{{ asset('storage/' . $servicio->image) }}" alt="{{$servicio->titulo}}" class="imagen-servicio">
                        @endif
                    </li>
                @endforeach
            @else
                <li class="mensaje-no-servicios">No existe ningún servicio que mostrar aquí</li>
            @endif
        </ul>

        <div class="paginacion">
            {{ $servicios->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
