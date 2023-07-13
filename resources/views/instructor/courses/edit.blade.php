<x-instructor-layout>
    
    <h1 class="text-2xl font-bold ">Informacion del curso</h1>
    <hr class="mt-2 mb-6">
    @foreach ($curso as $Curso)
    <form action="{{ route('instructor.courses.update', $Curso['Id_Cursos']) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-4 pr-4">
            <label>Titulo del Curso</label>
            <input type="text" name="title" value="{{$Curso['Titulo']}}" class="form-input block w-full mt-1 rounded">
        </div>
        <div class="mb-4 pr-4">
            <label>Subtitulo del Curso</label>
            <input type="text" name="subtitle" value="{{$Curso['Subtitulo']}}" class="form-input block w-full mt-1 rounded">
        </div>
        <div class="mb-4 pr-4">
            <label>Descripcion del Curso</label>
            <textarea type="text" name="description" class="form-input block w-full mt-1 rounded">{{$Curso['Descripcion']}}</textarea>
        </div>
        <div class="mb-4">
            <label>Precio del Curso</label>
            <div class="flex justify-between">
                <select name="price" class="rounded px-8 py-1">
                    @foreach ($precios as $precio)
                    <option value="{{$precio['Id_Precio']}}">{{$precio['Valor']}}</option>
                    @endforeach
                </select> 
                <button type="submit" class="mr-4 bg-[rgb(50,5,30)] block p-2 p hover:bg-white hover:text-black h-max w-80 sm:w-40 rounded-xl mb-2 text-white font-semibold hover:bg-black duration-[500ms,800ms] text-center mt-3" href="#" >Guardar</button>
            </div> 
        </div>
    </form>
    @endforeach
</x-instructor-layout>