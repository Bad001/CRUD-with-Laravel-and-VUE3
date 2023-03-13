<template>
    <div>
        <h1>{{title}} {{employee.name}} {{employee.surname}}</h1>
        <form @submit.prevent="submitForm">
            <label for="email">Email</label><br>
            <input type="email" id="email" v-model="employee.email" required><br>
            <label for="name">First name</label><br>
            <input type="text" id="name" v-model="employee.name" required><br>
            <label for="surname">Last name</label><br>
            <input type="text" id="surname" v-model="employee.surname" required><br>
            <label for="phone_number">Phone number</label><br>
            <input type="tel" maxlength="10" id="phone_number" v-model="employee.phone_number" required><br>
            <label for="salary_level">Salary level&nbsp;&nbsp;</label>
            <select id="salary_level" v-model="employee.salary_level">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select><br>
            <button type="submit">Submit</button>
        </form>
        <a href="/vue3/employees">Back to employees</a>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            title: 'Edit',
            employee:[],
            url:'',
            response:''
        }
    },
    methods: {
        submitForm() {
            axios.patch('http://127.0.0.1/api/vue3/employees/'+this.employee.id,{
                email: this.employee.email,
                name: this.employee.name,
                surname: this.employee.surname,
                phone_number: this.employee.phone_number,
                salary_level: this.employee.salary_level
            }).then(response => {
                console.log(response);
                this.response = response.data;
                location.href = "/vue3/employees/";
            }).catch(error => {
                console.log(error);
            })
        }
    },
    mounted() {
        console.log('Edit employee mounted')
        this.url = window.location.href;
        this.url = this.url.replace('/vue3', '/api/vue3')
        axios.get(this.url).then(response => this.employee = response.data)
            .catch(function (error) {
                console.log(error);
            });
    }
}
</script>
