<x-layout>
   

    <a href="{{ route('create-company')}}" class="btn btn-gray">Buka Form</a>


<table class="min-w-full divide-y divide-gray-200 overflow-x-auto">
    <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Nama Company
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Alamat Company
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Kontak Company
            </th>    
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-   500 uppercase tracking-wider">
                Actions
            </th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($company as $products )
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                    
                    <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900">
                            {{ $products->nama_company }}
                        </div>
                     
                    </div>
                </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{ $products->alamat_company }}</div>
               
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{ $products->kontak_company }}</div>
            </td>
         
          
            <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                <form action="{{ route('destroy', $products->id) }}" method="POST">
                    <a href="{{ route('edit-company', $products->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit"  class="ml-2 text-red-600 hover:text-red-900">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</x-layout>