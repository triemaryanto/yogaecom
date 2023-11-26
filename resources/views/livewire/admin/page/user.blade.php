<div>
    <livewire:admin.global.page-header judul="User List" subjudul="Admin Panel Elrista" :breadcrumb="['Users', 'User List']" />

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <form class="form-inline search-form search-box">
                    <div class="form-group">
                        <input class="form-control-plaintext" type="search" placeholder="Search.."><span
                            class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                    </div>
                </form>

                <a href="create-user.html" class="btn btn-primary mt-md-0 mt-2">Create User</a>
            </div>
            <div class="card-body">
                <livewire:admin.table.user-list />
            </div>
        </div>
    </div>

    <livewire:admin.global.konfirmasi-hapus>
</div>
