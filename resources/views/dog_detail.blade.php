<x-guest-layout>

    <div class="container mx-auto">
        <h1>/dog/{{$dog->id}} (detail of {{$dog->name}})</h1>
        <ul>
            <li>id: {{ $dog->id }}</li>
            <li>name: {{ $dog->name }}</li>
            <li>breed: {{ $dog->breed }}</li>
            <li>weight: {{ $dog->weight }}</li>
            <li>owner: {{ $dog->owner->name }}(owner_id: {{ $dog->owner->id }})</li>
        </ul>

    </div>
</x-guest-layout>
