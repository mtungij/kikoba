<?php
namespace App\Livewire\Pages\Members;

use App\Models\Customer;
use App\Models\Payment;
use App\Models\Receive;
use Livewire\Attributes\On;
use Livewire\Component;
use Masmerise\Toaster\Toaster;
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

    public $customer_id;

    public $payment_id;
    public $user_id;

    public $currentCustomer;    

    #[Url]
    public $selectedCustomer;
    public $customers = [];
    public $customerDetails = [];

   
    protected $rules = [
        'amount' => 'required|numeric',
        'payer' => 'required|string|max:255',
        'payment_id' => 'required|exists:payments,id',
    ];

 
    public function save()
    {
       $validated =$this->validate();

       
    
        Receive::create([...$validated, 'user_id' => auth()->id(), 'customer_id' => $this->selectedCustomer]);

    
        Toaster::success('Receive entry saved successfully.');

        $this->reset();
    }

 


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
    
        $deposits = $this->selectedCustomer ? Receive::where('customer_id', $this->selectedCustomer)->get() : collect([]);
       $payments=Payment::all();
        return view('livewire.pages.payments',['payments' => $payments , 'deposits' => $deposits]);
    }
}
