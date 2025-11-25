<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
   
</head>
<body>
    <section class="w-full min-h-screen bg-gradient-to-br from-light_blue via-blue to-dark_blue py-12">
        <div class="flex flex-col gap-8 justify-center items-center w-full">
            <div class="flex flex-col gap-4 justify-center items-center">
                <h1 class="text-6xl text-white font-bold text-center text-shadow-lg/30">Previsão do Tempo</h1>
                <p class="text-xl sm:text-lg text-white px-4 sm:px-0 text-center">Consulte o clima de qualquer lugar do mundo</p>
            </div>

            <main class="w-full">
                <div class="flex flex-col justify-center items-center gap-24">
                    <div class="flex gap-4 justify-center items-center w-full h-full">
                        <form  method="post" class="w-full h-full flex flex-row gap-4 justify-center items-center">
                            <input type="text" id="search" name="search" placeholder="Pesquisar cidade ou região..." class="w-[50%] h-[3rem] md:w-[40%] md:h-[3.5rem] bg-soft_white text-lg md:text-sm rounded-2xl shadow-lg border-2 border-light_blue placeholder-truncate px-4 md:px-12">
                            <button type="submit" class="w-32 h-14 bg-gradient-to-r from-light_blue via-blue to-medium_blue rounded-2xl text-white text-lg font-semibold shadow-lg cursor-pointer">Buscar</button>
                        </form>
                    </div>
    
                    {{ $slot }}
                    
                </div>
            </main>
        
        </div>
    </section>
                
</body>
</html>