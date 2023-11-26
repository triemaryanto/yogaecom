<?php

namespace App\Livewire\Admin\Page;

use App\Models\User as ModelsUser;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class User extends Component
{
    public $idNya, $name, $email, $password, $confirmpassword, $role_user, $wa;
    public $isEdit = false;
    protected $listeners = ['edit', 'hapus'];

     protected $rules = [
        'name' => 'required|max:255',
        'wa' => 'required|min:9',
        'email' => 'required|string|email|unique:users',
        'password' => 'required|min:8',
        'confirmpassword' => 'required|same:password|min:8',
        'role_user' => 'required',
    ];

    public function hapus($id){
        $user = ModelsUser::find($id);
        $user->delete();
        $this->dispatch('Delete');
        $this->dispatch('refreshDatatable');
        $this->cancel();
    }
    public function cancel(){
        $this->isEdit = !$this->isEdit;
        $this->idNya = '';
        $this->name = '';
        $this->email ='';
        $this->wa = '';
        $this->role_user = '';
    }
    public function edit($id){
        $this->isEdit = !$this->isEdit;
        $data = ModelsUser::find($id);
        $this->idNya = $data->id;
        $this->name = $data->name;
        $this->email = $data->email;
        $this->wa = $data->wa;
        $this->role_user = $data->getRoleNames();
    }

    public function addUser() {
        $this->isEdit = !$this->isEdit;
    }

    public function save() {
        if($this->idNya){
            $this->update();
        }else{
            $this->validate();
             ModelsUser::create([
                "name" => $this->name,
                "email" => $this->email,
                "wa_verified_at" => now(),
                "email_verified_at" => now(),
                "wa" => $this->wa,
                "password" => Hash::make($this->password)
            ])->assignRole($this->role_user);
            $this->dispatch('Success');
            $this->dispatch('refreshDatatable');
            $this->cancel();
        }
    }

    public function update(){
         $dataUser = ModelsUser::find($this->idNya);
        $dataUser->name = $this->name;
        $dataUser->email = $this->email;
        $dataUser->syncRoles($this->role_user);
        if ($this->password) {
            $dataUser->password = Hash::make($this->password);
        }
        $dataUser->save();
        $this->dispatch('Update');
        $this->dispatch('refreshDatatable');
        $this->cancel();
    }
    public function render()
    {
        return view('livewire.admin.page.user');
    }
}
