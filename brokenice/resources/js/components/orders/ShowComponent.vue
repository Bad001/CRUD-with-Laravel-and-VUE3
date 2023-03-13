<template>
    <div>
        <h1>{{title}} {{order.id}}</h1>
        <table>
            <thead>
            <tr>
                <th>Order ID</th>
                <th>Price</th>
                <th>Acquisition Date</th>
                <th>Customer ID</th>
                <th>Employee ID</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ order.id }}</td>
                <td>{{ order.price }} €</td>
                <td>{{ order.acquisition_date }}</td>
                <td>{{ order.customer_id }}</td>
                <td>{{ order.employee_id }}</td>
                <td>{{ order.description }}</td>
            </tr>
            </tbody>
        </table>
        <a href="/vue3/orders">Back to orders</a>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            title: 'Show Order N.',
            order:[],
            url:''
        }
    },
    mounted() {
        console.log('Show order mounted')
        this.url = window.location.href;
        this.url = this.url.replace('/vue3', '/api/vue3')
        axios.get(this.url).then(response => this.order = response.data)
            .catch(function (error) {
                console.log(error);
            });
    }
}
</script>
