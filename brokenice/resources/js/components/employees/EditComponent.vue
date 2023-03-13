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
            title: 'Edit an Employee',
            employees:[]
        }
    },
    mounted() {
        console.log('Edit employee mounted')
        axios.patch('http://127.0.0.1/api/vue3/employees/{id}').then(response => this.employees = response.data)
            .catch(function (error) {
                console.log(error);
            });
    }
}
</script>
