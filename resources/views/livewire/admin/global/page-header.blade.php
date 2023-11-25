<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>{{ $judul }}
                        <small>{{ $subjudul }}</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">
                            <i data-feather="home"></i>
                        </a>
                    </li>
                    @foreach ($breadcrumb ?? [] as $breadcrumb)
                        <li class="breadcrumb-item active">Dashboard</li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</div>
