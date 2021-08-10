<template>
   

    <div>

         <br>
                        <h4>{{ resume.basics.name }}</h4>
                        <span>{{ resume.basics.label }}</span>
                        <br>
                        <span>Address : {{ resume.basics.location.address }}</span>
                        <br>
                        <span>Phone Number : {{ resume.basics.phone }}</span>
                        <br>
                        <span>Email : {{ resume.basics.email }}</span>
                        
                        <br>

                        <hr>

                        <h4>Objective </h4>
                        <span>{{ resume.basics.summary }}</span>
                        <br>

                        <hr>
                        <h4>Skills </h4>
                        <div class="row" >
                            <div class="col-sm-8">
                                <ul v-for="skill in resume.skills" :key="skill.name">
                                    <li>{{skill.name}} - {{skill.level}} : {{skill.keywords}}</li>
                                </ul>
                            </div>
                           
                            
                        </div>


                        <hr>
                         <h4>Work Experience </h4>
                        <div class="row mb-3 mt-3" v-for="work in resume.work" :key="work.name">
                            <div class="col-sm-4">
                                {{work.startDate}} - {{work.endDate}}
                            </div>
                            <div class="col-sm-8">
                                {{work.name}} <br/>
                                {{work.position}}<br/>
                                 {{work.summary}} <br/>
                                
                                
                            </div>   

                        </div>

                        <hr>

                        <h4>Education Qualification </h4>
                        <div class="row mb-3 mt-3" v-for="education in resume.education" :key="education.institution">
                            <div class="col-sm-4">
                                {{education.startDate}} - {{education.endDate}}
                            </div>
                            <div class="col-sm-8">
                                {{education.institution}} <br/>
                                {{education.studyType}}<br/>
                                 {{education.area}} <br/>
                                {{education.score}}
                                
                            </div>   

                        </div>

                        

                        

                        <hr>
                        <h4> References </h4>
                        <div class="row mb-3 mt-3" v-for="reference in resume.references" :key="reference.name">
                            <div class="col-sm-12">
                                
                                <span>{{ reference.name }}</span>
                                <br>
                                <span> {{ reference.email }} </span>
                                <br>
                                <span> {{ reference.company }} </span>
                                
                            </div>
                        </div>


    </div>
</template>

<script>
export default {
  name: "PreviewComponent",
  props: {
      resume: {
        type: Object,
        required: true
      }
    }
}
</script>

