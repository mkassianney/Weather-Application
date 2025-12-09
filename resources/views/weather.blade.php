@extends('layouts.main')

    @section('content')
                <div class="flex flex-col justify-center items-center gap-12 w-full min-h-screen bg-gradient-to-br py-12">
                        <div class="flex flex-col justify-center items-center gap-4 bg-white/10 rounded-2xl shadow-lg border border-white/30 w-[80%] h-auto p-8">
                            <h2 class="text-white text-4xl font-bold">{{ $weather['city'] }}</h2>
                            <p class="text-white/50 text-xl">{{ $weather['country'] }}</p>
                            <div class="flex justify-center items-center bg-white/20 rounded-full w-40 h-40">
                                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cloud-icon lucide-cloud">
                                    <path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"/>
                                </svg>
                            </div>
                            <h2 class="text-white text-6xl font-bold">{{ $weather['temp'] }}°</h2>
                            <p class="text-white text-xl">{{ $weather['condition'] }}</p>
                            <div class="grid grid-cols-3">
                                <div class="flex flex-col justify-center items-center gap-4">
                                    <p class="text-white/40 text-sm">Sensação</p>
                                    <p class="text-white text-xl">{{ $weather['feelslike'] }}°</p>
                                </div>
                                <div class="flex justify-center items-center">
                                    <div class="bg-white/20 w-[0.025rem] h-14"></div>
                                </div>

                                <div class="flex flex-col justify-center items-center gap-4">
                                    <p class="text-white/40 text-sm">Máx/Mín</p>
                                    <p class="text-white text-xl">{{ $weather['max_temp'] }}°/{{ $weather['min_temp'] }}°</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-[80%]">
                            <div class="flex justify-between bg-white/10 rounded-2xl border border-white/30 w-full h-auto p-6">
                                <div class="flex flex-col justify-center gap-2">
                                    <p class="text-white/40 text-lg">Umidade</p>
                                    <h2 class="text-white text-3xl">{{ $weather['humidity'] }}%</h2>
                                </div>
                                <div class="flex justify-center items-center bg-white/30 rounded-2xl w-14 h-14">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-droplets-icon lucide-droplets">
                                        <path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/>
                                        <path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/>
                                    </svg>
                                </div>
                            </div>

                            <div class="flex justify-between bg-white/10 rounded-2xl border border-white/30 w-full h-auto p-6">
                                <div class="flex flex-col justify-center gap-2">
                                    <p class="text-white/40 text-lg">Vento</p>
                                    <h2 class="text-white text-3xl">{{ $weather['wind_kph'] }}km</h2>
                                </div>
                                <div class="flex justify-center items-center bg-white/30 rounded-2xl w-14 h-14">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wind-icon lucide-wind">
                                        <path d="M12.8 19.6A2 2 0 1 0 14 16H2"/>
                                        <path d="M17.5 8a2.5 2.5 0 1 1 2 4H2"/>
                                        <path d="M9.8 4.4A2 2 0 1 1 11 8H2"/>
                                    </svg>
                                </div>
                            </div>

                            <div class="flex justify-between bg-white/10 rounded-2xl border border-white/30 w-full h-auto p-6">
                                <div class="flex flex-col justify-center gap-2">
                                    <p class="text-white/40 text-lg">Pressão</p>
                                    <h2 class="text-white text-3xl">{{ $weather['pressure_mb'] }}hPa</h2>
                                </div>
                                <div class="flex justify-center items-center bg-white/30 rounded-2xl w-14 h-14">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gauge-icon lucide-gauge">
                                        <path d="m12 14 4-4"/>
                                        <path d="M3.34 19a10 10 0 1 1 17.32 0"/>
                                    </svg>
                                </div>
                            </div>

                            <div class="flex justify-between bg-white/10 rounded-2xl border border-white/30 w-full h-auto p-6">
                                <div class="flex flex-col justify-center gap-2">
                                    <p class="text-white/40 text-lg">Visibilidade</p>
                                    <h2 class="text-white text-3xl">{{ $weather['vis_km'] }}km</h2>
                                </div>
                                <div class="flex justify-center items-center bg-white/30 rounded-2xl w-14 h-14">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-icon lucide-eye"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>
                                </div>
                            </div>

                            <div class="flex justify-between bg-white/10 rounded-2xl border border-white/30 w-full h-auto p-6">
                                <div class="flex flex-col justify-center gap-2">
                                    <p class="text-white/40 text-lg">Nascer do Sol</p>
                                    <h2 class="text-white text-3xl">{{ $weather['sunrise'] }}</h2>
                                </div>
                                <div class="flex justify-center items-center bg-white/30 rounded-2xl w-14 h-14">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sunrise-icon lucide-sunrise"><path d="M12 2v8"/><path d="m4.93 10.93 1.41 1.41"/><path d="M2 18h2"/><path d="M20 18h2"/>
                                        <path d="m19.07 10.93-1.41 1.41"/>
                                        <path d="M22 22H2"/>
                                        <path d="m8 6 4-4 4 4"/>
                                        <path d="M16 18a4 4 0 0 0-8 0"/>
                                    </svg>
                                </div>
                            </div>

                            <div class="flex justify-between bg-white/10 rounded-2xl border border-white/30 w-full h-auto p-6">
                                <div class="flex flex-col justify-center gap-2">
                                    <p class="text-white/40 text-lg">Pôr do Sol</p>
                                    <h2 class="text-white text-3xl">{{ $weather['sunset'] }}</h2>
                                </div>
                                <div class="flex justify-center items-center bg-white/30 rounded-2xl w-14 h-14">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sunset-icon lucide-sunset"><path d="M12 10V2"/><path d="m4.93 10.93 1.41 1.41"/><path d="M2 18h2"/><path d="M20 18h2"/>
                                        <path d="m19.07 10.93-1.41 1.41"/>
                                        <path d="M22 22H2"/>
                                        <path d="m16 6-4 4-4-4"/>
                                        <path d="M16 18a4 4 0 0 0-8 0"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-items-start">
                            <h2 class="text-white text-3xl font-semibold">Próximos Dias</h2>
                        </div>

                        <div class="grid grid-cols-5 flex-wrap w-[80%] gap-8">
                            <div class="flex flex-col justify-center items-center bg-white/10 rounded-2xl border border-white/30 w-full h-auto p-6 gap-4">
                                <p class="text-white text-lg">16/10/2025</p>
                                <div class="flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sun-icon lucide-sun"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/>
                                        <path d="m17.66 17.66 1.41 1.41"/>
                                        <path d="M2 12h2"/>
                                        <path d="M20 12h2"/>
                                        <path d="m6.34 17.66-1.41 1.41"/>
                                        <path d="m19.07 4.93-1.41 1.41"/>
                                    </svg>
                                </div>
                                <p class="text-white text-2xl font-bold">28°</p>
                                <p class="text-white text-lg">24°</p>
                                <p class="text-white/50 text-sm text-center">Predominantemente ensolarado</p>
                            </div>

                            <div class="flex flex-col justify-center items-center bg-white/10 rounded-2xl border border-white/30 w-full h-auto p-6 gap-4">
                                <p class="text-white text-lg">16/10/2025</p>
                                <div class="flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sun-icon lucide-sun"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/>
                                        <path d="m17.66 17.66 1.41 1.41"/>
                                        <path d="M2 12h2"/>
                                        <path d="M20 12h2"/>
                                        <path d="m6.34 17.66-1.41 1.41"/>
                                        <path d="m19.07 4.93-1.41 1.41"/>
                                    </svg>
                                </div>
                                <p class="text-white text-2xl font-bold">28°</p>
                                <p class="text-white text-lg">24°</p>
                                <p class="text-white/50 text-sm text-center">Predominantemente ensolarado</p>
                            </div>

                            <div class="flex flex-col justify-center items-center bg-white/10 rounded-2xl border border-white/30 w-full h-auto p-6 gap-4">
                                <p class="text-white text-lg">16/10/2025</p>
                                <div class="flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sun-icon lucide-sun"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/>
                                        <path d="m17.66 17.66 1.41 1.41"/>
                                        <path d="M2 12h2"/>
                                        <path d="M20 12h2"/>
                                        <path d="m6.34 17.66-1.41 1.41"/>
                                        <path d="m19.07 4.93-1.41 1.41"/>
                                    </svg>
                                </div>
                                <p class="text-white text-2xl font-bold">28°</p>
                                <p class="text-white text-lg">24°</p>
                                <p class="text-white/50 text-sm text-center">Predominantemente ensolarado</p>
                            </div>

                            <div class="flex flex-col justify-center items-center bg-white/10 rounded-2xl border border-white/30 w-full h-auto p-6 gap-4">
                                <p class="text-white text-lg">16/10/2025</p>
                                <div class="flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sun-icon lucide-sun"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/>
                                        <path d="m17.66 17.66 1.41 1.41"/>
                                        <path d="M2 12h2"/>
                                        <path d="M20 12h2"/>
                                        <path d="m6.34 17.66-1.41 1.41"/>
                                        <path d="m19.07 4.93-1.41 1.41"/>
                                    </svg>
                                </div>
                                <p class="text-white text-2xl font-bold">28°</p>
                                <p class="text-white text-lg">24°</p>
                                <p class="text-white/50 text-sm text-center">Predominantemente ensolarado</p>
                            </div>

                            <div class="flex flex-col justify-center items-center bg-white/10 rounded-2xl border border-white/30 w-full h-auto p-6 gap-4">
                                <p class="text-white text-lg">16/10/2025</p>
                                <div class="flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sun-icon lucide-sun"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/>
                                        <path d="m17.66 17.66 1.41 1.41"/>
                                        <path d="M2 12h2"/>
                                        <path d="M20 12h2"/>
                                        <path d="m6.34 17.66-1.41 1.41"/>
                                        <path d="m19.07 4.93-1.41 1.41"/>
                                    </svg>
                                </div>
                                <p class="text-white text-2xl font-bold">28°</p>
                                <p class="text-white text-lg">24°</p>
                                <p class="text-white/50 text-sm text-center">Predominantemente ensolarado</p>
                            </div>
                        </div>
                    </div>
    @endsection
