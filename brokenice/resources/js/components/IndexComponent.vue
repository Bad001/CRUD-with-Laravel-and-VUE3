<template>
    <div>
        <h1>{{title}}</h1>
    </div>
</template>

<script>
export default {
    data() {
        return {
            title: 'Index',
        }
    },
    mounted() {
        console.log('Component Index mounted')
    }
}
</script>
<style>
html, body {
    background-color: #636b6f;
    color: #fff;
    font-weight: 200;
    height: 100vh;
}
</style>
