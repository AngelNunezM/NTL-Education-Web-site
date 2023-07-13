<x-app-layout>
    <br class="mt-3">
    <br class="mt-3">
    @auth
    @foreach ($perfil as $profile)
<div class="relative max-w-md mx-auto md:max-w-2xl mt-6 min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-xl mt-8">
    <div class="px-6">
        <div class="flex flex-wrap justify-center">
            <div class="w-full flex justify-center">
                <div class="relative">
                    <img src="{{$profile['photoPerfil']}}" class=" object-cover shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]"/>
                </div>
            </div>
            
            <div class="w-full text-center mt-20">
                <div class="flex justify-center lg:pt-4 pt-8 pb-0">
                    <div class="p-3 text-center">
                        <span class="text-sm text-slate-400">Cursos Impartidos</span>
                        <span class="text-xl font-bold block uppercase tracking-wide text-slate-700">{{$cursosTotales}}</span>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-2">
            <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">{{$profile['Titulo']}}</h3>
        </div>
        <div class="mt-6 py-6 border-t border-slate-200 text-center">
            <div class="flex flex-wrap justify-center">
                <div class="w-full px-4">
                    <p class="font-light leading-relaxed text-slate-600 mb-4">{{$profile['Bibliografia']}}</p>
                </div>
            </div>
        </div>
        
    </div>
</div>


<div class=" flex flex-wrap justify-center relative max-w-md mx-auto md:max-w-2xl mt-6 min-w-0 break-words w-full mb-6 rounded-xl mt-2">
    @livewire('usuarios.cursos-post', ['user' => $profile['IdUsuario']])
</div> 
@endforeach




@endauth
 
@guest
<!-- 
<footer class="relative pt-6 pb-2 mt-6">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap items-center md:justify-between justify-center">
            <div class="w-full md:w-6/12 px-4 mx-auto text-center">
            <div class="text-sm text-slate-500 font-semibold py-1">
                Tailwind CSS Component from <a href="https://www.creative-tim.com/product/notus-design-system-pro?ref=tailwindcomponents" class="text-slate-700 hover:text-slate-500" target="_blank">Notus PRO Html</a> by <a href="https://www.creative-tim.com" class="text-slate-700 hover:text-slate-500" target="_blank"> Creative Tim</a>.
            </div>
            </div>
        </div>
    </div>
</footer> -->
<br>
<x-Guest>
</x-Guest>
@endguest
</x-app-layout>