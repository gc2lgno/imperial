@if ($message = Session::get('success'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    <h4 class="text-success"><i class=" ti-check"></i><strong> ¡Éxito!</strong></h4> 
    {{ $message }}
</div>
@endif