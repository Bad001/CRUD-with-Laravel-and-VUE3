<template>
    <div>
        <h1>{{title}}</h1>
        <a href="/vue3/customers">Customers&nbsp;&nbsp;</a>
        <a href="/vue3/employees">Employees&nbsp;&nbsp;</a>
        <a href="/vue3/orders">Orders</a>
    </div>
</template>

<script>
export default {
    data() {
        return {
            title: 'Index',
            link: 'customers'
        }
    },
    mounted() {
        console.log('Component Index mounted')
    }
}
</script>
