<template>
    <div>
        <h1>{{title}}</h1>
        <table>
            <thead>
            <tr>
                <td>Employee ID</td>
                <td>| First Name</td>
                <td>| Last Name</td>
                <td>| Phone Number</td>
                <td>| Email</td>
                <td>| Salary Level</td>
            </tr>
            </thead>
            <tbody>
            <tr v-for="employee in employees">
                <td>{{ employee.id }}</td>
                <td>| {{ employee.name }}</td>
                <td>| {{ employee.surname }}</td>
                <td>| {{ employee.phone_number }}</td>
                <td>| {{ employee.email }}</td>
                <td>| {{ employee.salary_level }}</td>
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
            title: 'Employee Section',
            employees:[]
        }
    },
    mounted() {
        console.log('Component employees mounted')
        axios.get('http://127.0.0.1/api/vue3/employees').then(response => this.employees = response.data)
            .catch(function (error) {
                console.log(error);
            });
    }
}
</script>
