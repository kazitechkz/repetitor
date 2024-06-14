<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CodeForm extends Form
{
    #[Validate('required', message: 'Это поле обязательно для заполнения')]
    public string $number = '';
}
