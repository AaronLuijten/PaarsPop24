<x-layout>
    <div class="flex flex-col items-center mt-2">
        <h1 class="font-bold text-green-400">Admin Pagina</h1>
        <div class="bg-purple-500 p-3 rounded-md">
            <h2 class="font-bold text-green-400">Users</h2>
            <table class="border border-black p-2 text-green-400 bg-purple-600">
                <tr class="border border-black p-2 bg-purple-700">
                    <th class="border border-black p-2">Naam</th>
                    <th class="border border-black p-2">email</th>
                    <th class="border border-black p-2">telefoon</th>
                </tr>
                @foreach ($users as $user)
                    <tr class="border border-black p-2">
                        <th class="border border-black p-2">{{$user->first_name}} {{$user->last_name}}</th>
                        <th class="border border-black p-2">{{$user->email}}</th>
                        <th class="border border-black p-2">{{$user->phonenumber}}</th>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</x-layout>