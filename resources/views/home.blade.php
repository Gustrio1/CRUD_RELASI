<x-layout>
  <nav class="border-gray-200 bg-gray-50 dark:bg-gray-400 dark:border-gray-700 rounded-md">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Dashboard</span>
    </div>
  </nav>




  <div class="flex flex-row gap-5">
    @foreach ($markets as $market) 
    
    
    <div
    class=" mt-5  block max-w-[18rem] rounded-lg bg-stone-500  text-surface shadow-secondary-1 dark:bg-dark dark:text-white">
    <div class="relative overflow-hidden bg-cover bg-no-repeat">
      <img
        class="rounded-lg "
        src="{{ Storage::url('product/' . $market->product->gambar_product) }} " class="object-cover"
        alt="" />
    </div>
    <div class="p-6">
      <h5 class="mb-1 text-xl font-medium leading-tight">{{ $market->product->nama_product }}</h5>
      <p class="text-base">
        {{  $market->product->deskripsi_product }}
      </p>
    </div>
    <ul class="w-full">
      
      <li
        class="w-full border-b-2 border-neutral-100 border-opacity-100 px-6 py-3  dark:border-white/10">
        {{ $market->company->nama_company}}
      </li>
      
     
        
      <li
        class="w-full border-neutral-100 border-opacity-100 px-6 py-3  dark:border-white/10">
        {{ $market->nama_market }}
      </li>
      
    </ul>
    <div class="p-6">
      <a
        type="button"
        class="pointer-events-auto me-5 inline-block cursor-pointer rounded text-base font-normal leading-normal text-primary transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700 dark:text-primary-400">
        Card Link
      </a>
      <a
        type="button"
        class="pointer-events-auto inline-block cursor-pointer rounded text-base font-normal leading-normal text-primary transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700 dark:text-primary-400">
        Another Link
      </a>
    </div>
  </div>
  @endforeach
  </div>

</div>  

</x-layout>