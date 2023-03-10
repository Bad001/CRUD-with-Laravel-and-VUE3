<template>
    <div>
        <h1>{{title}}</h1>
        <table>
            <thead>
            <tr>
                <td>Order ID</td>
                <td>| Price</td>
                <td>| Acquisition Date</td>
                <td>| Customer ID</td>
                <td>| Employee ID</td>
                <td>| Description</td>
            </tr>
            </thead>
            <tbody>
            <tr v-for="order in orders">
                <td>{{ order.id }}</td>
                <td>| {{ order.price }} €</td>
                <td>| {{ order.acquisition_date }}</td>
                <td>| {{ order.customer_id }}</td>
                <td>| {{ order.employee_id }}</td>
                <td>| {{ order.description }}</td>
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
        axios.get('http://127.0.0.1/vue3/api/orders').then(response => this.orders = response.data)
            .catch(function (error) {
                console.log(error);
            });
    }
}
</script>
