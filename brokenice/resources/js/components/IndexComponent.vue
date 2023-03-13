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
