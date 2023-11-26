<div>
    <a href="#" wire:click="$dispatch('edit', { id: {{ $row->id }} })">
        <i class="fa fa-edit" title="Edit"></i>
    </a>

    <a href="#" wire:click="$dispatch('showModal', { id: {{ $row->id }} })">
        <i class="fa fa-trash" title="Delete"></i>
    </a>
</div>
