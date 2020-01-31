<template>
    <div class="modal" id="customerSearch" tabindex="-1" role="dialog" aria-labelledby="customerSearch">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title font-bold" id="exampleModalLabel1">Buscar cliente</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="searchCustomer">
                        <div class="form-group">
                            <label for="nombreBuscado" class="control-label">Nombres y/o Apellidos</label>
                            <input type="text" class="form-control" id="nombreBuscado" name="nombres" required
                                   v-model="nombres">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="ti-search menu-icon"></i>
                        Buscar
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        <i class="ti-close menu-icon"></i>
                        Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ModalSearch",
        methods: {
            searchCustomer() {
                if (document.getElementById('nombreBuscado') == null) {
                    alert('El campo es obligatorio, ingresa nombres o apellidos a buscar');
                    return false;
                } else {
                    axios.post('http://imperial.test/customer/search', {
                        nombre: this.nombre
                    }).then(function (res) {
                        console.log(res);
                    }).catch(function (er) {
                        console.log(er);
                    })
                }
            }
        }
    }
</script>