<?php

namespace App\Livewire\Admin\Page;

use Livewire\Component;
use Spatie\Permission\Models\Role as ModelRole;

class Role extends Component
{
    public $name,  $permission_user, $idNya, $datane;
    public $isEdit = false;

    public function add(){
        $this->isEdit = !$this->isEdit;
    }

    public function cancel(){
        $this->isEdit = !$this->isEdit;
    }
    public function edit($id){
        $this->isEdit = !$this->isEdit;
        $this->datane = ModelRole::find($id);
         $this->idNya = $this->datane->id;
        $this->permission_user = $this->datane->getPermissionNames();
        $this->name = $this->datane->name;
         $this->dispatch('select2untukroleuser');
    }
    public function render()
    {
        $data = ModelRole::limit(5)->paginate(5);
       
        return view('livewire.admin.page.role', [
            "data" => $data
        ] 
    );
    }
}
