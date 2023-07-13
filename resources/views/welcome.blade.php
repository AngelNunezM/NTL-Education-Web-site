<x-app-layout>
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <br>
    <section style="background-image: url({{asset('img/home/Anuncio.jpg')}})" class="bg-cover  rounded-lg  shadow">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 p-[100px]">
        <div class="w-full md:w-3 lg:w-1/2 ">
          <h1 class="text-white font-fold text-3xl">¿Cansado de tener que ir a la escuela para aprender?</h1>
          <p class="text-white text:lg mt-2 mb-2">En NTL puedes aprender lo que sea desde cuelquier parte del mundo</p>
          <a class="bg-[rgb(50,5,30)] p-2 h-max w-max rounded-xl text-white font-semibold hover:bg-white hover:text-black duration-[500ms,800ms] " href="/login" >Vamos alla</a>
       </div>
      </div>
    </section>

    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
      <div class="px-3 md:lg:xl:px-40   border-t border-b py-20 bg-opacity-10" style="background-image: url('https://www.toptal.com/designers/subtlepatterns/uploads/dot-grid.png') ;">
      <div class="text-center pb-12">
          <h2 class="text-base font-bold text-[rgb(50,5,30)] ">
              Estudiantes de todo el mundo nos recomiendan
          </h2>
          <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
              Esto comentan de nosotros
          </h1>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div class="w-full bg-white border-1 rounded-lg p-12 flex flex-col justify-center items-center shadow">
              <div class="mb-8">
                  <img class="object-center object-cover rounded-full h-36 w-36" src="data:image/jpeg;base64,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" >
              </div>
              <div class="text-center">
                  <p class="text-xl text-gray-700 font-bold mb-2">Benito Martinez</p>
                  <p class="text-base text-gray-400 font-normal">Sin duda alguna he tenido una experiencia increible con "NTL".</p>
              </div>
          </div>
          <div class="w-full bg-white border-1 rounded-lg p-12 flex flex-col justify-center items-center shadow">
              <div class="mb-8">
                  <img class="object-center object-cover rounded-full h-36 w-36" src="https://scontent-dfw5-2.xx.fbcdn.net/v/t1.6435-9/79283868_1108680419531437_8627802764598050816_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=19026a&_nc_eui2=AeEW--i0kIzBDdAOkFHK-9W3llO6SMMXXOaWU7pIwxdc5jHa0zn86rTzhOXK54I0czlKyWkOuMHAgreM3lTApCEh&_nc_ohc=cu4HtFeL2wMAX-G3eCl&_nc_ht=scontent-dfw5-2.xx&oh=00_AfAmnoLwaKz6V0sdZ37tqVFqDKCVa6NNuSifuj3_t28NqA&oe=64AA1A3C" alt="photo">
              </div>
              <div class="text-center">
                  <p class="text-xl text-gray-700 font-bold mb-2">Angel Hernandez</p>
                  <p class="text-base text-gray-400 font-normal">Cuentan con docentes calificados, tienen todo lo que buscas.</p>
              </div>
          </div>
          <div class="w-full bg-white border-1 rounded-lg p-12 flex flex-col justify-center items-center shadow">
              <div class="mb-8">
                  <img class="object-center object-cover rounded-full h-36 w-36" src="https://scontent-dfw5-2.xx.fbcdn.net/v/t39.30808-6/296020358_1639150956478907_8668432516166259745_n.jpg?_nc_cat=108&cb=99be929b-59f725be&ccb=1-7&_nc_sid=174925&_nc_eui2=AeHWsmBtXCzo8vgl1ASD08dNRiCNj2hgwytGII2PaGDDK4q5kZdPYEyv1aIf3f5xLQQoA6X3z4_gMaolAaxLax66&_nc_ohc=UjgiCSCKs_sAX_Q2Cyj&_nc_ht=scontent-dfw5-2.xx&oh=00_AfBdeIuksQoxG2DvFo923Z0BU8dPHHEe8qOrIbDmcXgQYA&oe=64A7453B" alt="photo">
              </div>
              <div class="text-center">
                  <p class="text-xl text-gray-700 font-bold mb-2">Ana Viesca</p>
                  <p class="text-base text-gray-400 font-normal">Al principio no me daba confianza, pero despues de probar me quede facinada.</p>
              </div>
          </div>
      </div>
    </section>

    

    <!-- component -->
    <div class="px-3 md:lg:xl:px-40  border-t border-b py-20 bg-opacity-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12" style="background-image: url('https://www.toptal.com/designers/subtlepatterns/uploads/dot-grid.png') ;">
      <div class="grid grid-cols-1 md:lg:xl:grid-cols-3 group bg-white shadow-xl shadow-neutral-100 border ">


          <div
              class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
              <span class="p-5 rounded-full bg-red-500 text-white shadow-lg shadow-red-200"><svg
                      xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor" stroke-width="1.5">
                      <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                  </svg></span>
              <p class="text-xl font-medium text-slate-700 mt-3">Comunidad</p>
              <p class="mt-2 text-sm text-slate-500">Tendras acceso a una gran comunidad, donde podras compartir tus dudas y conocer gente con metas similares a las tuyas.</p>
          </div>

          <div
              class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
              <span class="p-5 rounded-full bg-orange-500 text-white shadow-lg shadow-orange-200"><svg
                      xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor" stroke-width="1.5">
                      <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                      <polyline points="14 2 14 8 20 8"></polyline>
                      <line x1="16" y1="13" x2="8" y2="13"></line>
                      <line x1="16" y1="17" x2="8" y2="17"></line>
                      <polyline points="10 9 9 9 8 9"></polyline>
                  </svg></span>
              <p class="text-xl font-medium text-slate-700 mt-3">Documentacion</p>
              <p class="mt-2 text-sm text-slate-500">Te brindamos documentacion para que puedas analizarla por tu propia cuenta.</p>
          </div>

          <div class="p-10 flex flex-col items-center text-center group   md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
              <span class="p-5 rounded-full bg-yellow-500 text-white shadow-lg shadow-yellow-200"><svg
                      xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor" stroke-width="1.5">
                      <path stroke-linecap="round" stroke-linejoin="round"
                          d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                  </svg></span>
              <p class="text-xl font-medium text-slate-700 mt-3">Comunicacion</p>
              <p class="mt-2 text-sm text-slate-500">Podras comunicarte con nuestro equipo de soporte en caso de algun inconveniente.</p>
          </div>


          <div class="p-10 flex flex-col items-center text-center group   md:lg:xl:border-r hover:bg-slate-50 cursor-pointer">
              <span class="p-5 rounded-full bg-lime-500 text-white shadow-lg shadow-lime-200"><svg
                      xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor" stroke-width="1.5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                  </svg></span>
              <p class="text-xl font-medium text-slate-700 mt-3">Potencia</p>
              <p class="mt-2 text-sm text-slate-500">Sobra decir que podras aumentar tu posibilidades de lograr lo que te propones.</p>
          </div>

          <div class="p-10 flex flex-col items-center text-center group    md:lg:xl:border-r hover:bg-slate-50 cursor-pointer">
              <span class="p-5 rounded-full bg-teal-500 text-white shadow-lg shadow-teal-200"><svg
                      xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor" stroke-width="1.5">
                      <path stroke-linecap="round" stroke-linejoin="round"
                          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                  </svg></span>
              <p class="text-xl font-medium text-slate-700 mt-3">Actividades</p>
              <p class="mt-2 text-sm text-slate-500">Te proporcionaremos actividades para practicar lo que aprendist</p>
          </div>

          <div class="p-10 flex flex-col items-center text-center group     hover:bg-slate-50 cursor-pointer">
              <span class="p-5 rounded-full bg-indigo-500 text-white shadow-lg shadow-indigo-200"><svg
                      xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor" stroke-width="1.5">
                      <path stroke-linecap="round" stroke-linejoin="round"
                          d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                  </svg></span>
              <p class="text-xl font-medium text-slate-700 mt-3">Seguridad</p>
              <p class="mt-2 text-sm text-slate-500">Garantizamos tu aprendizaje con nosotros
              </p>
          </div>




      </div>

      <div class="w-full bg-[rgb(50,5,30)] shadow-xl shadow-indigo-200 py-10 px-20 flex justify-between items-center">
          <p class=" text-white"> <span class="text-4xl font-medium">¿No sabes por donde empezar?</span> <br> <span class="text-lg ">Tranquil@, puedes descargar nuestro manual... </span></p>
          <a  class="px-5 py-3  font-medium text-slate-700 shadow-xl  hover:bg-white duration-150  bg-yellow-400">Descarga Aqui</a>
          

      </div>

    </div>
    </section>
</x-app-layout>

