<template>
    <div>
        <h1>Welcome {{ name }} 🤘 </h1>
    </div>
    
</template>
<script>
export default{
    name: 'Welcome',
    props: ['name'],
    mounted() {
            console.log('welcome component mounted.')
        }
}
</script>
<style scoped>
div{
    display: grid;
    justify-content: center;
    margin: auto;
    gap: 5px;
}
h1{
    font-size: 25px;
}
</style>