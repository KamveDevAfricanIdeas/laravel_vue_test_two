<template>
    <div class="flex justify-center p-5">
        <div class="content-style">
            <div class="upload-components">
                <input type="file" id="file" name="file" class="file_input font-nunito">
                <!-- <button type="button" class="">Upload</button> -->
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        name: 'Uploader',
        mounted(){
        console.log("upload component added.");
    }
}
</script>
<style scoped>
</style>