
<template>

    <div>
        <h1>Pagina dettaglio tag: {{ this.$route.params.name }}</h1>

        <TagCard/>
    </div>

</template>

<script>

import TagCard from '../../../components/tags/TagCard.vue'

export default {

    name: 'TagShow',
    components: {

        TagCard,
    }
}

</script>
