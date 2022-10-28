<style>
    html {
      font-size: 14px;
      line-height: 1.285;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
        Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Arial,
        sans-serif;
    }
</style>

<div class="h-full w-full flex overflow-hidden antialiased text-gray-800 bg-white">
  <nav aria-label="side bar" aria-orientation="vertical" class="flex-none flex flex-col items-center text-center bg-teal-900 text-gray-400 border-r" style="height:99vh">
    <div class="h-16 flex items-center w-full">
      <img class="h-10 w-10 mx-auto" src="{{ asset('img/iconos/2934749.png') }}" />
    </div>

    <ul>
      <li>
        <a title="inicio" href="#inicio" class="h-16 px-6 flex items-center text-white bg-teal-700 w-full bg-success bg-opacity-10 mt-5">
          <i class="mx-auto">
          <img class="h-10 w-10 mx-auto" src="{{ asset('img/iconos/3487393.png') }}" />
          </i>
        </a>
      </li>
      <li>
        <a title="Catalogos" href="{{route('catalogos')}}" class="h-16 px-6 flex items-center hover:text-white w-full">
          <i class="mx-auto">
        
          <img class="h-10 w-10 mx-auto" src="{{ asset('img/iconos/7129216.png') }}" />

          </i>
        </a>
      </li>
      <li>
        <a title="Customer Lists" href="#customer-lists" class="h-16 px-6 flex items-center hover:text-white w-full bg-success bg-opacity-10 my-2">
          <i class="mx-auto">
       
          <img class="h-10 w-10 mx-auto" src="{{ asset('img/iconos/2809789.png') }}" />

          </i>
        </a>
      </li>
      <li>
        <a title="Reporting" href="#reporting" class="h-16 px-6 flex items-center hover:text-white w-full ">
          <i class="mx-auto">
          <img class="h-10 w-10 mx-auto" src="{{ asset('img/iconos/5584220.png') }}" />
          </i>
        </a>
      </li>
      <li>
        <a title="Admin" href="#admin" class="h-16 px-6 flex items-center hover:text-white w-full bg-success bg-opacity-10 my-2">
          <i class="mx-auto">
          <img class="h-10 w-10 mx-auto" src="{{ asset('img/iconos/7925212.png') }}" />
          </i>
        </a>
      </li>
    </ul>

    <div class="mt-auto h-16 flex items-center w-full">
      <i class="mx-auto">
        <svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path d="M24 13.616v-3.232c-1.651-.587-2.694-.752-3.219-2.019v-.001c-.527-1.271.1-2.134.847-3.707l-2.285-2.285c-1.561.742-2.433 1.375-3.707.847h-.001c-1.269-.526-1.435-1.576-2.019-3.219h-3.232c-.582 1.635-.749 2.692-2.019 3.219h-.001c-1.271.528-2.132-.098-3.707-.847l-2.285 2.285c.745 1.568 1.375 2.434.847 3.707-.527 1.271-1.584 1.438-3.219 2.02v3.232c1.632.58 2.692.749 3.219 2.019.53 1.282-.114 2.166-.847 3.707l2.285 2.286c1.562-.743 2.434-1.375 3.707-.847h.001c1.27.526 1.436 1.579 2.019 3.219h3.232c.582-1.636.75-2.69 2.027-3.222h.001c1.262-.524 2.12.101 3.698.851l2.285-2.286c-.744-1.563-1.375-2.433-.848-3.706.527-1.271 1.588-1.44 3.221-2.021zm-12 2.384c-2.209 0-4-1.791-4-4s1.791-4 4-4 4 1.791 4 4-1.791 4-4 4z" />
        </svg>
      </i>
    </div>
  </nav>

  <div class="flex-1 flex flex-col">
    <!-- section body top nav -->
    <nav aria-label="top bar" class="flex-none flex justify-between bg-white h-16">
      <!-- top bar left -->
      <ul aria-label="top bar left" aria-orientation="horizontal" class="flex">
        <!-- add button -->
        <li class="group relative ">
          <button  class="flex items-center h-full px-4 text-sm mt-3">
          
           <p class="h4"> <span class="ml-2">Veterinaria <i>La Mascota</i></span></p>
          </button>
          
        </li>
      </ul>

      <!-- to bar right  -->
      <ul aria-label="top bar right" aria-orientation="horizontal" class="px-8 flex items-center me-4">
       

        <li class="h-8 w-8 ml-3 mt-3">
          <button title="Notifications" aria-label="notifications" class="w-full h-full text-white bg-gray-600 rounded-md focus:outline-none focus:shadow-outline">
            <i>
              <svg class="fill-current w-4 h-4 mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.137 3.945c-.644-.374-1.042-1.07-1.041-1.82v-.003c.001-1.172-.938-2.122-2.096-2.122s-2.097.95-2.097 2.122v.003c.001.751-.396 1.446-1.041 1.82-4.667 2.712-1.985 11.715-6.862 13.306v1.749h20v-1.749c-4.877-1.591-2.195-10.594-6.863-13.306zm-3.137-2.945c.552 0 1 .449 1 1 0 .552-.448 1-1 1s-1-.448-1-1c0-.551.448-1 1-1zm3 20c0 1.598-1.392 3-2.971 3s-3.029-1.402-3.029-3h6z" />
              </svg>
            </i>
          </button>
        </li>
        <li class="h-8 w-8 ml-3 mt-3">
          <button title="Notifications" aria-label="notifications" class="w-full h-full text-white bg-gray-600 rounded-md focus:outline-none focus:shadow-outline">
            <i>
              <svg class="fill-current w-4 h-4 mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.137 3.945c-.644-.374-1.042-1.07-1.041-1.82v-.003c.001-1.172-.938-2.122-2.096-2.122s-2.097.95-2.097 2.122v.003c.001.751-.396 1.446-1.041 1.82-4.667 2.712-1.985 11.715-6.862 13.306v1.749h20v-1.749c-4.877-1.591-2.195-10.594-6.863-13.306zm-3.137-2.945c.552 0 1 .449 1 1 0 .552-.448 1-1 1s-1-.448-1-1c0-.551.448-1 1-1zm3 20c0 1.598-1.392 3-2.971 3s-3.029-1.402-3.029-3h6z" />
              </svg>
            </i>
          </button>
        </li>
      </ul>
    </nav>

   

    <div style="width:150px; bottom:12px; right:12px;position:absolute; z-index:5">
      <img src="{{ asset('img/lateral.png') }}" alt="Imagen">
    </div>
    <!-- main content -->
    
    