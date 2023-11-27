@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
@endpush
<div>
    <livewire:admin.global.page-header judul="Role List" subjudul="Admin Panel Elrista" :breadcrumb="['Role', 'Role List']" />

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                @if ($isEdit)
                    <a href="#" wire:click='cancel' class="btn btn-primary mt-md-0 mt-2">Cancel</a>
                @else
                    <a href="#" wire:click='add' class="btn btn-primary mt-md-0 mt-2">Create Role</a>
                @endif
            </div>
            @if ($isEdit)
                <div class="card-body">
                    <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active show" id="account-tab" data-bs-toggle="tab"
                                href="#account" role="tab" aria-controls="account" aria-selected="true"
                                data-original-title="" title="">Account</a></li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="account" role="tabpanel"
                            aria-labelledby="account-tab">
                            <form wire:submit.prevent="save" method="POST">
                                <h4>Role Details</h4>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>Role</label>
                                    <div class="col-xl-8 col-md-7">
                                        {{ Form::text(null, null, [
                                            'class' => 'form-control' . ($errors->has('name') ? ' border-danger' : null),
                                            'placeholder' => 'Full Name',
                                            'wire:model.lazy' => 'name',
                                        ]) }}
                                        @error('name')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span>
                                        Permission</label>
                                    <div wire:ignore class="col-xl-8 col-md-7">
                                        {!! Form::select('permission_user', get_permission_user(), null, [
                                            'id' => 'permission_user',
                                            'multiple' => 'multiple',
                                            'class' => 'form-control permission_user',
                                            'wire:model.lazy' => 'permission_user',
                                        ]) !!}

                                    </div>
                                    <div class="form-group"> <label>Multiple</label> <select
                                            class="form-control select2 select2-hidden-accessible" multiple=""
                                            data-placeholder="Select a State" style="width: 100%;" tabindex="-1">
                                            <option>Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select> </div>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            @else
                <div class="card-body">
                    <div class="table-responsive table-desi">
                        <table class="all-package coupon-table table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Role</th>
                                    <th>Permission</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $row)
                                    <tr data-row-id="1">
                                        <td>{{ $no++ }}</td>

                                        <td>{{ $row->name }}</td>
                                        <td>
                                            @foreach ($row->getPermissionNames() as $value)
                                                {{ $value }}
                                            @endforeach
                                        </td>

                                        <td>
                                            <a href="#" wire:click="edit({{ $row->id }})">
                                                <i class="fa fa-edit" title="Edit"></i>
                                            </a>

                                            <a href="#"
                                                wire:click="$dispatch('showModal', { id: {{ $row->id }} })">
                                                <i class="fa fa-trash" title="Delete"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@push('js')
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                closeOnSelect: false
            });
        });
        $(document).ready(function() {
            window.addEventListener('select2untukroleuser', event => {
                $('.permission_user').select2();

                $('#permission_user').on('change', function(e) {
                    var data = $('#permission_user').select2("val");
                    @this.set('permission_user', data);
                });
            });
        });
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
@endpush
