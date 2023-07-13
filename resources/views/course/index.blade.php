<x-app-layout>
    @auth
    <section class="">
        <div class="bg-gray-200 py-4">
            <div class="mx-w 7xl mx-auto text-center sm:px-6 lg:px-8">
                <!-- component -->
                <div class="text-center text-3xl font-bold">
                    Ofrecemos Cursos de 
                    <div class="relative inline-grid grid-cols-1 grid-rows-1 gap-12 overflow-hidden">
                    <span class="animate-word col-span-full row-span-full text-[rgb(50,5,30)]">Desarollo web</span>
                    <span class="animate-word-delay-1 col-span-full row-span-full text-[rgb(50,5,30)]">Base de datos</span>
                    <span class="animate-word-delay-2 col-span-full row-span-full text-[rgb(50,5,30)]">Programacion</span>
                    <span class="animate-word-delay-3 col-span-full row-span-full text-[rgb(50,5,30)]">Marketing</span>
                    <span class="animate-word-delay-4 col-span-full row-span-full text-[rgb(50,5,30)]">Productividad</span>
                    </div>
                </div>
  
  <style>
  
  @keyframes word {
    0% {
      transform: translateY(100%);
    }
    15% {
      transform: translateY(-10%);
      animation-timing-function: ease-out;
    }
  
    20% {
      transform: translateY(0);
    }
  
    40%,
    100% {
      transform: translateY(-110%);
    }
  }
  
  .animate-word {
    animation: word 7s infinite;
  }
  .animate-word-delay-1 {
    animation: word 7s infinite;
    animation-delay: -1.4s;
  }
  .animate-word-delay-2 {
    animation: word 7s infinite;
    animation-delay: -2.8s;
  }
  .animate-word-delay-3 {
    animation: word 7s infinite;
    animation-delay: -4.2s;
  }
  .animate-word-delay-4 {
    animation: word 7s infinite;
    animation-delay: -5.6s;
  }
  
  </style>
            </div>   
        </div>
        <br>
    @foreach ($data as $Cursos)
    @if ($Cursos['Estatus'] == 3 )

                <!-- component -->
            <section class="text-gray-600 body-font ">
                <div class="container px-5 py-4 mx-auto">
                    <div class="shadow-xl p-5  flex items-center  mx-auto rounded-lg  sm:flex-row flex-col hover:border-l-4 hover:border-r-4 hover:border-[rgb(50,5,30)]">
                    <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center flex-shrink-0">
                        <img src="https://firebasestorage.googleapis.com/v0/b/thecaffeinecode.appspot.com/o/Tcc_img%2Flogo.png?alt=media&token=5e5738c4-8ffd-44f9-b47a-57d07e0b7939"/>
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                        <h1 class="text-black text-2xl title-font font-bold mb-2">{{ $Cursos['Titulo']}}</h1>
                        <p class="leading-relaxed text-base">{{ $Cursos['Descripcion']}}</p>
                        <div class="md:flex font-bold text-gray-800">
                            <div class="w-full md:w-1/2 flex space-x-3">
                                <div class="w-1/2">
                                    <h2 class="text-gray-500">Precio</h2>
                                    <p >{{$Cursos['Nombre']}}</p>
                                </div>
                                @foreach ($user as $usuario)
                                  @if($usuario->id == $Cursos['IdUsuario'])  
                                
                                <div class="w-1/2">
                                    <h2 class="text-gray-500">Profesor</h2>
                                    <a href="{{route('showProfile',$usuario->id)}}" class="font-bold text-[rgb(50,5,30)] hover:text-[rgb(150,5,190)]">{{"@".$usuario->name}}</a>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            <div class="w-full md:w-1/2 flex space-x-3">
                                <div class="w-1/2">
                                    <h2 class="text-gray-500">Alumnos Inscritos</h2>
                                    <p class="text-center mr-11">{{$Cursos['Total']}}</p>
                                </div>
                            </div>
                        </div>
                        <a class="mt-3  inline-flex items-center font-bold text-[rgb(50,5,30)] hover:text-[rgb(150,5,190)] " href="{{route('courses.show', $Cursos['Id_Cursos'])}}">Mas Informacion
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                        </a>
                    </div>
                    </div>
                </div>
            </section>
            @endif
            @endforeach
    </section>
    @endauth
            {{-- instancia de la vista error --}}
    @guest
       <!-- component -->
       <br>
       <x-Guest>
      </x-Guest>
    @endguest
</x-app-layout>