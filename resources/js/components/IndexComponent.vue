<template>
    <div >
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Возраст</th>
                <th scope="col">Профессия</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="peopl in people">
                <th scope="row">1</th>
                <td>{{peopl.name}}</td>
                <td>{{peopl.age}}</td>
                <td>{{peopl.job}}</td>
            </tr>

            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name: "IndexComponent",

        data(){
            return {
                people: null,

            }
        },
        mounted() {
          this.getPeople()
        },
        methods: {
            getPeople () {
                axios.get('/api/people')
                    .then((res) => {
                      this.people = res.data
                    })
            }
        },
        computed: {

        }
    }
</script>

<style scoped>

</style>
