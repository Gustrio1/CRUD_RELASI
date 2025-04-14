<x-layout>
    <a href="{{ route('create_market')}}" class="btn btn-gray">Buka Form</a>

    <table class="min-w-full divide-y divide-gray-200 overflow-x-auto">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($market as $markets )
                
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                        <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">
                                {{ $markets->nama_market }}
                            </div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                    <a href="{{ route('edit-market', $markets->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    <a href="#" class="ml-2 text-red-600 hover:text-red-900">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>