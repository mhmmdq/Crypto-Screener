<template>

    <div class="co">
        <my-header></my-header>

        <section class="card-q">
            <section>
                <p>
                    Get everything with Api
                </p>
                <h2>
                    Easy to use in your software
                </h2>
                <div>

                </div>
            </section>
            <section>

                <div class="code">
                        # Code Place ...
                </div>

            </section>
        </section>

        <my-list v-if="loading" :cryptos="cryptos"></my-list>
        <loading v-if="!loading"></loading>
    </div>



</template>

<script>
    import Header from "./Header";
    import MyList from "./MyList";
    import loading from "./loading";

    export default {

        components : {
            'myHeader' : Header ,
            'myList' : MyList,
            'loading' : loading
        },
        data() {
            return {
                loading : false,
                cryptos : []
            }
        },mounted() {
            axios.get('/api/get')
                .then((response) => {
                    this.cryptos = response.data;
                    this.loading = true;
                })
                .catch(error => console.log(error));
        }

    }
</script>
