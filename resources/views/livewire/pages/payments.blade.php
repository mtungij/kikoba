
<div>

<div class="rounded shadow-xl w-full overflow-hidden">
    <div class="h-[140px] bg-gradient-to-r from-cyan-500 to-blue-500"></div>
    <div class="px-5 py-2 flex flex-col gap-3 pb-6">
      <div class="h-[90px] shadow-md w-[90px] rounded-full border-4 overflow-hidden -mt-14 border-white">
        <img class="w-full h-full rounded-full   object-center object-cover" src="{{ asset('assets/diversity.png') }}" alt="Diversity">
        
      </div>
      <div>
        <h3 class="text-xl  relative font-bold leading-6 dark:text-gray-400">Dadda Hicham</h3>
        <p class="text-sm text-gray-600">@daddasoft</p>
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





 
            <div class="overflow-x-auto">
            <table class="min-w-full divide-y border-collapse border   divide-gray-200 table-fixed dark:divide-gray-600">
                    <thead class=" dark:text-white text-white  bg-primary-700 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800  hover:bg-primary-800">
                        <tr>
                          
                            <th scope="col" class="p-2 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                Tarehe
                            </th>
                            <th scope="col" class="p-2 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                Maelezo
                            </th>
                            <th scope="col" class="p-2 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                Weka
                            </th>
                            <th scope="col" class="p-2 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                Toa
                            </th>
                           
                            <th scope="col" class="p-2 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                Salio
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        
                 
                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                          
                            <td class="flex items-center p-4 mr-12 space-x-6 whitespace-nowrap">
                                <div class="text-base font-semibold  text-gray-900 dark:text-white">11/09/2024</div>
                            </td>

                            
                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">John/weka/cash</td>
                            
                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">00.00</td>

                            <td class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="flex items-center">
                                     <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>  5000
                                </div>
                            </td>
                           <td class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">
                              5000
                            </td>
                        </tr> 
                         <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                          
                            <td class="flex items-center p-4 mr-12 space-x-6 whitespace-nowrap">
                                <div class="text-base font-semibold  text-gray-900 dark:text-white">11/09/2024</div>
                            </td>

                            
                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">James/weka/cash</td>
                            
                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">10,000</td>

                            <td class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="flex items-center">
                                     <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>  00.00
                                </div>
                            </td>
                            <td class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">
                           10,000
                    
                            </td>
                        </tr> 
                                    
                    </tbody>
                </table>
            </div>





        </div>
 