<x-layout>
    <div class="p-2 flex flex-col items-center gap-y-3">
        @foreach ($ongoingTasks as $ongoingTask)
            <div class="py-3 px-6 flex flex-col gap-y-3 border border-solid border-green-500 rounded-md md:w-3/4 lg:w-3/5">
                <div>
                    <p class="mb-3 font-medium text-xl">{{ $ongoingTask->task_name }}</p>
                    <p class="m-0 indent-10 text-justify">{{ $ongoingTask->task_desc }}</p>
                </div>
                <div class="flex w-100 justify-end gap-x-1">
    
                    <form action="{{ route('tasks.updateImportantTask', $ongoingTask->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <button class="border border-solid py-2 px-4 text-white bg-red-500 rounded-md">Important</button>
                    </form>

                    <form action="{{ route('tasks.updateCompletedTask', $ongoingTask->id) }}" method="post">
                        @csrf
                        @method('PUT')


                        <button class="border border-solid py-2 px-4 text-white bg-green-500 rounded-md">Completed</button>
                    </form>
                </div>
                
            </div>
        @endforeach

        
    </div>
</x-layout>