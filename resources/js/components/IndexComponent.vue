<template>
    <div >
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Возраст</th>
                <th scope="col">Профессия</th>
                <th scope="col">Редактировать</th>
                <th :class="trigger ? '' : 'd-none'" scope="col">Удалить</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="peopl in people">

                <show-component :peopl=peopl> </show-component>

                <edit-component :peopl="peopl" :ref="`edit_${peopl.id}`"></edit-component>

            </template>
            </tbody>
        </table>
    </div>
</template>

<script>

    import EditComponent from "./EditComponent.vue";
    import ShowComponent from "./ShowComponent.vue";
    export default {
        name: "IndexComponent",
        components:{
            EditComponent,
            ShowComponent
        },
        data(){
            return {
                people: null,
                editPersonId: null,
                name: 'Karlito',
                age: null,
                job: '',
                trigger: true
            }
        },
        mounted() {
          this.getPeople()


        },
        methods: {
            getPeople() {
                axios.get('/api/people')
                    .then((res) => {
                      this.people = res.data
                    })
            },


            updatePerson(id) {
                this.trigger = true;
                  this.editPersonId = null;
                axios.patch(`/api/people/${id}`, {name: this.name, age: this.age, job: this.job})
                    .then((res) => {
                       this.getPeople()
                    })
            },

            isEdit(id){
                 return this.editPersonId === id
            },
            indexLog() {

            }

        },
        computed: {

        }
    }
</script>

<style scoped>

</style>
