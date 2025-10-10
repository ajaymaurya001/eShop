{{-- Success Message --}}
@if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

{{-- Error Message --}}
@if(session('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
@endif

{{-- Warning Message --}}
@if(session('warning'))
    <div class="alert alert-warning" role="alert">
        {{ session('warning') }}
    </div>
@endif

{{-- Info Message --}}
@if(session('info'))
    <div class="alert alert-info" role="alert">
        {{ session('info') }}
    </div>
@endif
