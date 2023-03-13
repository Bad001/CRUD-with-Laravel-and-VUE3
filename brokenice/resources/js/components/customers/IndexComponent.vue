<template>
    <div>
        <h1>{{title}}</h1>
        <a href="/vue3">Back to index</a>
        <a href="/vue3/customers/create">| Create a customer</a>
        <table>
            <thead>
            <tr>
                <th>Customer ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="customer in customers">
                <td>{{ customer.id }}</td>
                <td>{{ customer.name }}</td>
                <td>{{ customer.surname }}</td>
                <td>{{ customer.phone_number }}</td>
                <td>{{ customer.email }}</td>
                <td>
                    <button type="submit" @click="showElement(customer.id)">Show</button>
                    <button type="submit" @click="editElement(customer.id)">Edit</button>
                    <button type="submit" @click="deleteElement(customer.id)">Delete</button>
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
            title: 'Customer Section',
            customers:[]
        }
    },
    methods: {
        showElement(id) {
            location.href = "/vue3/customers/"+id;
        },
        editElement(id) {
            location.href = "/vue3/customers/"+id+"/edit";
        },
        deleteElement(id) {
            axios.delete('http://127.0.0.1/api/vue3/customers/'+id).then(location.reload())
                .catch(function (error) {
                    console.log(error);
                });
        }
    },
    mounted() {
        console.log('Component customer mounted')
        axios.get('http://127.0.0.1/api/vue3/customers').then(response => this.customers = response.data)
            .catch(function (error) {
                console.log(error);
            });
    }
}
</script>
