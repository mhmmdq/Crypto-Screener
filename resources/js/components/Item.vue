<template>

    <tr>
        <td>
            {{ name }}
            <p> {{ fullName }} </p>
        </td>
        <td>{{ price }}</td>
        <td>{{ change }}</td>
        <td><img :src="imgUrl" :alt="name"></td>
    </tr>

</template>

<script>
export default {
    props : ['name' , 'price' , 'change'  , 'fullName' , 'color'],
    data() {
        return {
            imgUrl : `https://chart.bitscreener.com/v1/sparkline/${this.fullName.toLowerCase()}?tf=1w&color=${this.color}&lineWidth=2.5`
        }
    }
}
</script>

<style scoped>

</style>
