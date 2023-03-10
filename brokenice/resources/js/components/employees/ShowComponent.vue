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
            title: 'Show an employee',
            employees:[]
        }
    },
    mounted() {
        console.log('Show employee mounted')
        axios.get('http://127.0.0.1/api/vue3/employees').then(response => this.employees = response.data)
            .catch(function (error) {
                console.log(error);
            });
    }
}
</script>
