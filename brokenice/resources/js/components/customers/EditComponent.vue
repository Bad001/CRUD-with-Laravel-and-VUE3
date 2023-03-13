<template>
    <div>
        <h1>{{title}}</h1>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            title: 'Edit a customer',
            customers:[]
        }
    },
    mounted() {
        console.log('Edit customer mounted')
        axios.patch('http://127.0.0.1/api/vue3/customers/{id}').then(response => this.customers = response.data)
            .catch(function (error) {
                console.log(error);
            });
    }
}
</script>
