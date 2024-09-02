
   <x-primary-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'Deposit')"
    >{{ __('Deposit') }}</x-primary-button>

    <x-modal name="Deposit" :show="$errors->isNotEmpty()" focusable>
         <form wire:click.prevent='save'>
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                       

                        <div>
                            <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kiasi</label>
                            <input wire:model="amount" type="text" name="amount" id="fname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  required>
                            @error('amount') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label for="payer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jina La Mlipaji</label>
                            <input wire:model="payer" type="text" name="payer" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  required>
                              @error('payer') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label for="nickname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Account Type</label>
                              <select wire:model="payment_id" id="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                              <option value="">Chagua Malipo</option>
                                @foreach($payments as $payment)
                                <option value="{{$payment->id}}">{{$payment->name}}</option>
                              @endforeach
                            </select>
                     
                    </div>
                    <button  type="submit" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                        Hifadhi
                    </button>
                </form>

                 <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                
            </div>
    </x-modal>



    