<template>
    <div>
        <h1>{{title}}</h1>
        <p>
            Funge
        </p>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            title: 'Order Section',
        }
    },
    mounted() {
        console.log('Component order mounted')
        axios.get('https://jsonplaceholder.typicode.com/todos/1').then(response => console.log(response))
            .catch(function (error) {
                // handle error
                console.log(error);
            });
    }
}
</script>
