<x-layout>
    <form action='{{ route('update-market', $edit->id)}}' method="POST">
        @csrf
        @method('PUT')
        <div class="space-y-12">
          <div class=" border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Edit Market</h2>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-4"> 
                <label for="username" class="block text-sm/6 font-medium text-gray-900">Nama Market</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input value="{{ old('nama_market', $edit->nama_market) }}"   type="text" name="nama_market" id="username" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="{{ $edit->nama_market }}">
                  </div>
                </div>
                <div class="mt-5">
                  <label for="">Product</label>
                  <select id="product_id" name="product_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                 
                    
                  <option value="{{ old('product_id', $edit->product_id) }}">{{ $edit->id }}</option>
                  
                
                  </select>
                </div>
                <div class="mt-5">
                  <label for="">Company</label>
                  <select id="company_id" name="company_id"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              
                
              <option value="{{ old('company_id', $edit->company_id) }}">{{ $edit->id }}</option>
              
               
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
      </form>
</x-layout>