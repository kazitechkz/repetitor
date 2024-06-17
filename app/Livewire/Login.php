<?php
namespace App\Livewire;

use App\Livewire\Forms\CodeForm;
use App\Livewire\Forms\PhoneForm;
use App\Models\User;
use App\Services\SmsService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\On;
use Livewire\Component;

class Login extends Component
{
    public bool $isSend = false;
    public bool $errorCode = false;
    public int $seconds  = 99;
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
            $this->seconds = 99;
            $this->timeout = true;
        }
    }

    public function sendSms(SmsService $smsService): void
    {
        $this->phoneForm->validate();
        $this->isSend = true;
        $this->timeout = false;
        $this->decrement();
        if ($this->phoneForm->number == '+7 (000) 000-00-00') {
            $code = 0000;
        } else {
//            $code = rand(1000, 9999);
            $code = 0000;
            //SEND SMS service
//            $smsService->sendSMS($this->phoneForm->number, $code);
        }
        $user = User::firstWhere('phone', $this->phoneForm->number);
        if ($user) {
            $user->code = Hash::make($code);
            $user->save();
            $this->user = $user;
        } else {
            $this->user = User::create([
                'phone' => $this->phoneForm->number,
                'code' => Hash::make($code)
            ]);
        }
    }

    public function changePhone(): void
    {
        $this->redirect(route('auth.login'));
    }

    public function submit(): void
    {
        $this->codeForm->validate();
        if (Hash::check($this->codeForm->number, $this->user->code)) {
            $this->errorCode = false;
            Auth::login($this->user);
            if ($this->user->phone == '+7 (000) 000-00-00') {
                $this->redirect(route('admin.index'));
            } else {
                $this->redirect(route('dashboard.index'));
            }
        } else {
            $this->errorCode = true;
        }
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.login');
    }
}
