<x-app-layout>
    <br>
@auth
<section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 border shadow">
    @foreach ($data as $Cursos)
<section class="bg-[rgb(0,0,0)] py-12 rounded-lg mt-5 mb-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 ">
        <figure>
            <img src="https://2.bp.blogspot.com/-eXwVHV7P_30/XDQIbR_2-yI/AAAAAAAAdCE/4hOAw2cARlUdkxTe3cV7NZnlOmSWuWYfwCLcBGAs/s1600/liderazgo%2Beducativo%2Bcurso%2Bonline%2Bgratis.jpg" class="ml-3 h-50 w-full object-cover rounded-lg max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" alt="">
        </figure>
       
        <div class="text-white ml-5">
            <h1 class="text-4xl">📕 {{$Cursos['Titulo']}}</h1>
            <h2 class="text-xl mb-3">{{$Cursos['Subtitulo']}}</h2>
            
        </div>
        
        
    </div>
</section>
<section class="max-w-7xl mx-auto px-0 sm:px-0 lg:px-0">
    <div class="grid grid-cols-3 gap-6">
        <div class="col-span-2 mb-12">
            <section class="bg-gray-200 py-4 mb-12 ">
                <div>
                    <h1 class="font-bold text-2xl ml-5 mb-2 max-w-7xl mx-auto px-0 sm:px-0 lg:px-0">Lo que aprenderas:</h1>
                    <ul class="grid grid-cols-2 gap-x-6 gap-y-2 ml-6">
                        {{-- foreache para las competencias --}}
                        @foreach ($responseCompetencias as $competencia)
                        @if ($competencia['IdCurso'] == $Cursos['Id_Cursos'])
                            <li class="text-gray-700 text-base ">✅ {{$competencia['Nombre']}}</li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </section>
            <section  class="mb-8">
                <h1 class="font-bold text-2xl ml-5 mb-2">Contenido:</h1>

                {{-- foreach para las secciones --}}
                @foreach ($responseDetalles as $secciones)
                @if ($secciones['IdCurso'] == $Cursos['Id_Cursos'])
                <article class="mb-4 shadow" x-data="{ open: false}">
                    <header class="border border-gray-200 px-4 py-2 cursor-pointer color-gray-200" x-on:click="open = !open">
                        <h1 class="font-bold text-lg text-gray-400">{{$secciones['Nombre']}}</h1>
                    </header>
                    <div class="bg-white py-2 px-4" x-show="open">
                        <ul>
                            @foreach ($responseLecciones as $lecciones)
                            @if ($lecciones['Id_Secciones'] == $secciones['Id_Secciones'])
                            {{-- foreach para las lecciones --}}
                            <li class="text-gray-700 text-base mb-1 ">▶ {{$lecciones['Nombre']}}</li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </article>
                @endif
                @endforeach
                
            </section>
            <section  class="mb-8">
                <h1 class="font-bold text-2xl ml-5 mb-2">Requisitos:</h1>
                
                <ul>
                    {{-- foreach requisitos --}}
                    @foreach($responseRequerimientos as $requisitos)
                    @if($requisitos['IdCurso'] == $Cursos['Id_Cursos'])
                    <li class="text-gray-700 text-base ml-5">📌 {{$requisitos['Nombre']}}</li>
                    @endif
                    @endforeach
                </ul>
            </section>
            <section>
                <h1 class="font-bold text-2xl ml-5 mb-2">Descripcion:</h1>
                <div class="text-gray-700 text-base ml-5">{{$Cursos['Descripcion']}}</div>
            </section>
        </div>
        <div>
            <section class="card">
                <div class="r">
                    <div class="border rounded-lg mb-2 max-w-7xl mx-auto px-0 sm:px-6 lg:px-3 shadow">
                        @if($responseCursoUsuario)
                            <a class="bg-[rgb(50,5,30)] block p-2 p hover:bg-white hover:text-black h-max w-80 rounded-xl mb-2 text-white font-semibold hover:bg-black duration-[500ms,800ms] text-center mt-3" href="{{route('courses.status', $Cursos['Id_Cursos'])}}" >Continuar curso</a>
                        @else
                        <p class=" mt-1 text-center ml-3 mb-2 max-w-7xl mx-auto px-0 sm:px-0 lg:px-0 text-xl">{{$Cursos['Valor']}} <span class=" text-sm text-red-600 line-through">$79.99 USD</span></p>
                             <form action="{{route('courses.enrolled', $Cursos['Id_Cursos'])}}" method="post">
                                @csrf
                                <input type="text" name="course" hidden value="{{$Cursos['Id_Cursos']}}">
                                <input type="text" name="user" hidden value="{{auth()->user()->id}}">
                                <button class="bg-[rgb(50,5,30)] p-2 hover:bg-white hover:text-black h-max w-80 rounded-xl mb-2 text-white font-semibold hover:bg-black duration-[500ms,800ms]" >Adquirir Curso</button>
                            </form>
                        @endif
                       
                       

                        <div class="mb-2">
                            <p class="max-w-7xl mx-auto px-0 sm:px-0 lg:px-0 font-bold">Detalles del curso:</p>
                            <p class=" max-w-7xl mx-auto px-0 sm:px-0 lg:px-0">👨‍👦‍👦 Estudiantes inscritos</p>
                            <p class=" max-w-7xl mx-auto px-0 sm:px-0 lg:px-0">👨🏻‍🏫 Creado por:<a href="{{route('showProfile',$Cursos['IdUsuario'])}}" class="font-bold text-[rgb(50,5,30)] hover:text-[rgb(150,5,190)] "> {{"@".$Cursos['Nombre']}}</a></p>
                        </div>
                        
                    </div>
                    
                </div>
            </section>
        </div>
    </div>

@endforeach
</section>
@endauth
{{-- Instancia de la vista error --}}
@guest
<!-- component -->
<br>
<x-Guest>
</x-Guest>

@endguest
</x-app-layout>