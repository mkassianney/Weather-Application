
        <div class="flex flex-col justify-center items-center w-full">

             {{-- <-- ESTA DIV FALTAVA FECHAR --}}

            @if($activeComponent === 'index')
                @include('index')
            @elseif($activeComponent === 'weather')
                @include('weather')
            @endif

        </div>
