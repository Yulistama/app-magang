@if (session('error') != null)
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <span class="font-16 font-weight-regular font-family-opensans">{{ session('error') }}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif