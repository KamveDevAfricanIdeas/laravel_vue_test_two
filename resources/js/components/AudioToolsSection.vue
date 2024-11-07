<template>
    <!-- TODO:
        make each button dynamic and load different labels. {"master track", "slow+reverb", "speedup", "cleanup"}
    -->
    <div class="content-style gap-3">
        <audio-component v-for="(name, index) in buttonNames" :key="index" :btnLabel="name"/>
    </div>
</template>
<script>
import AudioComponent from './AudioComponent.vue';

export default {
    components: {
        AudioComponent
    },
    data() {
            return {
                buttonNames: ["Master Track", "Slow+Reverb", "Speedup", "Cleanup"]
            };
        }
};
</script>