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
            title: 'Show a customer',
            customers:[]
        }
    },
    mounted() {
        console.log('Show customer mounted')
        axios.get('http://127.0.0.1/api/vue3/customers').then(response => this.customers = response.data)
            .catch(function (error) {
                console.log(error);
            });
    }
}
</script>
