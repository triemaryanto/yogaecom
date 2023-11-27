<?php

namespace App\Livewire\Admin\Global;

use Livewire\Component;

class KonfirmasiHapus extends Component
{
    public $isShow = false;
    public $idnya;

    protected $listeners = ['showModal'];

    public function showModal($id = "")
    {
        $this->isShow = !$this->isShow;
        $this->idnya = $id;
    }

    public function confirm()
    {
        $this->dispatch('hapus', id: $this->idnya );
        $this->showModal();
    }
    public function render()
    {
        return view('livewire.admin.global.konfirmasi-hapus');
    }
}
