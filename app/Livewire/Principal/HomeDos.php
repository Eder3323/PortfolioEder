<?php

namespace App\Livewire\Principal;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\Attributes\Rule;

class HomeDos extends Component
{
    #[Rule('required|regex:/^[a-zA-Z\s]+$/|max:50', message: 'Requerido | Únicamente letras | NO números | 50 carácteres max')]
    public $name;
    #[Rule('required|email', message: 'Requerido | Correo NO valido!. Favor de verificar')]
    public $email;
    #[Rule('required|regex:/^[a-zA-Z0-9\s]+$/|max:250', message: 'Requerido | No carácteres especiales | max 250 carácteres')]
    public $message;
    public $email_message;

    public $language;

    public function change()
    {
        $this->setLanguage($this->language === 'en' ? 'es' : 'en');
    }
    public function setLanguage($locale)
    {
        app()->setLocale($locale);
        $this->language = $locale;
    }
    public function mount()
    {
        $this->setLanguage('en');
        $var = 0;
            if (!empty($var)){
                dd('webos');
            }else{
                dd('hla');
            }
    }
    public function sent_email()
    {
        $this->validate();
        $msg = [
            'name' => $this->name,
            'email'=>$this->email,
            'message'=>$this->message
        ];
        Mail::to('ing.eder.esc@gmail.com')->queue(new MessageReceived($msg));
        $this->email_message='Mensaje Enviado Correctamente!!';
        $this->reset('name','email','message');
    }

    public function render()
    {
        return view('livewire.principal.home-dos')
            ->extends('layouts.app')
            ->section('content');
    }
}
