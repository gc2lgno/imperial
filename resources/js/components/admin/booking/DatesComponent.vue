<template>
    <HotelDatePicker format="DD/MM/YYYY" :i18n="esVe" @check-in-changed="getCheckIn" @check-out-changed="getCheckOut">
    </HotelDatePicker>
</template>
<script>
    import HotelDatePicker from 'vue-hotel-datepicker';
    import moment from 'moment';

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
            console.log('Componente montado');
        },
        methods: {
            getCheckIn(date){
                let checkin = moment(date).format('DD/MM/YYYY');
                console.log("Entrada: ", checkin);
            },
            getCheckOut(date) {
                let checkout = moment(date).format('DD/MM/YYYY');
                console.log("Salida: ", checkout);
            }
        }
    };
</script>