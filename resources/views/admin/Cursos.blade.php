@extends('adminlte::page')

@section('title', 'Soporte NTL')

@section('content_header')
    
@stop

@section('content')
    <br>
    <p>Dashboard Usuarios Soporte</p>
    <!-- component -->
<section class="antialiased bg-gray-100 text-gray-600 h-screen px-4">
    <div class="flex flex-col justify-center h-full">
        <!-- Table -->
        <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-semibold text-gray-800">Todos los Usuarios</h2>
            </header>
            <div class="card-header">
                <input wire:model="search" type="search" class="form-control w-100" placeholder="Ingrese el Usuario ...">
            </div>
            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Nombre del Curso</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Email</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Tipo de Usuario</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center"></div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">
                            @foreach ($data as $curso)
                            @if ($curso['Estatus'] == 2)
                            <tr>    
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">{{$curso['Titulo']}}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left"></div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <a href="#" class="text-purple-700 underline"> Edit</a>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   
</section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop