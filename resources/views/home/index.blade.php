<x-layout>
    <div class="flex flex-col items-center m-2">
        <h1 class="font-bold text-green-400 text-base lg:text-xl">Welkom op de officiële pagina voor PaarsPop24!</h1>

        <div class="bg-purple-500 rounded-md p-2 m-2 flex flex-col items-center text-green-400 font-bold">
            
            @if ($news)
            <a href="{{route('showCard')}}" class="hover:underline">Er is nieuws van vandaag!</a>
            @else
            <a href="{{route('showCard')}}" class="hover:underline">Nieuws!</a>
            @endif
            <a href="{{route('lineup')}}" class="hover:underline">PaarsPop Programma</a>
        </div>

        <div>
            @if($errors->any())
                <div class="flex justify-center ">
                    <div class="bg-purple-400 p-5 mt-5 rounded-md w-fit flex items-center flex-col">
                        @foreach ($errors->all() as $error)
                            <div class="text-red-500 bg-purple-700 p-2 m-1 rounded-lg">{{$error}}</div>
                        @endforeach
                        <button class="p-1 mt-3 bg-green-400 bg-opacity-90 border font-bold border-black border-solid rounded-md hover:bg-white hover:text-green-500 hover:font-bold hover:scale-105 transition duration-300">
                            <a href="{{route('index')}}">Terug</a>
                        </button>
            
                    </div>
                </div>
            @endif
        </div>  
    </div>
</x-layout>