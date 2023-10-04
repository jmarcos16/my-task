<div>
    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="flex justify-between px-1">
            <span class="text-xl font-semibold">My Tasks</span>
            <x-secondary-button wire:click="create">Actions</x-secondary-button>
        </div>

        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md my-5">
            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Title</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">State</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Team</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                    @foreach ($tasks as $task)
                        <tr class="hover:bg-gray-50">
                            <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                                <div class="relative h-10 w-10">
                                    <img class="h-full w-full rounded-full object-cover object-center"
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
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
