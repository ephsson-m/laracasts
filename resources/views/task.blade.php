<x-layout>
    <x-slot:heading>
        {{$task['taskname']}}
    </x-slot:heading>
    <h1>This task has to be done until {{$task['duedate']}}</h1>
</x-layout>