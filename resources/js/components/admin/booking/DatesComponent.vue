<template>
    <HotelDatePicker format="DD/MM/YYYY" :i18n="esVe" @click="cambio">
    </HotelDatePicker>
</template>
<script>
    import HotelDatePicker from 'vue-hotel-datepicker';

    export default {
        components: {
            HotelDatePicker,
        },
        data() {
            return {
                esVe: {
                    night: 'Noche',
                    nights: 'Noches',
                    'day-names': ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
                    'check-in': 'Llegada',
                    'check-out': 'Salida',
                    'month-names': ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                }
            }
        },
        mounted() {
            this.cambio();
        },
        methods: {
            cambio(value){
                console.log(value);
            }
        }
    };
</script>