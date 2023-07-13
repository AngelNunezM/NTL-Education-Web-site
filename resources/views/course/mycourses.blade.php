<x-app-layout>
<div class="flex justify-start ">
    @foreach ($cursosUsuario as $miCurso)
                @foreach ($data as $item)
                @if($miCurso == $item['Id_Cursos'])
    <div class="flex justify-center text-center sm:block " >
        
        <div class="bg-white hover:border transition-opacity bg-opacity-75 "></div>
          <div class="items-center mr-2 ml-auto relative max-w-7xl md:px-12 lg:px-24">
            <div class="grid grid-cols-1">
              <div class="mt-5 mb-4 ml-auto bg-white w-80 rounded-lg">
                
                    
               
               
                <div class="flex flex-col hover:shadow-xl items-center pt-6 pr-6 pb-6 pl-6">
                  <img
                      src="https://firebasestorage.googleapis.com/v0/b/thecaffeinecode.appspot.com/o/Tcc_img%2Flogo.png?alt=media&token=5e5738c4-8ffd-44f9-b47a-57d07e0b7939" class="flex-shrink-0 object-cover object-center bg-white btn- border flex w-16 h-16 mr-auto -mb-8 ml-auto rounded-full shadow-xl">
                  <p class="mt-8 text-2xl font-semibold leading-none text-black tracking-tighter lg:text-3xl">{{$item['Titulo']}}</p>
                  <p class="mt-3 text-base leading-relaxed text-center text-black">{{$item['Subtitulo']}}</p>
                  <div class="w-full mt-6">
                    <a class="flex text-center items-center justify-center w-full pt-4 pr-10 pb-4 pl-10 text-base
                        font-medium text-white bg-[rgb(50,5,30)] rounded-xl transition duration-500 ease-in-out transform
                        hover:bg-white hover:text-black hover:border-2  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{route('courses.show', $item['Id_Cursos'])}}">Ver curso</a>
                  </div>
                </div>
                
              </div>
            </div>
          
        </div>
       
      </div>
      @endif
      @endforeach
      @endforeach
      
</div>
</x-app-layout>