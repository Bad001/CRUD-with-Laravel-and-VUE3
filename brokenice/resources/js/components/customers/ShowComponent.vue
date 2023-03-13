<template>
    <div>
        <h1>{{title}} {{customer.name}} {{customer.surname}}</h1>
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
        <a href="/vue3/customers">Back to customers</a>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            title: 'Show',
            customer:[],
            url: ''
        }
    },
    mounted() {
        console.log('Show customer mounted')
        this.url = window.location.href;
        this.url = this.url.replace('/vue3', '/api/vue3')
        axios.get(this.url).then(response => this.customer = response.data)
            .catch(function (error) {
                console.log(error);
            });
    }
}
</script>
