<div>
    <div class="">
        @auth
        <!-- component -->
        <div class=" p-8 rounded-md w-full">
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="text-center text-3xl font-bold mb-3">
                        Dashboard Instructores
                    </div>
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Nombre del Curso
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Estatus
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Valoracion
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Alumnos
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $Cursos)
                                @if($Cursos['IdUsuario'] == auth()->user()->id)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{$Cursos['Titulo']}}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-5 py-5  border-b border-gray-200 bg-white text-sm">
                                        <span
                                            class="relative  inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                            <span aria-hidden
                                                class="absolute inset-0 bg-green-200 opacity-50 rounded-full "></span>
                                        <span class="relative  ">{{$Cursos['Estatus']}}</span>
                                        </span>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 ml-5 whitespace-no-wrap">
                                            5 ⭐
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap ml-3">{{$Cursos['Total']}}</p>
                                    </td>
                                    
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="{{route('instructor.courses.edit',$Cursos['Id_Cursos'])}}" class="text-purple-700 underline"> Edit</a>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                            
                        </table>
                        {{-- comment --}}
                    </div>
                    <div class="text-right flex justify-end">
                        <a class="mr-4 bg-[rgb(50,5,30)] block p-2 p hover:bg-white hover:text-black h-max w-80 sm:w-40 rounded-xl mb-2 text-white font-semibold hover:bg-black duration-[500ms,800ms] text-center mt-3" href="{{route('instructor.courses.create')}}" >Crear curso</a>
                    </div>
                    </div>
            </div>
        </div>
    </div>
    @endauth
    @guest
    <br>
    <x-Guest>
    </x-Guest>
    @endguest
</div>
