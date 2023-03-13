<template>
    <div>
        <h1>{{title}} {{employee.name}} {{employee.surname}}</h1>
        <table>
            <thead>
            <tr>
                <th>Employee ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Salary Level</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ employee.id }}</td>
                <td>{{ employee.name }}</td>
                <td>{{ employee.surname }}</td>
                <td>{{ employee.phone_number }}</td>
                <td>{{ employee.email }}</td>
                <td>{{ employee.salary_level }}</td>
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
            title: 'Show',
            employee:[]
        }
    },
    mounted() {
        console.log('Show employee mounted')
        this.url = window.location.href;
        this.url = this.url.replace('/vue3', '/api/vue3')
        axios.get(this.url).then(response => this.employee = response.data)
            .catch(function (error) {
                console.log(error);
            });
    }
}
</script>
