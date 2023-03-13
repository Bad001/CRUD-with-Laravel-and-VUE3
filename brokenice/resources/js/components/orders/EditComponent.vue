<template>
    <div>
        <h1>{{title}} {{order.id}}</h1>
        <form @submit.prevent="submitForm">
            <label for="price">Price</label><br>
            <input type="number" placeholder="EUR currency" min="0" step="any" id="price" v-model="order.price" required><br>
            <label for="acquisition_date">Acquisition date</label><br>
            <input type="date" id="acquisition_date" v-model="order.acquisition_date" required><br>
            <label for="customer_id">Customer id</label><br>
            <input type="number" id="customer_id" v-model="order.customer_id" required><br>
            <label for="employee_id">Employee id</label><br>
            <input type="number" id="employee_id" v-model="order.employee_id" required><br>
            <label for="description">Description</label><br>
            <textarea id="description" v-model="order.description"></textarea><br>
            <button type="submit">Submit</button>
        </form>
        <a href="/vue3/orders">Back to orders</a>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            title: 'Edit order N.',
            order:[],
            url:'',
            response:''
        }
    },
    methods: {
        submitForm() {
            axios.patch('http://127.0.0.1/api/vue3/orders/'+this.order.id, {
                price: this.order.price,
                acquisition_date: this.order.acquisition_date,
                customer_id: this.order.customer_id,
                employee_id: this.order.employee_id,
                description: this.order.description
            }).then(response => {
                console.log(response);
                this.response = response.data;
                location.href = "/vue3/orders";
            }).catch(error => {
                console.log(error);
            })
        }
    },
    mounted() {
        console.log('Edit order mounted')
        this.url = window.location.href;
        this.url = this.url.replace('/vue3', '/api/vue3')
        axios.get(this.url).then(response => this.order = response.data)
            .catch(function (error) {
                console.log(error);
            });
    }
}
</script>
