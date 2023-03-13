<template>
    <div>
        <h1>{{title}}</h1>
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
            <tr v-for="customer in customers">
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
            title: 'Customer Section',
            customers:[]
        }
    },
    mounted() {
        console.log('Component customer mounted')
        axios.get('http://127.0.0.1/api/vue3/customers').then(response => this.customers = response.data)
            .catch(function (error) {
                console.log(error);
            });
    }
}
</script>
