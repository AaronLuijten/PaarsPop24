<x-layout>
@php
    $user = Auth::user()
@endphp
<div class="flex justify-center w-full">
    <div class="w-2/6 bg-purple-500 flex justify-center mt-4 p-2 rounded-2xl">
        <div class="flex-col">
            <h1 class="p-2 text-green-400 rounded-2xl w-fit bg-purple-600 flex"><b>Jouw profiel</b></h1>
            <div class="items-start">
                <h2 class="text-green-400 font-bold mb-2">Gegevens:</h2>
                <div class="bg-purple-700 p-2 rounded-md font-semibold text-green-400 text-lg w-full flex justify-center">
                    
                    <div class="bg-purple-700 p-2 rounded-md font-semibold text-green-400 text-lg w-full mb-4">
                        <p>Naam: </p>
                        <p>Email: </p>
                        <p>Telefoon: </p>
                        <p>Geboortedatum: </p>
                    </div>
                    <div class="bg-purple-700 p-2 rounded-md font-semibold text-green-400 text-lg w-full mb-4">
                        <p>{{$user->first_name}} {{$user->last_name}}</p>
                        <p>{{$user->email}}</p>
                        <p>{{$user->phonenumber}}</p>
                        <p>{{$user->date_of_birth}}</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center">
                <a class="bg-purple-700 rounded-md text-white font-bold mt-2 hover:bg-purple-400 transition duration-150" href="{{route('showacco')}}">mijn Paarspop weekend</a> 
                <button class="p-1 mt-3 bg-green-400 bg-opacity-90 border font-bold border-black border-solid rounded-md text-white"><a href="{{route('editView')}}">aanpassen</a></button> 
            </div>
                     
        </div>
        
    </div>
</div>
</x-layout>
{{-- {{Auth::user()->first_name}}<br> --}}
{{-- {{Auth::user()->last_name}}<br> --}}
{{-- {{Auth::user()->email}}<br> --}}
{{-- {{Auth::user()->phonenumber}}<br> --}}
{{-- {{Auth::user()->date_of_birth}}<br> --}}