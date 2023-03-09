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
            title: 'Customer Section',
        }
    },
    mounted() {
        console.log('Component customer mounted')
    }
}
</script>
