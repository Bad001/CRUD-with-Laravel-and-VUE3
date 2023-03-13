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
            title: 'Edit a order',
            orders:[]
        }
    },
    mounted() {
        console.log('Edit order mounted')
        axios.patch('http://127.0.0.1/api/vue3/orders/{id}').then(response => this.orders = response.data)
            .catch(function (error) {
                console.log(error);
            });
    }
}
</script>
