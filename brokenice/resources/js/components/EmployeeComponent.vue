<template>
    <div>
        <h1>{{title}}</h1>
        <p>
            Funge
        </p>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            title: 'Employee Section',
        }
    },
    mounted() {
        console.log('Component employee mounted')
    }
}
</script>
