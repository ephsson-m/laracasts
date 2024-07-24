<x-layout>
    <x-slot:heading>
        Tasks
    </x-slot:heading>

    <ul>
        @foreach ($tasks as $task)
        <li>
            <a href="/tasks/{{$task['id']}}">
            task {{$task['taskname']}} must be done until {{$task['duedate']}}
            </a>
        </li>
        @endforeach
    </ul>



</x-layout>