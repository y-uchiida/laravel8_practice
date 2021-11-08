<x-guest-layout>

    <div class="container mx-auto">
        <h1 class="mb-8">/owner</h1>

        <table class="text-left w-full">
            <thead class="bg-black flex text-white w-full">
                <tr class="flex w-full mb-4">
                    <th class="p-4 w-1/2">name</th>
                    <th class="p-4 w-1/2">breed</th>
                    <th class="p-4 w-1/2">owner</th>
                </tr>
            </thead>
            <tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full" style="height: 50vh;">
                @foreach($owners as $owner)
                    <tr class="flex w-full mb-4">
                        <td class="p-4 w-1/2">{{ $owner->id }}</td>
                        <td class="p-4 w-1/2"><a href="./owner/{{$owner->id}}">{{ $owner->name }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-guest-layout>
