
<div>

<div class="rounded shadow-xl w-full overflow-hidden">
    <div class="h-[140px] bg-gradient-to-r from-cyan-500 to-blue-500"></div>
    <div class="px-5 py-2 flex flex-col gap-3 pb-6">
      <div class="h-[90px] shadow-md w-[90px] rounded-full border-4 overflow-hidden -mt-14 border-white">
        <img class="w-full h-full rounded-full   object-center object-cover" src="{{ asset('assets/diversity.png') }}" alt="Diversity">
        
      </div>
      <div>
 

        <h3 class="text-xl  relative font-bold leading-6 dark:text-gray-400 uppercase">{{$latest->fname}}</h3>
        <p class="text-sm text-gray-600">{{$latest->phone}}</p>
      </div>
      {{-- <div class="flex gap-3 flex-wrap">
        <span class="rounded-sm bg-yellow-100 px-3 py-1 text-xs font-medium text-yellow-800">Developer</span>
        <span class="rounded-sm bg-green-100 px-3 py-1 text-xs font-medium text-green-800">Design</span>
        <span class="rounded-sm bg-blue-100 px-3 py-1 text-xs font-medium text-blue-800">Management</span>
        <span class="rounded-sm bg-indigo-100 px-3 py-1 text-xs font-medium text-indigo-800">Projects</span>
      </div> --}}
      <div class="flex gap-2">
        <button type="button" class="inline-flex w-auto cursor-pointer select-none appearance-none items-center justify-center space-x-1 rounded border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 transition hover:border-gray-300 active:bg-white hover:bg-gray-100 focus:border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-300">Withdraw</button>
        @include('livewire.pages.includes.payment-deposit')
      </div>
      {{-- <h4 class="text-md font-medium leading-3">About</h4>
      <p class="text-sm text-stone-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolores aliquid sequi sunt iusto ipsum earum natus omnis asperiores architecto praesentium dignissimos pariatur, ipsa cum? Voluptate vero eius at voluptas?</p>
      <h4 class="text-md font-medium leading-3">Experiences</h4> --}}
  
      
    </div>
  </div>





 
{{ $this->form }}






<x-filament-actions::modals />
        </div>
 