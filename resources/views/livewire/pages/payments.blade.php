<>

    <div class="rounded shadow-xl w-full overflow-hidden">
        <div class="h-[140px] bg-gradient-to-r from-cyan-500 to-blue-500"></div>
        <div class="px-5 py-2 flex flex-col gap-3 pb-6">
            <div class="h-[90px] shadow-md w-[90px] rounded-full border-4 overflow-hidden -mt-14 border-white">
                <img class="w-full h-full rounded-full object-center object-cover" src="{{ asset('assets/diversity.png') }}" alt="Diversity">
            </div>
            <div>
                <h3 class="text-xl relative font-bold leading-6 dark:text-white uppercase"> {{ $currentCustomer ? $currentCustomer->nickname : '' }}</h3>
                <p class="text-sm  text-gray-400"> {{ $currentCustomer ? $currentCustomer->fname : '' }}</p>
            </div>
            <div class="flex gap-2">
                <button type="button" class="inline-flex w-auto cursor-pointer select-none appearance-none items-center justify-center space-x-1 rounded border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 transition hover:border-gray-300 active:bg-white hover:bg-gray-100 focus:border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-300">Withdraw</button>
                @include('livewire.pages.includes.payment-deposit')
            </div>
        </div>
    </div>

  <form wire:submit.prevent="selectCustomer" class="w-full mb-8">
    <label for="select2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
    <select id="select2" wire:model="selectedCustomer" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="">Tafuta Mwanachama</option>
        @foreach($customers as $customer)
            <option value="{{ $customer->id }}"> {{ $customer->fname }} {{ $customer->lname }} ({{ $customer->nickname }})</option>
        @endforeach
    </select>

</form>



@if($selectedCustomer)
<div class="relative overflow-x-auto mt-4">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

   
        <thead class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 border-b border-gray-200 shadow focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 uppercase">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Tarehe
                </th>
                <th scope="col" class="px-6 py-3">
                    Maelezo
                </th>
                <th scope="col" class="px-6 py-3">
                    Lipwa
                </th>
                <th scope="col" class="px-6 py-3">
                   Tolewa
                </th>
                 <th scope="col" class="px-6 py-3">
                   Salio 
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach( $deposits as $deposit)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium  text-gray-900 whitespace-nowrap dark:text-white">
                   {{$deposit->created_at}}
                </th>
               <td class="px-6 py-4 dark:text-white whitespace-nowrap">
                  James/weka pesa tsh5000/mama kitulo
             </td>

                <td class="px-6 py-4 dark:text-white">
                    50000
                </td>
                <td class="px-6 py-4 dark:text-white">
                    00.000
                </td>
                  <td class="px-6 py-4 dark:text-white">
                    50000
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>
</div>
@else
<div class="relative overflow-x-auto mt-4">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

   
        <thead class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 border-b border-gray-200 shadow focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 uppercase">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Tarehe
                </th>
                <th scope="col" class="px-6 py-3">
                    Maelezo
                </th>
                <th scope="col" class="px-6 py-3">
                    Lipwa
                </th>
                <th scope="col" class="px-6 py-3">
                   Tolewa
                </th>
                 <th scope="col" class="px-6 py-3">
                   Salio 
                </th>
            </tr>
        </thead>
        <tbody>
        
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium  text-gray-900 whitespace-nowrap dark:text-white">
                   --/--/--
                </th>
               <td class="px-6 py-4 dark:text-white whitespace-nowrap">
                  -----
             </td>

                <td class="px-6 py-4 dark:text-white">
                    00.00
                </td>
                <td class="px-6 py-4 dark:text-white">
                    00.00
                </td>
                  <td class="px-6 py-4 dark:text-white">
                   00.00
                </td>
            </tr>
          
        </tbody>
    </table>
</div>
@endif


    <script>
        $(document).ready(function () {
            $('#select2').select2({
                placeholder: 'Tafuta Mwanachama', 
                allowClear: true 
            }).on('change', function (e) {
                @this.set('selectedCustomer', e.target.value);
                @this.selectCustomer(e.target.value);
            });
        });
    </script>


</div>





