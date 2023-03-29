<?php

namespace App\Http\Livewire;

use App\Models\SupportRequest;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Livewire\Component;

class ContactForm extends Component implements HasForms
{
    use InteractsWithForms;

    public $data;

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function getFormStatePath()
    {
        return 'data';
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('name')->label(t("Name")),
            TextInput::make('email')
                ->email()
                ->required()
                ->label(t("Email")),
            Textarea::make('message')->label(t("Message")),
        ];
    }

    public function submit()
    {
        SupportRequest::create($this->form->getState());

        $this->data = [];

        Notification::make()
            ->title(t("Thank you for your message"))
            ->body(t("Your message has been sent to our RMS support team. You will receive an automated confirmation via email, and one of our team will reply as soon as possible."))
            ->duration(10000)
            ->success()
            ->send();
    }
}
