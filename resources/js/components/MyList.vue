<template>

    <section>
        <table>
            <caption>Collected from <a href="https://bitscreener.com">bitscreener.com</a></caption>
            <thead>
            <tr>
                <th scope="col">Market</th>
                <th scope="col">Price</th>
                <th scope="col">Change 24H</th>
                <th scope="col">Dynamic</th>
            </tr>
            </thead>
            <tbody>
                <my-item v-for="crypto in cryptos" :key="crypto.name" :name="crypto.name" :price="crypto.price" :color="crypto.color" :change="crypto.change" :full-name="crypto.fullName" ></my-item>
            </tbody>
        </table>
    </section>
</template>

<script>
import Item from "./Item";
export default {

    components : {
        "myItem" : Item
    },props : ['cryptos']



}
</script>

<style scoped>
    section {
        margin:50px auto;
    }
</style>
