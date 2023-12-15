<template>
<div>
    <div> Color: {{obj.color}}</div>
    <div> Number: {{obj.number > 10 ? 'more' : 'loss'}} </div>
    <div> Is published: {{ obj.isPublish ? 'Publish' : 'Not Publish'}}</div>
</div>
</template>

<script>
    export default {
        name: "SomeComponent",

        data(){
            return {

            }
        },
        props: [
           'obj'
        ],
        methods: {

        },

        mounted() {
           this.$parent.$parent.parentLog(11111)

        }
    }
</script>

<style scoped>

</style>
