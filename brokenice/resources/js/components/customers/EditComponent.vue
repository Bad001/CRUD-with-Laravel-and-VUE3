<template>
    <div>
        <h1>{{title}} {{customer.name}} {{customer.surname}}</h1>
        <form @submit.prevent="submitForm">
            <label for="email">Email</label><br>
            <input type="email" id="email" v-model="customer.email" required><br>
            <label for="name">First name</label><br>
            <input type="text" id="name" v-model="customer.name" required><br>
            <label for="surname">Last name</label><br>
            <input type="text" id="surname" v-model="customer.surname" required><br>
            <label for="phone_number">Phone number</label><br>
            <input type="tel" maxlength="10" id="phone_number" v-model="customer.phone_number" required><br>
            <button type="submit">Submit</button>
        </form>
        <a href="/vue3/customers">Back to customers</a>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            title: 'Edit',
            customer:[],
            url:'',
            response:''
        }
    },
    methods: {
        submitForm() {
            axios.patch('http://127.0.0.1/api/vue3/customers/'+this.customer.id,{
                email: this.customer.email,
                name: this.customer.name,
                surname: this.customer.surname,
                phone_number:this.customer.phone_number
            }).then(response => {
                console.log(response);
                this.response = response.data;
                location.href = "/vue3/customers/";
            }).catch(error => {
                console.log(error);
            })
        }
    },
    mounted() {
        console.log('Edit customer mounted')
        this.url = window.location.href;
        this.url = this.url.replace('/vue3', '/api/vue3')
        axios.get(this.url).then(response => this.customer = response.data)
            .catch(function (error) {
                console.log(error);
            });
    }
}
</script>
