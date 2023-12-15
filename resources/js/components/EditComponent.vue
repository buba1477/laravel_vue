<template>

                <tr :class="this.$parent.isEdit(peopl.id) ? '' : 'd-none'">
                    <th scope="row">{{peopl.id}}</th>
                    <td><input type="text" v-model="name" class="form-control"></td>
                    <td><input type="number" v-model="age" class="form-control"></td>
                    <td><input type="text" v-model="job" class="form-control"></td>
                    <td><a href="#" @click.prevent="updatePerson(peopl.id)" class="btn btn-success">Обновить</a></td>
                </tr>

</template>

<script>
    export default {
        name: "EditComponent",

        props: [
            'peopl'
        ],
        data(){
            return {

                name: null,
                age: null,
                job: '',

            }
        },
        mounted() {

        },
        methods: {

            updatePerson(id) {

                  this.$parent.editPersonId = null;
                axios.patch(`/api/people/${id}`, {name: this.name, age: this.age, job: this.job})
                    .then((res) => {
                       this.$parent.getPeople()
                    })
            },

        },
        computed: {

        }
    }
</script>

<style scoped>

</style>
