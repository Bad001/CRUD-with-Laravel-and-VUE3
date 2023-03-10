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
            title: 'Show a order',
            orders:[]
        }
    },
    mounted() {
        console.log('Show order mounted')
        axios.get('http://127.0.0.1/api/vue3/orders').then(response => this.orders = response.data)
            .catch(function (error) {
                console.log(error);
            });
    }
}
</script>
