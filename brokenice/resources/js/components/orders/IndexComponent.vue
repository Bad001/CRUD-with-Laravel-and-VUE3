<template>
    <div>
        <h1>{{title}}</h1>
        <table>
            <thead>
            <tr>
                <th>Order ID</th>
                <th>Price</th>
                <th>Acquisition Date</th>
                <th>Customer ID</th>
                <th>Employee ID</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="order in orders">
                <td>{{ order.id }}</td>
                <td>{{ order.price }} €</td>
                <td>{{ order.acquisition_date }}</td>
                <td>{{ order.customer_id }}</td>
                <td>{{ order.employee_id }}</td>
                <td>{{ order.description }}</td>
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
            title: 'Order Section',
            orders:[]
        }
    },
    mounted() {
        console.log('Component order mounted')
        axios.get('http://127.0.0.1/api/vue3/orders').then(response => this.orders = response.data)
            .catch(function (error) {
                console.log(error);
            });
    }
}
</script>
