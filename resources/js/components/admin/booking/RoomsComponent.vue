<template>
    <div class="card">
        <!-- Card -->
        <div class="card">
            <div class="card-body">
                <div class="room-type">
                    <h4 class="card-title">Tipo de Habitación</h4>
                    <select v-model="select_type" name="room_type_id" id="room_type_id" class="form-control" required
                            @change="cambio">
                        <option v-for="type in room_types" :value="type.id"> {{ type.nombre }} (MÁX. {{ type.total_room
                            }} Personas)
                        </option>
                    </select>
                </div>
                <br>
                <div class="room">
                    <h4 class="card-title">Habitación</h4>
                    <select v-model="select_rooms" name="rooms" id="rooms" class="form-control" required>
                        <option v-for="room in rooms" :value="room.id"> N° {{ room.numero }} - PISO {{ room.ubicacion }} </option>
                    </select>
                </div>
            </div>
        </div>
        <!-- Card -->
    </div>
</template>
<script>
    export default {
        data() {
            return {
                select_type: "",
                select_rooms: "",
                room_types: [],
                rooms: []
            }
        },
        mounted() {
            axios.get('http://imperial.test/api/types').then(response => {
                    this.room_types = response.data
                }
            ).catch(error => {
                console.log(error);
            });
        },
        methods: {
            cambio() {
                let id = this.select_type.valueOf();
                axios.get('http://imperial.test/api/rooms/' + id).then(response => {
                    // console.log(response.data);
                    this.rooms = response.data
                }).catch(errors => {
                    console.log(errors);
                });
            }
        }
    }
</script>
