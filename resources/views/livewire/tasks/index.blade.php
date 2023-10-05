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
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Title</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">State</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Team</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                    </tr>
                </thead>
                <tbody class="border-t border-gray-100 divide-y divide-gray-100">
                    @foreach ($tasks as $task)
                        <tr class="hover:bg-gray-50">
                            <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                                <div class="relative w-10 h-10">
                                    <img class="object-cover w-full h-full rounded-full"
                                        src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt="" />
                                </div>
                                <div class="text-sm">
                                    <div class="font-medium text-gray-700">{{ request()->user()->name }}</div>
                                    <div class="text-gray-400">{{ request()->user()->email }}</div>
                                </div>
                            </th>
                            <td class="px-6 py-4">{{ $task->title }}</td>
                            <td class="px-6 py-4">
                                {{ $task->started_at->diffForHumans() }}
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
