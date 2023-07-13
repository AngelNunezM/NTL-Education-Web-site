<x-app-layout>
    <div class="mx-w 7xl mx-auto sm:px-6 lg:px-8 py-8 ">
        <div class="card">
            <div class="card-body">
                <h1 class="text-2xl font-bold">Crear nuevo curso</h1>
                <hr class="mt-2 mb-6 ">
                <div class="col-span-4 card bg-white shadow-xl ">
                    <div class="card-body text-gray-700 pl-5 pt-2 ">
                        <h1 class="text-2xl font-bold ">Informacion del curso</h1>
                        <hr class="mt-2 mb-6">
                        <form action="{{ route('instructor.courses.store') }}" method="POST" >
                            @csrf
                            <div class="mb-4 pr-4">
                                <label>Titulo del Curso</label>
                                <input required type="text" name="title" class="form-input block w-full mt-1 rounded">
                            </div>
                            <div class="mb-4 pr-4">
                                <label>Subtitulo del Curso</label>
                                <input required type="text" name="subtitle" class="form-input block w-full mt-1 rounded">
                            </div>
                            <div class="mb-4 pr-4">
                                <label>Descripcion del Curso</label>
                                <textarea required type="text" name="description" value="" class="form-input block w-full mt-1 rounded"></textarea>
                            </div>
                            <div class="">
                                <label>Precio del Curso</label>
                                <div class="flex justify-between ">
                                    <select name="price" class="rounded px-8 py-1">
                                        
                                        @foreach ($precios as $precio)
                                        <option required value="{{$precio['Id_Precio']}}" >{{$precio['Valor']}}</option>
                                        @endforeach
                                    </select> 
                                    <input type="text" name="user" hidden value="{{auth()->user()->id}}">
                                    <input type="text" name="status" hidden value="1">
                                    <button class="mr-4 bg-[rgb(50,5,30)] block p-2 p hover:bg-white hover:text-black h-max w-80 sm:w-40 rounded-xl mb-2 text-white font-semibold hover:bg-black duration-[500ms,800ms] text-center mt-3" type="submit" >Guardar</button>
                                </div> 
                            </div>
                            <br>
                        </form>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>