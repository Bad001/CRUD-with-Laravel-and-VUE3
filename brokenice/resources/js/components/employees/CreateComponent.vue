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
            <label for="salary_level">Salary level&nbsp;&nbsp;</label>
            <select id="salary_level" v-model="salary_level">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select><br>
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
            salary_level:'1',
            response:''
        }
    },
    methods: {
        submitForm() {
            axios.post('http://127.0.0.1/api/vue3/employees', {
                email: this.email,
                name: this.name,
                surname: this.surname,
                phone_number: this.phone_number,
                salary_level: this.salary_level
            }).then(response => {
                console.log(response);
                this.response = response.data;
            }).catch(error => {
                console.log(error);
            })
        }
    },
    mounted() {
        console.log('Create employee mounted')
    }
}
</script>
