<template>
    <div>
        <h1>{{message}}</h1>
        <p>
            Funge
        </p>
    </div>
</template>

<script>
export default {
    data() {
        return {
            message: 'Prova',
        }
    },
    mounted() {
        console.log('Component Index mounted')
    }
}
</script>
