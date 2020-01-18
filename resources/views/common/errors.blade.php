@if ($errors->any())
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span>
    </button>
    <h3 class="text-danger"><i class="fa fa-exclamation-triangle"></i> ¡Atención!</h3> 
    Se han encontrado los siguientes errores. Por favor verifica lo siguiente:
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif