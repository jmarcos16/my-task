<div>
    <div class="py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">

        <div class="flex justify-between px-1">
            <span class="text-xl font-semibold">My Tasks</span>
            <livewire:tasks.create />
        </div>

        <div class="my-5 overflow-hidden border border-gray-200 rounded-lg shadow-md">
            <table class="w-full text-sm text-left text-gray-500 bg-white border-collapse">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Title</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">State</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Team</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                    </tr>
                </thead>
                <tbody class="border-t border-gray-100 divide-y divide-gray-100">
                    @foreach ($tasks as $task)
                        <tr wire:key="{{ $task->id }}"
                            class="text-gray-900 divide-y hover:bg-gray-50 even:bg-slate-100">

                            <td class="px-6 py-4">{{ $task->title }}</td>
                            <td class="px-6 py-4">
                                {{-- {{ $task->started_at->diffForHumans() }} --}}
                            </td>
                            <td class="px-6 py-4">

                            </td>
                            <td class="px-6 py-4">
                                <livewire:tasks.show :task="$task" :key="$task->id" />
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
