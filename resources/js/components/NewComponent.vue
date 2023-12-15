<template >

    <div>

        <CreateComponent></CreateComponent>

        <IndexComponent ref="index"></IndexComponent>
<!--        <table class="table">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th scope="col">№</th>-->
<!--                <th scope="col">Имя</th>-->
<!--                <th scope="col">Вораст</th>-->
<!--                <th scope="col">Работа</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody v-for="person in persons">-->
<!--            <tr>-->
<!--                <th scope="row">{{person.id}}</th>-->
<!--                <td>{{person.name}}</td>-->
<!--                <td>{{person.age}}</td>-->
<!--                <td>{{person.job}}</td>-->
<!--            </tr>-->
<!--            </tbody>-->
<!--        </table>-->

    </div>

</template>



<script>

    import CreateComponent from "./CreateComponent.vue";
    import IndexComponent from  "./IndexComponent.vue"
    export default {
        name: "NewComponent",
        components: {
            CreateComponent,
            IndexComponent
        },
        data() {
            return {
                persons: null,
                count:0
            }
        },
        mounted(){

        },
        methods: {
           parentLog(a) {

           }
        },

        computed: {


        }
    }
</script>

<style scoped>

</style>
