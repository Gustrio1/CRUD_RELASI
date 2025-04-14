<x-layout>
    <form action='{{ route('update-company', $edit->id)}}' method="POST">
        @csrf
        @method('PUT')
        <div class="space-y-12">
          <div class=" border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Edit Data Company</h2>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-4"> 
                <label for="username" class="block text-sm/6 font-medium text-gray-900">Nama Company</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md  bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                   
                    <input value="{{ old('nama_company', $edit->nama_company) }}"  type="text" name="nama_company" id="username" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="janesmith">
                  </div>
                </div>
              </div>
              <div class="sm:col-span-4">
                <label for="username" class="block text-sm/6 font-medium text-gray-900">Alamat Company</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input value="{{ old('alamat_company', $edit->alamat_company) }}"  type="text" name="alamat_company" id="username" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Rp. 00">
                  </div>
                </div>
              </div>
              <div class="sm:col-span-4">
                <label for="username" class="block text-sm/6 font-medium text-gray-900">Kontak Company</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input value="{{ old('kontak_company', $edit->kontak_company) }}"  type="text" name="kontak_company" id="username" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="100">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
      </form>
</x-layout>