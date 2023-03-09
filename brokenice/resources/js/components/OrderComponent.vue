<template>
    <div>
        <h1>{{title}}</h1>
        <p>
            Funge
        </p>
    </div>
</template>

<script>
export default {
    data() {
        return {
            title: 'Order Section',
        }
    },
    mounted() {
        console.log('Component order mounted')
    }
}
</script>
