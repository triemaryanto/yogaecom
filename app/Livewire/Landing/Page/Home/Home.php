<?php

namespace App\Livewire\Landing\Page\Home;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.landing.page.home.home')->layout('components/layouts/landing/app');
    }
}
