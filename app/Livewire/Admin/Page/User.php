<?php

namespace App\Livewire\Admin\Page;

use Livewire\Component;

class User extends Component
{
    protected $listeners = ['edit', 'hapus'];

    public function hapus($id){
dd('sip');
    }

    public function edit($id){
        dd('edit');
    }
    public function render()
    {
        return view('livewire.admin.page.user');
    }
}
