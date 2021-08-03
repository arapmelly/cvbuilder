<template>
    <div>

    <div class="row">

                
                <div class="col-4">
                    <editor-component :resume="resume"></editor-component>
                </div>

                <div class="col-8 bg-white" id="pdf">

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
    data () {
    return {
      resume: this.resume_data
    }
  },
}
</script>

