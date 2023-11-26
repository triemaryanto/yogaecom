<?php

namespace App\Livewire\Admin\Table;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Database\Eloquent\Builder;
use Spatie\Permission\Models\Role;

class RoleList extends DataTableComponent
{
    protected $model = Role::class;
    
     public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function builder(): Builder
    {
        return Role::with('permissions')->select(['roles.*']);
    }

     public function columns(): array
    {
        return [
            Column::make("Name", "name")->sortable(),
             Column::make("Permission", "permissions.name")->sortable(),
            Column::make("Custom Column")->format(function ($value, $column, $row) {
                // Your custom logic here
                return $row->permissions->pluck('name')->implode(', ');
            }),
            // Other columns...
        ];
    }
}