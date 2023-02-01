<template>


    <div>

        <nav aria-label="Page navigation example">
            <ul class="pagination">

                <li @click="$emit('on-page-change', pagination.currentPage - 1)" v-if="pagination.currentPage > 1" class="page-item" role="button">

                    <span class="page-link" role="button">Previous</span>

                </li>

                <li @click="$emit('on-page-change', page)" v-for="page in pagination.lastPage" :key="page" class="page-item" role="button">

                    <span class="page-link" role="button">{{ page }}</span>

                </li>


                <li  @click="$emit('on-page-change', pagination.currentPage + 1)" v-if="pagination.currentPage < pagination.lastPage" class="page-item" role="button">

                    <span class="page-link" role="button">Next</span>

                </li>
            </ul>
        </nav>

    </div>


</template>


<script>


export default {

    name:'Pagination',

    props: ['pagination'],

}
</script>

<style scoped lang="scss">



</style>
