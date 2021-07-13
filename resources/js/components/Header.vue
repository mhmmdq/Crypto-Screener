<template>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#"> {{ applicationData.name }} </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" :href="applicationData.baseUrl">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Resources
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="mailto:mhmmdq@mhmmdq.ir">Development</a>
                            <a class="dropdown-item" target="_blank" href="https://dribbble.com/shots/16009156-LocalTrade-cryptocurrency-exchange-trading">The spiritual owner of the design</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://github.com/mhmmdq/Crypto-Screener">Github page</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

</template>

<script>
export default {
    data() {
        return {
            applicationData : window.applicationData ,
            search : ''
        }
    }
}
</script>
