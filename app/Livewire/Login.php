<?php

namespace App\Livewire;

use App\Livewire\Forms\CodeForm;
use App\Livewire\Forms\PhoneForm;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    public bool $isSend = false;
    public int $seconds  = 60;
    public User $user;
    public PhoneForm $phoneForm;
    public CodeForm $codeForm;
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



    public function sendSms(): void
    {
        $this->phoneForm->validate();
        $this->isSend = true;
        $this->timeout = false;
        $this->decrement();
        $code = rand(1000, 9999);
        $user = User::firstWhere('phone', $this->phoneForm->number);
        if ($user) {
//            $user->code = Hash::make($code);
            $user->code = $code;
            $user->save();
            $this->user = $user;
        } else {
            $this->user = User::create([
                'phone' => $this->phoneForm->number,
                'code' => $code
            ]);
        }
    }

    public function changePhone(): void
    {
        $this->redirect(route('auth.login'));
    }

    public function submit()
    {
        $this->codeForm->validate();
        if ($this->user->code == $this->codeForm->number) {
            Auth::login($this->user);
            $this->redirect(route('dashboard.index'));
        } else {
            dd('err');
        }
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.login');
    }
}
