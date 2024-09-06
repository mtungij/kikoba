<?php

namespace App\Livewire\Pages\Members;


use App\Models\Receive;
use Carbon\Carbon;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Deposits extends Component
{
    public string $search = '';

    public $todayDeposit;

    public function mount()
    {
        $this->todayDeposit=Receive::whereDate('created_at',Carbon::today())->sum('deposit');
    }

    #[Computed]
    public function payments()
    {
        return Receive::whereDate('created_at',now()->format('Y-m-d'))
                        ->with(['customer','user','payment'])
                        ->whereRelation('customer', 'fname', 'LIKE', "%{$this->search}%")
                        ->get();
    }
    
    public function render()
    {
        return view('livewire.pages.deposits',[ "todayDeposit" => $this->todayDeposit,
    ]);
    }
}
