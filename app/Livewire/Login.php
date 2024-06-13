<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    public bool $isSend = false;
    public int $seconds  = 60;

    public bool $timeout = false;
    #[On('timer')]
    public function decrement(): void
    {
        if ($this->seconds > 0 && !$this->timeout) {
            $this->seconds--;
        } else {
            $this->seconds = 60;
            $this->timeout = true;
        }
    }

    #[Validate('required')]
    public $code;
    public $phone;

    public function sendSms(): void
    {
        $this->isSend = true;
        $this->timeout = false;
        $this->decrement();
    }

    public function changePhone(): void
    {
        $this->redirect(route('auth.login'));
    }

    public function submit()
    {
        $this->validate();

    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.login');
    }
}
