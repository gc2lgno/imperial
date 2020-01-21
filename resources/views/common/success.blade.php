@if ($message = Session::get('success'))
<div class="alert alert-success alert-rounded"> <i class="ti-user"></i> {{ $message }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
@endif