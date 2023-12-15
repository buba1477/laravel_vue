<template>
    <div class="w-50">
    <div class="mb-3">

        <input type="text" class="form-control" id="name" v-model="name" placeholder="name">
    </div>
    <div class="mb-3">

        <input type="number" class="form-control" id="age" v-model="age" placeholder="age">
    </div>
    <div class="mb-3">

        <input type="text" class="form-control" id="job" v-model="job" placeholder="job">
    </div>
    <div class="mb-3">
        <input @click.prevent="addPerson()" type="submit" class="btn btn-primary" value="Добавить" placeholder="name">
    </div>
    </div>

    <SomeComponent :obj="obj"></SomeComponent>
</template>


<script>

    import SomeComponent from "./SomeComponent.vue";

    export default {
        name: "CreateComponent",
        components : {
            SomeComponent
        },

        data(){
            return {
                name: null,
                age:null,
                job:null,
                obj: {
                    color: 'black',
                    number: 3,
                    isPublish: false
                }
            }
        },
        methods: {
            addPerson() {
                axios.post('/api/people', {name: this.name, age: this.age, job: this.job})
                    .then((res) => {
                        this.name = null;
                        this.age = null;
                        this.job = null;
                        this.$parent.$refs.index.getPeople()
                    })
            }
        },

        mounted() {

        }
    }
</script>

<style scoped>

</style>
