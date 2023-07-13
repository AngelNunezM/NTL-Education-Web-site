<div>
    @auth
        
    @foreach ($course as $Cursos)
   <div class="mt-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-3 gap-8">
            <div class="col-span-2 "> 
                <div class="embed-responsive">
                    {!!$frame!!}
                </div>
               
               <div class="card mt-6">
                <div class="card-body flex bg-[rgb(50,5,30)] rounded-lg">
                    @if($previous)
                    <a href="#" wire:click="changeLeccion(1)" class="shadow mr-4 bg-[rgb(50,5,30)] p-3 hover:bg-white hover:text-black rounded-l-lg text-white font-semibold hover:bg-black duration-[500ms,800ms] text-center">⏮ Regresar</a>
                    @endif
                    @if($next)
                    <a href="#" wire:click="changeLeccion(1)" class="shadow ml-4 bg-[rgb(50,5,30)] p-3 hover:bg-white hover:text-black rounded-r-lg text-white font-semibold hover:bg-black duration-[500ms,800ms] text-center ml-auto">Continuar ⏭</a>
                    @endif
                </div>
                {{-- lado izquierdo de la pagina --}}
               <p>Indice: {{$index}}</p>
               <p>Indice: {{$previous}}</p>
               <p>Indice: {{$next}}</p>
               </div>
            </div>

            
            
            <div class="card shadow-2xl bg-white p-2">
                <div class="flex flex-auto w-50 justify-start">
                    <div class="relative group w-full overflow-cover  h-32 rounded-t-3xl mt-2">
                    <h1 class="text-center font-bold text-xl">{{$Cursos['Titulo']}}</h1>
                    <div class="text-center mt-2">
                        <p>Impartido por: <a href="{{route('showProfile',$Cursos['IdUsuario'])}}" class="font-bold text-[rgb(50,5,30)]">{{"@".$Cursos['Nombre']}}</a></p>
                        
                    </div>
                    
                    <ul class="py-2 mt-2 border-2 rounded-lg">
                        @foreach ($secciones as $seccion)
                        @if ($seccion['IdCurso'] == $Cursos['Id_Cursos'])
                            <li class="ml-5">
                                <a class="font-bold">{{$seccion['Nombre']}}</a>
                                <ul class="ml-2">
                                    @foreach ($lecciones as $leccion)
                                    @if ($leccion['Id_Secciones'] == $seccion['Id_Secciones'])
                                        <li>
                                            <a class="text-gray-700">{{$leccion['Nombre']}}</a>
                                        </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                         @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
   </div>
   @endforeach
   @endauth
   @guest
   <br>
   <x-Guest>
</x-Guest>
   @endguest
   {{-- comment 
   @foreach ($course as $Cursos)
   
   

--}}
</div>
