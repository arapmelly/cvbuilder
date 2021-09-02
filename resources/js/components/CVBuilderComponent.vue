<template>

    <div>
<!--         <tab-component :resume="resume"></tab-component>-->
        <div class="row">
            <div class="col-lg-4 col-md-4 mt-5">
                <editor-component :resume="resume"></editor-component>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-12 bg-white mt-2 px-3 py-2" id="pdf" style="margin-bottom: 10px">

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
            resume: (localStorage.getItem('resumedata') !== null) ? JSON.parse(localStorage.getItem('resumedata')) : this.resume_data
        }
    },
    mounted(){

        //check if resumedata exists in localstorage
        if(localStorage.getItem('resumedata') !== null){
            console.log('data exists');
            this.resume = JSON.parse(localStorage.getItem('resumedata'));
        } else {
            console.log('no data exists');
            localStorage.setItem('resumedata', JSON.stringify(this.resume_data));
             this.resume = JSON.parse(localStorage.getItem('resumedata'));
        }
    }

}
</script>

