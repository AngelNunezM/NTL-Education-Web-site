<div>
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
                                    <div class="font-semibold text-left">Nombre</div>
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
                            @foreach ($users as $usuario)
                            <tr>    
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">{{$usuario->name}}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{$usuario->email}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    @switch($usuario->TipoUsuario)
                                        @case(1)
                                        <div class="text-left font-medium text-green-500 text-center">Ordinario</div>
                                            @break
                                        @case(2)
                                        <div class="text-left font-medium text-green-500 text-center">Instructor</div>
                                            @break
                                         @case(3)
                                        <div class="text-left font-medium text-green-500 text-center">Administrador</div>
                                            @break
                                        @default
                                            
                                    @endswitch
                                    
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <a href="#" class="text-purple-700 underline"> Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   
</section>

</div>
