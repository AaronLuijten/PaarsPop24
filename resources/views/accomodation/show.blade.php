<x-layout>
    @if (Auth::user()->accomodation)
        @php
        $accomodation = Auth::user()->accomodation  
        @endphp
        <div class="flex justify-center">
            <div class="bg-purple-600 flex items-center flex-col mt-5 rounded-md shadow-2xl w-fit p-3">
                <h2 class="text-green-400 font-bold mb-5">Je weekend bij Paarspop</h2>
                <div class="flex items-start flex-col">
                    <h2 class="text-green-400 font-bold mb-2">Gegevens:</h2>
                    <div class="bg-purple-700 p-2 rounded-md font-semibold text-green-400 text-lg w-full mb-4">
                        
                        <p>Naam: {{Auth::user()->first_name}} {{Auth::user()->last_name}} </p>
                        <p>Email: {{Auth::user()->email}}</p>
                        <p>Telefoon nummer: {{Auth::user()->phonenumber ?? 'Geen nummer gevonden'}}</p>
                    </div>
                    <h2 class="text-green-400 font-bold mb-2">Reservering: </h2>
                    <div class="bg-purple-700 p-2 rounded-md font-semibold text-green-400 text-lg w-full flex justify-center">
                        <div>
                            <p>Aanwezig: </p>
                            @if($accomodation->presence != 0)
                            <p>Blijf je slapen: </p>
                            @if($accomodation->stay_over == 1)
                            <p>Waarmee blijf je slapen: </p>
                            <p>breedte {{$accomodation->accomodation_type ?? 'verblijf'}}: </p>
                            <p>lengte {{$accomodation->accomodation_type ?? 'verblijf'}}: </p>
                            @endif
                            <p>Wanneer ben je er: </p>
                            <p>Met hoeveel ben je:</p>
                            <p>Blijf je zaterdag avond eten: </p>
                            <p>Blijf je zondag ochtend eten: </p>
                            <p>Blijf je zondag avond eten: </p>
                            @endif
                        </div>
                        <div class="ml-5">
                            @if($accomodation->presence == 1)<p>{{"Ja"}}@else<p>{{"Nee"}}@endif </p>
                            @if ($accomodation->presence != 0)
                                @if($accomodation->stay_over == 1)<p>{{"Ja"}}@else<p>{{"Nee"}}@endif</p>
                                @if($accomodation->stay_over == 1)
                                <p>{{$accomodation->accomodation_type}}</p>
                                <p>{{$accomodation->accomodation_width}}</p>
                                <p>{{$accomodation->accomodation_length}}</p>
                                @endif
                                <p>@if ($accomodation->number_of_guests_weekend >= 1) {{"Het hele weekend"}}
                                                        @else @if($accomodation->number_of_guest_sat >= 1) {{"Alleen zaterdag"}}
                                                        @else @if($accomodation->number_of_guest_sun >= 1) {{"Alleen zondag"}}
                                                        @endif @endif @endif</p>
                                <p>@if ($accomodation->number_of_guests_weekend >= 1) {{$accomodation->number_of_guests_weekend}} 
                                                        @else @if($accomodation->number_of_guest_sat >= 1) {{$accomodation->number_of_guest_sat}} 
                                                        @else @if($accomodation->number_of_guest_sun >= 1) {{$accomodation->number_of_guest_sun}}
                                                        @endif @endif @endif mensen</p>
                                <p>@if($accomodation->dinner_sat == 1){{"Ja"}}@else{{"Nee"}}@endif</p>
                                <p>@if($accomodation->brunch_sun == 1){{"Ja"}}@else{{"Nee"}}@endif</p>
                                <p>@if($accomodation->dinner_sun == 1){{"Ja"}}@else{{"Nee"}}@endif</p>
                            @endif
                        </div>
                            
                        
                    </div>
                    <button class="p-1 mt-3 bg-green-400 bg-opacity-90 border font-bold border-black border-solid rounded-md"><a href="{{route('edit', [$accomodation->id])}}">wijzigen</a></button>
                </div>
            </div>
    @else
    <div class="flex justify-center">
        <div class="bg-purple-400 flex items-center flex-col mt-5 rounded-md w-fit p-3">
            <div class="text-green-400 font-bold bg-gray-500 p-2 rounded-md bg-opacity-50 flex flex-col items-center" role="alert">
                <h2>Je hebt je verblijf voor dit weekend nog niet doorgegeven</h2>
                <p>We willen je vragen dat even <a href="{{route('create')}}" class="hover:underline">hier</a> te doen.</p>
            </div>
        </div>
    </div>
    @endif
    
    </div>
</x-layout>