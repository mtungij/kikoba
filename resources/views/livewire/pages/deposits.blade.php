<div>
   <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
    <div class="mx-auto max-w-screen-xl lg:px-12">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <div class="w-full md:w-1/2">
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" wire:model.live.debounce.1s="search" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                        </div>
                    </form>
                </div>
               
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-white">
                        <tr>
                            <th scope="col" class="px-4 py-3">S/no</th>
                             <th scope="col" class="px-4 py-3">Jina Kamili</th>
                            <th scope="col" class="px-4 py-3">Jina Maarufu</th>
                            <th scope="col" class="px-4 py-3">Deposit</th>
                            <th scope="col" class="px-4 py-3">Depositor</th>
                            <th scope="col" class="px-4 py-3">Balance</th>
                            <th scope="col" class="px-4 py-3">
                                <span class="sr-only">Actions</span>
                            </th>
                        </tr>
                    </thead>
 
                   <tbody>
   @forelse($this->payments as $index => $payment)
        <tr class="border-b dark:border-gray-700">
        <th scope="row" class="px-4 py-3 font-medium uppercase  whitespace-nowrap dark:text-white">{{ sprintf('%02d',$index + 1)}} </th>
            <th scope="row" class="px-4 py-3 font-medium uppercase whitespace-nowrap dark:text-white">{{ $payment->customer->fname }}</th>
            <td class="px-4 py-3   uppercase dark:text-white">{{ $payment->customer->nickname }}</td>
            <td class="px-4 py-3  dark:text-white">{{number_format($payment->deposit) }}</td>
            <td class="px-4 py-3  uppercase dark:text-white">{{ $payment->user->name }}</td>   
            <td class="px-4 py-3  dark:text-white">{{ number_format($payment->amount)  }}</td>
            {{-- <td class="px-4 py-3 flex items-center justify-end">
                <button id="dropdown-button-{{ $payment->id }}" data-dropdown-toggle="dropdown-{{ $payment->id }}" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                    </svg>
                </button>
                <div id="dropdown-{{ $payment->id }}" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button-{{ $payment->id }}">
                        <li>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                        </li>
                    </ul>
                    <div class="py-1">
                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                    </div>
                </div>
            </td> --}}
             
        </tr>
        
    @empty
        <tr>
            <td colspan="6" class="px-4 py-3 text-center font-bold text-gray-500 dark:text-white">
                Hamna malipo yaliyofanyika leo.
            </td>
        </tr>
    @endforelse

     <tr class="border-b dark:border-gray-700">
               <td></td>
               <td></td>
                <td class="  px-4 py-3 font-bold text-gray-800 dark:text-white">TOTAL</td>

                 <td class=" px-4 py-3 font-bold text-gray-800  dark:text-white">{{number_format($todayDeposit)}}</td>
              </tr>
</tbody>

                </table>
            </div>
            
        </div>
    </div>
    </section>
</div>
