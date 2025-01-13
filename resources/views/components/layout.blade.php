<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="overflow-x-hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    @vite(['resources/css/app.css'])

   
</head>
<body class="m-0 p-0">
    <header class="flex justify-between items-center py-6 px-10 w-dvw bg-green-500">
        <h3 class="text-white font-bold text-xl hover:cursor-pointer">Todo App</h3>

        <nav>
            <ul class="flex gap-x-3 text-white text-lg font-medium">
                <li>
                    <a href="{{ route('tasks.index') }}" class=" {{ request()->routeIs('tasks.index') ? 'border-b-2 border-solid border-b-white' : '' }}">Tasks</a>
                </li>
                <li>
                    <a href="{{ route('tasks.important') }}" class="{{ request()->routeIs('tasks.important') ? 'border-b-2 border-solid border-b-white' : '' }}">Important</a>
                </li>
                <li>
                    <a href="{{ route('tasks.ongoing') }}" class="{{ request()->routeIs('tasks.ongoing') ? 'border-b-2 border-solid border-b-white' : '' }}">Ongoing</a>
                </li>
                <li>
                    <a href="{{ route('tasks.completed') }}" class="{{ request()->routeIs('tasks.completed') ? 'border-b-2 border-solid border-b-white' : '' }}">Completed</a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="pt-2">
        {{ $slot }}
    </main>
</body>
</html>