<?php

namespace App\Livewire\Pages\Members;

use App\Models\Customer;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Payments extends Component implements HasForms
{

    use InteractsWithForms;


    public $members = [];
    public $fname = "";
    public $lname = "";

    public $nickname = "";

    public $gender = "";

    public $phone = "";


    public function mount(): void
    {
        $this->form->fill();
    }

   
public function form(Form $form): Form
{
    return $form->schema([
        Select::make('status')
            ->label('Status')
            ->options([
                'draft' => 'Draft',
                'reviewing' => 'Reviewing',
                'published' => 'Published',
            ])
            ->native(false), // Use Filament's custom select component
    ]);
}

        
     
    public function render()
    {
        $latest = Customer::latest()->first();
        return view('livewire.pages.payments',['latest' => $latest]);
    }
}
