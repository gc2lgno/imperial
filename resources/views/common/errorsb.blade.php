@if ($message = Session::get('error'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <h3 class="text-danger">
            <i class="ti-na"></i> ¡Atención!</h3>
        {{ $message }}
    </div>
@endif