@extends('layouts.app')
@section('title', 'I.Mohamed - Portfolio')

@section('content')
    <div class="grid grid-cols-2 gap-4 h-screen">
        <div class="flex justify-center items-center flex-col">
            <h1 class="text-6xl text-center">Hoi! Ik ben <br>Ilyas Mohamed</h1>
            <div class="space-x-4 mt-10">

                <a href="mailto:d206947@edu.curio.nl"
                    class="rounded-md px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-indigo-600 text-indigo-600">
                    Contact</span>
                </a>

                <a href="/projecten"
                    class="relative px-10 py-3 font-medium text-white transition duration-300 bg-gradient-to-br from-purple-600 to-blue-500 rounded-md ease">
                    <span class="absolute bottom-0 left-0 h-full -ml-2">
                        <svg viewBox="0 0 487 487" class="w-auto h-full opacity-100 object-stretch"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 .3c67 2.1 134.1 4.3 186.3 37 52.2 32.7 89.6 95.8 112.8 150.6 23.2 54.8 32.3 101.4 61.2 149.9 28.9 48.4 77.7 98.8 126.4 149.2H0V.3z"
                                fill="#FFF" fill-rule="nonzero" fill-opacity=".1"></path>
                        </svg>
                    </span>
                    <span class="absolute top-0 right-0 w-12 h-full -mr-3">
                        <svg viewBox="0 0 487 487" class="object-cover w-full h-full" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M487 486.7c-66.1-3.6-132.3-7.3-186.3-37s-95.9-85.3-126.2-137.2c-30.4-51.8-49.3-99.9-76.5-151.4C70.9 109.6 35.6 54.8.3 0H487v486.7z"
                                fill="#FFF" fill-rule="nonzero" fill-opacity=".1"></path>
                        </svg>
                    </span>
                    <span class="relativ">Projecten</span>
                </a>
            </div>
        </div>
        <div class="flex justify-end items-center">
            <img class="block max-w-full" src="assets/avatar/profile.jpg" alt="profile-foto">
        </div>
    </div>
    <div class="px-20 text-center">
        <h1>About me</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde eveniet officiis, quidem voluptatibus totam, numquam facere doloribus error fugit nisi temporibus earum magnam. Commodi ab voluptatum,... <a class="text-blue-600 hover:underline" href="/about-me">read more</a></p>
    </div>
    <div class="text-center my-20 pb-10">
        <h1>Projecten</h1>
        <div class="grid grid-cols-2 gap-4 p-10 relative mt-44 mb-20">
            <div class="h-72 px-10 text-left border-2">
                <h1>Title</h1>
                <p class="w-[30rem]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim quaerat possimus inventore magnam alias laboriosam facilis maiores adipisci aliquid? Provident aspernatur nostrum consequatur, placeat perferendis esse quia iure, adipisci sed reprehenderit delectus? Doloribus, aspernatur non consequuntur magnam voluptate, corporis quaerat itaque veritatis suscipit laudantium ipsam vel dolores eum odio sit!</p>
            </div>
            <div class="bg-slate-400 h-96 w-[590px] absolute top-50 bottom-[30%] right-[10%] z-10"></div>
        </div>
        
        <a href="/projecten" class="rounded-md px-3.5 py-2 m-1 cursor-pointer border-2 font-medium border-indigo-600 text-indigo-600">Meer projecten</a>
    </div>
@endsection