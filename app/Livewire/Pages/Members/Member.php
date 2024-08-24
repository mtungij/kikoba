<?php

namespace App\Livewire\Pages\Members;
use Masmerise\Toaster\Toaster;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class Member extends Component
{


    use WithPagination;
    public $fname;
    public $lname;
    public $nickname;
    public $address;
    public $phone = '255';
    public $gender;

    public $search;

    public $selectuserID = 0;

    protected $rules = [
        'fname' => 'required',
        'lname' => 'required',
        'nickname' => 'required',
        'address' => 'required',
        'phone' => 'required',
        'gender' => 'required',
    ];

    public function save()
    {
        $validated = $this->validate();

        $existedMember = Customer::where('fname', $validated['fname'])
                                 ->where('lname', $validated['lname'])
                                 ->first();

        if ($existedMember) {
            Toaster::error('Mteja ' . $validated['nickname'] . ' Hawezi kusajiliwa tena tayari yupo kwenye mfumo!'); // 👈
            return redirect()->back();
        }

        Customer::create($validated);

        Toaster::success('Umefanikiwa kumsajili!' .$validated['nickname']. ' '); // 👈
    }
public function changeDelete($memberid)
{
      $this->selectuserID=$memberid;
}
public function deleteUser()
{
    if($this->selectuserID == 0)
    {
        return redirect()->back();
    }

    $user = Customer::findOrFail($this->selectuserID);
    $user->delete();
    $this->selectuserID =0;

    Toaster::success('deleted');
}






    public function render()
    {

        $members = Customer::latest()
            ->where('fname', 'like', "%{$this->search}%")
            ->orWhere('lname', 'like', "%{$this->search}%")
            ->orWhere('nickname', 'like', "%{$this->search}%")
            ->paginate(3);
        return view('livewire.pages.member', ['members' => $members]);
    }
}
