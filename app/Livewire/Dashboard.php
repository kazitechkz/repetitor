<?php

namespace App\Livewire;

use App\Models\Utm;
use Livewire\Attributes\On;
use Livewire\Component;

class Dashboard extends Component
{
    public function utm(string $q): void
    {
        $utm = Utm::where('user_id', auth()->id())->first();
        if ($utm) {
            switch ($q) {
                case 'balance':
                    $utm->balance++;
                    break;
                case 'rating':
                    $utm->rating++;
                    break;
                case 'account':
                    $utm->account++;
                    break;
                case 'query':
                    $utm->query++;
                    break;
                default:
                    break;
            }
            $utm->save();
        } else {
            switch ($q) {
                case 'balance':
                    Utm::create([
                        'balance' => 1,
                        'user_id' => auth()->id()
                    ]);
                    break;
                case 'rating':
                    Utm::create([
                        'rating' => 1,
                        'user_id' => auth()->id()
                    ]);
                    break;
                case 'account':
                    Utm::create([
                        'account' => 1,
                        'user_id' => auth()->id()
                    ]);
                    break;
                case 'query':
                    Utm::create([
                        'query' => 1,
                        'user_id' => auth()->id()
                    ]);
                    break;
                default:
                    break;
            }
        }
        $this->triggerAlert();
    }

    #[On('alert')]
    public function triggerAlert(): void
    {
        $this->dispatch('triggerAlert', 'Your alert message');
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.dashboard');
    }
}
