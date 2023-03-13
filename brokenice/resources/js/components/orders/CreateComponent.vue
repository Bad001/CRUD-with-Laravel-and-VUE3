<template>
    <div>
        <h1>{{title}}</h1>
        <form @submit.prevent="submitForm">
            <label for="price">Price</label><br>
            <input type="number" placeholder="EUR currency" min="0" step="any" id="price" v-model="price" required><br>
            <label for="acquisition_date">Acquisition date</label><br>
            <input type="date" id="acquisition_date" v-model="acquisition_date" required><br>
            <label for="customer_id">Customer id</label><br>
            <input type="number" id="customer_id" v-model="customer_id" required><br>
            <label for="employee_id">Employee id</label><br>
            <input type="number" id="employee_id" v-model="employee_id" required><br>
            <label for="description">Description</label><br>
            <textarea id="description" v-model="description"></textarea><br>
            <button type="submit">Submit</button>
        </form>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            title: 'Create a order',
            price: '',
            acquisition_date: '',
            customer_id:'',
            description:'',
            employee_id:'',
            response:''
        }
    },
    methods: {
        submitForm() {
            axios.post('http://127.0.0.1/api/vue3/orders', {
                price: this.price,
                acquisition_date: this.acquisition_date,
                customer_id: this.customer_id,
                employee_id: this.employee_id,
                description: this.description
            }).then(response => {
                console.log(response);
                this.response = response.data;
            }).catch(error => {
                console.log(error);
            })
        }
    },
    mounted() {
        console.log('Create order mounted')
    }
}
</script>
