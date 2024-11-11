<template>
    <div class="flex flex-col justify-center items-center">
        <img class="mb-5 w-20 h-20" :src="btnImageSrc" alt="button image">
        <button type="button" class="tool-button" name="default-tool">{{btnLabel}}</button>
    </div>
</template>
<script>
    export default{
        name: 'AudioComponent',
        props:{
            btnLabel: String,
            btnImageSrc: String
        },
}
</script>
<style scoped>
</style>