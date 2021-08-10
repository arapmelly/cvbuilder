<template>
    <div class="input-group mt-3">
    <textarea
        class="form-control"
        rows="4"
        placeholder="Short description of yourself"
        v-model="resume.basics.summary"
        aria-label="With textarea"
    ></textarea>
    </div>
</template>
<script>
export default {
    mounted() {
        console.log("Component mounted.");
    },
    props: {
        resume: {
            type: Object,
            required: true,
        },
    },

};
</script>
