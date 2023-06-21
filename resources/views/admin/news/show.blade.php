<x-layout>
    <div class="flex flex-col items-center m-2">
        <h2 class="text-green-400 font-bold">Nieuws</h2>
        <div class="bg-purple-500 rounded-md p-2">
            <button class="mt-2 p-1 text-green-400 border border-solid border-black bg-purple-600 rounded-md  hover:bg-white hover:text-green-500 hover:font-bold hover:scale-105 transition duration-300 m-2"><a href="{{route('newsCreate')}}">Nieuwe post maken</a></button>
            @foreach ($newsPosts as $news)
                <div class="mb-10">
                    <x-newsCard :news="$news"></x-newsCard>
                </div> 
            @endforeach
        </div>
    </div>
</x-layout>