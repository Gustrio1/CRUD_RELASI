<x-layout>
    <form action='{{ route('product-update', $edit->id)}}' method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Edit Product</h2>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-4"> 
                <label for="username" class="block text-sm/6 font-medium text-gray-900">Nama Product</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                   
                    <input value="{{ old('nama_product', $edit->nama_product) }}"  type="text" name="nama_product" id="username" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="janesmith">
                  </div>
                </div>
              </div>
              <div class="sm:col-span-4">
                <label for="username" class="block text-sm/6 font-medium text-gray-900">Harga product</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input value="{{ old('harga_product', $edit->harga_product) }}"  type="number" name="harga_product" id="username" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Rp. 00">
                  </div>
                </div>
              </div>
              <div class="sm:col-span-4">
                <label for="username" class="block text-sm/6 font-medium text-gray-900">Stok Product</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input value="{{ old('stok_product', $edit->stok_product) }}"  type="number" name="stok_product" id="username" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="100">
                  </div>
                </div>
              </div>
              <div class="sm:col-span-4">
                <label for="about" class="block text-sm/6 font-medium text-gray-900">Deskripsi Product</label>
                <div class="mt-2">
                  <textarea   name="deskripsi_product" id="about" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ old('deskripsi_product', $edit->deskripsi_product) }}</textarea>
                </div>
              </div>
              <div class="sm:col-span-4">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark" for="large_size">Gambar Product</label>
                <input value="{{ old('gambar_product', $edit->gambar_product) }}"  name="gambar_product"  class="block w-full text-lg text-gray-100 border border-gray-200 rounded-lg cursor-pointer bg-gray-10 dark:text-gray-400 focus:outline-none dark:bg-width-300 dark:border-gray-200 dark:placeholder-gray-400" id="large_size" type="file">
              </div>
            </div>
          </div>
        </div>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
      </form>
</x-layout>