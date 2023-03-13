<template>
    <div>
        <h1>{{title}} {{name}} {{surname}}</h1>
        <form @submit.prevent="submitForm">
            <label for="email">Email</label><br>
            <input type="email" id="email" v-model="email" required><br>
            <label for="name">First name</label><br>
            <input type="text" id="name" v-model="name" required><br>
            <label for="surname">Last name</label><br>
            <input type="text" id="surname" v-model="surname" required><br>
            <label for="phone_number">Phone number</label><br>
            <input type="tel" maxlength="10" id="phone_number" v-model="phone_number" required><br>
            <button type="submit">Submit</button>
        </form>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            title: 'Create',
            email: '',
            name: '',
            surname:'',
            phone_number:'',
            response:''
        }
    },
    methods: {
        submitForm() {
            axios.post('http://127.0.0.1/api/vue3/customers', {
                email: this.email,
                name: this.name,
                surname: this.surname,
                phone_number:this.phone_number
            }).then(response => {
                console.log(response);
                this.response = response.data;
            }).catch(error => {
                console.log(error);
            })
        }
    },
    mounted() {
        console.log('Create customer mounted')
    }
}
</script>
