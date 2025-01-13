<x-layout>
    <div class="p-2 flex flex-col gap-3  items-center w-dvw">
        @foreach ($importantTasks as $importantTask)
            <div class="py-3 px-6 border border-solid border-green-500 rounded-md w-full md:w-3/4">
                <div>
                    <p class="mb-3 font-medium text-xl">{{ $importantTask->task_name }}</p>
                    <p class="m-0 indent-10 text-justify">{{ $importantTask->task_desc }}</p>
                </div>
                <div class="flex w-100 justify-end gap-x-1">
    

                    <form action="{{ route('tasks.updateCompletedTask', $importantTask->id)}}" method="post">
                        @csrf
                        @method('PUT')

                        <button class="border border-solid py-2 px-4 text-white bg-green-500 rounded-md">Completed</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>