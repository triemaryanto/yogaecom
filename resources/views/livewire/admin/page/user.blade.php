<div>
    <livewire:admin.global.page-header judul="User List" subjudul="Admin Panel Elrista" :breadcrumb="['Users', 'User List']" />

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                @if ($isEdit)
                    <a href="#" wire:click='cancel' class="btn btn-primary mt-md-0 mt-2">Cancel</a>
                @else
                    <a href="#" wire:click='addUser' class="btn btn-primary mt-md-0 mt-2">Create User</a>
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
                                <h4>Account Details</h4>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Full
                                        Name</label>
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
                                        Email</label>
                                    <div class="col-xl-8 col-md-7">
                                        {{ Form::text(null, null, [
                                            'class' => 'form-control' . ($errors->has('email') ? ' border-danger' : null),
                                            'placeholder' => 'Email',
                                            'wire:model.lazy' => 'email',
                                        ]) }}
                                        @error('email')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span>
                                        Number Whatsapp</label>
                                    <div class="col-xl-8 col-md-7">
                                        {{ Form::number(null, null, [
                                            'class' => 'form-control' . ($errors->has('wa') ? ' border-danger' : null),
                                            'placeholder' => 'Number Whatsapp',
                                            'wire:model.lazy' => 'wa',
                                        ]) }}
                                        @error('wa')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span>
                                        Role</label>
                                    <div class="col-xl-8 col-md-7">
                                        {!! Form::select('role', get_role_user(), null, [
                                            'id' => 'role_user',
                                            'class' => 'form-control select role_user' . ($errors->has('role_user') ? ' border-danger' : null),
                                            'placeholder' => 'Pilih Role User',
                                            'wire:model.lazy' => 'role_user',
                                        ]) !!}
                                        @error('role_user')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom3" class="col-xl-3 col-md-4"><span>*</span>
                                        Password</label>
                                    <div class="col-xl-8 col-md-7">
                                        {!! Form::password('password', [
                                            'class' => 'form-control' . ($errors->has('password') ? ' border-danger' : null),
                                            'placeholder' => 'Masukkan Password',
                                            'value' => '12345678',
                                            'wire:model.lazy' => 'password',
                                        ]) !!}
                                        @error('password')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom4" class="col-xl-3 col-md-4"><span>*</span> Confirm
                                        Password</label>
                                    <div class="col-xl-8 col-md-7">
                                        {{ Form::password('confirmpassword', [
                                            'class' => 'form-control' . ($errors->has('confirmpassword') ? ' border-danger' : null),
                                            'placeholder' => 'Confirmasi Password',
                                            'wire:model.lazy' => 'confirmpassword',
                                        ]) }}
                                        @error('confirmpassword')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
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
                    <livewire:admin.table.user-list />
                </div>
            @endif
        </div>
    </div>

    <livewire:admin.global.konfirmasi-hapus>
</div>
