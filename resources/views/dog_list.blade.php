<x-guest-layout>

    <div class="container mx-auto">
        <h1 class="mb-8">/dog</h1>

        <table class="text-left w-full">
            <thead class="bg-black flex text-white w-full">
                <tr class="flex w-full mb-4">
                    <th class="p-4 w-1/3">name</th>
                    <th class="p-4 w-1/3">breed</th>
                    <th class="p-4 w-1/3">owner</th>
                </tr>
            </thead>
            <tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full" style="height: 50vh;">
                @foreach($dogs as $dog)
                    <tr class="flex w-full mb-4">
                        <td class="p-4 w-1/3"><a href="./dog/{{$dog->id}}">{{ $dog->name }}</a></td>
                        <td class="p-4 w-1/3">{{ $dog->breed }}</td>
                        <td class="p-4 w-1/3">{{ $dog->owner->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-guest-layout>

