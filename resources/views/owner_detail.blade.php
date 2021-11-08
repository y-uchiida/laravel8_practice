<x-guest-layout>

    <div class="container mx-auto">
        <h1>/owner/{{$owner->id}} (detail of {{$owner->name}})</h1>
        <ul>
            <li>id: {{ $owner->id }}</li>
            <li>name: {{ $owner->name }}</li>
            <li>dog: {{ $owner->dog->name }}</li>
        </ul>
    </div>

</x-guest-layout>
