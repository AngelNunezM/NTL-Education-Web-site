<div >
    <div x-data="{open:false}" class=" flex flex-wrap justify-center relative max-w-md mx-auto md:max-w-2xl mt-2 min-w-0 break-words w-full mb-6 rounded-xl mt-2">
        <a x-on:click="open = !open" class=" bg-[rgb(50,5,30)] block p-2 p hover:bg-white hover:text-black h-max w-80 rounded-xl mb-2 text-white font-semibold hover:bg-black duration-[500ms,800ms] text-center" href="#" >Ver cursos</a>
    <!-- component -->
<div x-show="open">
    @foreach ($course as $curso) 
    @if($curso['IdUsuario'] == $user)
    <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
    <div class="flex justify-center md:justify-end -mt-16">
        <img class="w-20 h-20 bg-white object-cover rounded-full border-2 border-black" src="https://firebasestorage.googleapis.com/v0/b/thecaffeinecode.appspot.com/o/Tcc_img%2Flogo.png?alt=media&token=5e5738c4-8ffd-44f9-b47a-57d07e0b7939">
    </div>
    <div>
        <h2 class="text-gray-800 text-3xl font-semibold" >{{$curso['Titulo']}}</h2>
        <p class="mt-2 text-gray-600">{{$curso['Subtitulo']}}</p>
    </div>
    <div class="flex justify-between mt-4" id="cursito">
        <p class="mt-3  inline-flex items-center font-bold ">{{$curso['Nombre']}}</p>
        <a class="mt-3  inline-flex items-center font-bold text-[rgb(50,5,30)] hover:text-[rgb(150,5,190)]" href="{{route('courses.show', $curso['Id_Cursos'])}}">Mas informacion <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg></a>
        
    </div>
    
    </div>
    @endif
    @endforeach
</div>
</div>
