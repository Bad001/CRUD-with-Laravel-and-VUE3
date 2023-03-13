<template>
    <div>
        <h1>{{title}} {{name}} {{surname}}</h1>
        <table>
            <thead>
            <tr>
                <th>Customer ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ customer.id }}</td>
                <td>{{ customer.name }}</td>
                <td>{{ customer.surname }}</td>
                <td>{{ customer.phone_number }}</td>
                <td>{{ customer.email }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            title: 'Show',
            customer:[]
        }
    },
    methods: {
        getLastNumberOfString(str){
            var allNumbers = str.replace(/[^0-9]/g, ' ').trim().split(/\s+/);
            return parseInt(allNumbers[allNumbers.length - 1], 10);
        }
    },
    mounted() {
        console.log('Show customer mounted')
        let url;
        url = window.location.href;
        url = url.replace('/vue3', '/api/vue3')
        axios.get(url).then(response => this.customer = response.data)
            .catch(function (error) {
                console.log(error);
            });
    }
}
</script>
