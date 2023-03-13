<template>
    <div>
        <h1>{{title}}</h1>
        <a href="/vue3">Back to index</a>
        <a href="/vue3/employees/create">| Create an employee</a>
        <table>
            <thead>
            <tr>
                <th>Employee ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Salary Level</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="employee in employees">
                <td>{{ employee.id }}</td>
                <td>{{ employee.name }}</td>
                <td>{{ employee.surname }}</td>
                <td>{{ employee.phone_number }}</td>
                <td>{{ employee.email }}</td>
                <td>{{ employee.salary_level }}</td>
                <td>
                    <button type="submit" @click="showElement(employee.id)">Show</button>
                    <button type="submit" @click="editElement(employee.id)">Edit</button>
                    <button type="submit" @click="deleteElement(employee.id)">Delete</button>
                </td>
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
    methods: {
        showElement(id) {
            location.href = "/vue3/employees/"+id;
        },
        editElement(id) {
            location.href = "/vue3/employees/"+id+"/edit";
        },
        deleteElement(id) {
            axios.delete('http://127.0.0.1/api/vue3/employees/'+id).then(location.reload())
                .catch(function (error) {
                    console.log(error);
                });
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
