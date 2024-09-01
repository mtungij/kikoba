<?php
namespace App\Livewire\Pages\Members;

use App\Models\Customer;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Attributes\Url;

class Payments extends Component 
{


    public $fname;
    public $lname;

    public $nickname;

    public $gender;

    public $phone;

    public $amount;
    public $payer;

 
public $currentCustomer;    

   
    public $selectedCustomer;
    public $customers = [];
    public $customerDetails = [];

    public function mount()
    {
        // Fetch initial list of customers
        $this->customers = Customer::all(); // Adjust as needed
        $this->customerDetails = []; // Initialize as empty array
        if ($this->selectedCustomer) {
            $customer = Customer::find($this->selectedCustomer);
            $this->currentCustomer = $customer;
        } 
    }


    

   

    public function selectCustomer()
    {
        if ($this->selectedCustomer) {
            $customer = Customer::find($this->selectedCustomer);
            $this->currentCustomer = $customer;

            $this->dispatch('customer-changed');

        } 
    }
    
    

    public function render()
    {
    
        

        return view('livewire.pages.payments');
    }
}
