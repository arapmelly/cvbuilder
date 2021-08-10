<template>

    <div>
<!--         <tab-component :resume="resume"></tab-component>-->
        <div class="row">
            <div class="col-lg-4 col-md-4 mt-5">
                <editor-component :resume="resume"></editor-component>
            </div>

            <div class="col-lg-8 col-md-4 col-sm-12 bg-white mt-5 px-3 py-5" id="pdf">

                <preview-component :resume="resume"></preview-component>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    name: "CVBuilderComponent",
    props: {
        resume_data: {
            type: Object,
            required: true
        }
    },
    data() {
        return {
            resume: this.resume_data
        }
    },
}
</script>

