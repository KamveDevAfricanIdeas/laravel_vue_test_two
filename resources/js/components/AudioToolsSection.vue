<template>
    <div class="content-style gap-3">
        <audio-component v-for="n in 4" :key="n"/>
    </div>
</template>
<script>
import AudioComponent from './AudioComponent.vue';

export default {
    components: {
        AudioComponent
    }
};
</script>