<x-layout>
    <div class="flex flex-col items-center">
        <h2 class="font-bold text-green-400">Programma</h2>
        <div class="flex items-row justify-start">
            <button id='btn_sat' class="bg-purple-500 border-x-2 border-t-2 border-b-0 border-green-400 p-2 rounded-t-md  text-green-400 hover:pb-5 hover:bg-purple-400 hover:font-bold" onclick="changeTab('zaterdag')">Zaterdag</button>
            <button id='btn_sun' class="bg-purple-500 border-x-2 border-t-2 border-b-0 border-green-400 p-2 rounded-t-md  text-green-400 hover:pb-5 hover:bg-purple-400 hover:font-bold" onclick="changeTab('zondag')">Zondag</button>
            <script>
                function changeTab($day)
                {
                    var tab_sat = document.getElementById('tab_sat');
                    var tab_sun = document.getElementById('tab_sun');
                    var btn_sat = document.getElementById('btn_sat');
                    var btn_sun = document.getElementById('btn_sun');
                    
                    if($day == 'zaterdag')
                    {
                        tab_sat.style.display = 'block';
                        tab_sun.style.display = 'none';

                        btn_sat.style.background = 'rgb(147, 51, 234)';
                        btn_sun.style.background = 'rgb(168, 85, 247)';
                        
                    }
                    else if($day == 'zondag')
                    {
                        tab_sun.style.display = 'block';
                        tab_sat.style.display = 'none';
                        btn_sun.style.background = 'rgb(147, 51, 234)';
                        btn_sat.style.background = 'rgb(168, 85, 247)';
                    }
                }

                function displayOnLoad()
                {
                    var tab_sat = document.getElementById('tab_sat');
                    var tab_sun = document.getElementById('tab_sun');

                    tab_sat.style.display = 'block';
                    tab_sun.style.display = 'none';

                    btn_sat.style.background = 'rgb(147, 51, 234)';
                    btn_sun.style.background = 'rgb(168, 85, 247)';
                }

                window.addEventListener('load', displayOnLoad)
            </script>
        </div>
            <div class="bg-purple-500 rounded-md p-2 mx-1 mb-4">
                @php
                    $style_table = "border border-black bg-purple-600 text-green-400 text-sm lg:text-xl"
                @endphp
                <table class="{{$style_table}}" id="tab_sat">
                    <tr class="{{$style_table}}">
                        <th class="border border-black bg-purple-700 font-bold text-sm lg:text-xl">Zaterdag</th>
                        <th class="border border-black bg-purple-700 font-bold text-sm lg:text-xl">programma</th>
                        <th class="border border-black bg-purple-700 font-bold text-sm lg:text-xl">waar</th>
                        <th class="border border-black bg-purple-700 font-bold text-sm lg:text-xl">Food / Drinks</th>
                        <th class="border border-black bg-purple-700 font-bold text-sm lg:text-xl">Snacks tent</th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">09:00</th>
                        <th class="{{$style_table}}">Opbouwen</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">10:00</th>
                        <th class="{{$style_table}}">Opbouwen</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">11:00</th>
                        <th class="{{$style_table}}">Opbouwen</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">12:00</th>
                        <th class="{{$style_table}}">Camping open</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}">Bar open</th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">13:00</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th>14:00</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">15:00</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">16:00</th>
                        <th class="{{$style_table}}">S4U</th>
                        <th class="{{$style_table}}">Main Stage</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">17:00</th>
                        <th class="{{$style_table}}">S4U</th>
                        <th class="{{$style_table}}">Main Stage</th>
                        <th class="{{$style_table}}">Food Chinees</th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">18:00</th>
                        <th class="{{$style_table}}">Thijs den Boer</th>
                        <th class="{{$style_table}}">Lounge Zone</th>
                        <th class="{{$style_table}}">Food Chinees</th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">19:00</th>
                        <th class="{{$style_table}}">No Shoes</th>
                        <th class="{{$style_table}}">Main Stage</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">20:00</th>
                        <th class="{{$style_table}}">No Shoes</th>
                        <th class="{{$style_table}}">Main Stage</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">21:00</th>
                        <th class="{{$style_table}}">Jack-ass Karaoke</th>
                        <th class="{{$style_table}}">Lounge Zone</th>
                        <th class="{{$style_table}}">snacks</th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">22:00</th>
                        <th class="{{$style_table}}">Camping DJ's vrije set Karel</th>
                        <th class="{{$style_table}}">Lounge Zone</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">23:00</th>
                        <th class="{{$style_table}}"><a href="https://www.45miles.nl/" class="hover:bg-purple-500" target="_blank">45 Miles</a></th>
                        <th class="{{$style_table}}">Main Stage</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">00:00</th>
                        <th class="{{$style_table}}"><a href="https://www.45miles.nl/" class="hover:bg-purple-500" target="_blank">45 Miles</th></a>
                        <th class="{{$style_table}}">Main Stage</th>
                        <th class="{{$style_table}}">chips</th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">01:00</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">02:00</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}">Bar dicht</th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                </table>

                <table class="{{$style_table}}" id="tab_sun">
                    <tr class="{{$style_table}}">
                        <th class="border border-black bg-purple-700 font-bold text-sm lg:text-xl">Zondag</th>
                        <th class="border border-black bg-purple-700 font-bold text-sm lg:text-xl">programma</th>
                        <th class="border border-black bg-purple-700 font-bold text-sm lg:text-xl">waar</th>
                        <th class="border border-black bg-purple-700 font-bold text-sm lg:text-xl">Food / Drinks</th>
                        <th class="border border-black bg-purple-700 font-bold text-sm lg:text-xl">Snacks tent</th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">09:00</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">10:00</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}">Bar open</th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">11:00</th>
                        <th class="{{$style_table}}">Barrel covers</th>
                        <th class="{{$style_table}}">Lounge Zone</th>
                        <th class="{{$style_table}}">Pannekoeken</th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">12:00</th>
                        <th class="{{$style_table}}">Barrel covers</th>
                        <th class="{{$style_table}}">Lounge Zone</th>
                        <th class="{{$style_table}}">Pannekoeken</th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">13:00</th>
                        <th class="{{$style_table}}">Devrn</th>
                        <th class="{{$style_table}}">Main Stage</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">14:00</th>
                        <th class="{{$style_table}}">Devrn</th>
                        <th class="{{$style_table}}">Main Stage</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">15:00</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}">Food? Litooij HB</th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">16:00</th>
                        <th class="{{$style_table}}">De manne van de straat</th>
                        <th class="{{$style_table}}">Main Stage</th>
                        <th class="{{$style_table}}">Food? Litooij HB</th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">17:00</th>
                        <th class="{{$style_table}}">De manne van de straat</th>
                        <th class="{{$style_table}}">Main Stage</th>
                        <th class="{{$style_table}}">Food? Litooij HB</th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">18:00</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}">Bar dicht</th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">19:00</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">20:00</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">21:00</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">22:00</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}">Camping dicht</th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">23:00</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">00:00</th>
                        <th class="{{$style_table}}"></a>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">01:00</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                    <tr class="{{$style_table}}">
                        <th class="{{$style_table}}">02:00</th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                        <th class="{{$style_table}}"></th>
                    </tr>
                </table>
            </div>
    </div>
</x-layout>