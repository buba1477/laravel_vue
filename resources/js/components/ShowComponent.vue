<template>

                <tr :class="this.$parent.isEdit(peopl.id) ? 'd-none' : ''">
                    <th scope="row">{{peopl.id}}</th>
                    <td>{{peopl.name}}</td>
                    <td>{{peopl.age}}</td>
                    <td>{{peopl.job}}</td>
                    <td><a href="#" @click.prevent="changeEditPersonId(peopl.id, peopl.name, peopl.age, peopl.job)" class="btn btn-success">Добавить</a></td>
                    <td><a href="#" @click.prevent="deletePerson(peopl.id)" class="btn btn-danger">Удалить</a></td>
                </tr>

</template>

<script>


    export default {
        name: "ShowComponent",
        components:{

        },
        props: [
            'peopl'
        ],
        data(){
            return {

            }
        },
        mounted() {

        },
        methods: {

            changeEditPersonId(id, name, age, job ){
                this.$parent.editPersonId = id

                let editName = `edit_${id}`
                let fullName = this.$parent.$refs[editName][0]

                fullName.name = name
                fullName.age = age
                fullName.job = job
            },
            deletePerson(id ){

                axios.delete(`/api/people/${id}`)
                    .then((res) => {
                        this.$parent.getPeople()
                    })
            }

            },

        computed: {

        }
    }
</script>

<style scoped>

</style>
