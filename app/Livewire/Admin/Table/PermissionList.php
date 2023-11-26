<?php

namespace App\Livewire\Admin\Table;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Spatie\Permission\Models\Permission;

class RoleList extends DataTableComponent
{
    protected $model = Permission::class;
    public $no;
    public function mount()
    {
        $this->no;
    }
     public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

     public function columns(): array
    {
        return [
            Column::make("No", "id")->format(fn () => ++$this->no +  ($this->page - 1) * $this->perPage),
            Column::make("Name", "name")
                ->sortable(),
            Column::make("Action", "id")
                ->format(function ($value, $row, Column $colmn) {
                    return '<a class="btn btn-sm font-sm rounded btn-brand mr-5" href="#" wire:click="roleModal(' . $row->id . ')">Edit</a>';
                })->html(),
        ];
    }
}