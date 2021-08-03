<nav>
                            <div class="row nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-personal-tab" data-toggle="tab" href="#nav-personal" role="tab" aria-controls="nav-personal"
                                    aria-selected="true">Personal</a>
                                <a class="nav-item nav-link" id="nav-objective-tab" data-toggle="tab" href="#nav-objective" role="tab" aria-controls="nav-objective"
                                    aria-selected="false">Objective</a>
                                <a class="nav-item nav-link" id="nav-educational-tab" data-toggle="tab" href="#nav-educational" role="tab" aria-controls="nav-educational"
                                    aria-selected="false">Education</a>
                                <a class="nav-item nav-link" id="nav-achievement-tab" data-toggle="tab" href="#nav-achievement" role="tab" aria-controls="nav-achievement"
                                    aria-selected="false">Achievements</a>
                                <a class="nav-item nav-link" id="nav-experience-tab" data-toggle="tab" href="#nav-experience" role="tab" aria-controls="nav-experience"
                                    aria-selected="false">Work Experience</a>
                            </div>
                        </nav>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-personal" role="tabpanel" aria-labelledby="nav-personal-tab">
                                <div class="row input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Name" v-model="name" />
                                </div>
                                <div class="row input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Designation" v-model="designation" />
                                </div>
                                <div class="row input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Address" v-model="address" />
                                </div>
                                <div class="row input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Phone No." v-model="phone" />
                                </div>
                                <div class="row input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Email Id" v-model="email" />
                                </div>
                                <label for="dob">Date of Birth</label>
                                <div class="row input-group mb-3">
                                    <input type="date" class="form-control" id="dob" v-model="date" />
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-objective" role="tabpanel" aria-labelledby="nav-objective-tab">
                                <div class="row input-group">
                                    <textarea class="form-control" rows="4" placeholder="Short description of yourself" v-model="objective" aria-label="With textarea"></textarea>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-educational" role="tabpanel" aria-labelledby="nav-educational-tab">
                                <h4>School</h4>
                                <label for="sdate">Start Date</label>
                                <div class="row input-group mb-3">
                                    <input type="date" class="form-control" id="sdate" placeholder="Start Date" v-model="sdate" />
                                </div>
                                <label for="edate">End Date</label>
                                <div class="row input-group mb-3">
                                    <input type="date" class="form-control" id="edate" placeholder="End Date" v-model="edate" />
                                </div>
                                <div class="row input-group mb-3">
                                    <input type="text" class="form-control" placeholder="School Name" v-model="schoolname" />
                                </div>
                                <div class="row input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Location" v-model="schoolocation" />
                                </div>
                                <div class="row input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Percentage" v-model="schoolscore" />
                                </div>

                                <h4>High School</h4>
                                <label for="sdate1">Start Date</label>
                                <div class="row input-group mb-3">
                                    <input type="date" class="form-control" id="sdate1" placeholder="Start Date" v-model="sdate1" />
                                </div>
                                <label for="edate1">End Date</label>
                                <div class="row input-group mb-3">
                                    <input type="date" class="form-control" id="edate1" placeholder="End Date" v-model="edate1" />
                                </div>
                                <div class="row input-group mb-3">
                                    <input type="text" class="form-control" placeholder="High School Name" v-model="hschoolname" />
                                </div>
                                <div class="row input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Location" v-model="hschoolocation" />
                                </div>
                                <div class="row input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Percentage" v-model="hschoolscore" />
                                </div>
                                <h4>College</h4>
                                <label for="sdate">Start Date</label>
                                <div class="row input-group mb-3">
                                    <input type="date" class="form-control" id="sdate" placeholder="Start Date" v-model="sdate2" />
                                </div>
                                <label for="edate">End Date</label>
                                <div class="row input-group mb-3">
                                    <input type="date" class="form-control" id="edate" placeholder="End Date" v-model="edate2" />
                                </div>
                                <div class="row input-group mb-3">
                                    <input type="text" class="form-control" placeholder="College Name" v-model="collegename" />
                                </div>
                                <div class="row input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Location" v-model="collegelocation" />
                                </div>
                                <div class="row input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Pointer" v-model="collegescore" />
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-achievement" role="tabpanel" aria-labelledby="nav-achievement-tab">
                                <div class="row input-group">
                                    <textarea class="form-control" rows="3" placeholder="Add Description of yours Acheivements" v-model="ach1" aria-label="With textarea"></textarea>
                                </div>
                                <div class="row input-group">
                                    <textarea class="form-control" rows="3" placeholder="Add Description of yours Acheivements" v-model="ach2" aria-label="With textarea"></textarea>
                                </div>
                                <div class="row input-group">
                                    <textarea class="form-control" rows="3" placeholder="Add Description of yours Acheivements" v-model="ach3" aria-label="With textarea"></textarea>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-experience" role="tabpanel" aria-labelledby="nav-experience-tab">
                                <h4>Company #1</h4>
                                <div class="row input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Company Name" v-model="companyname1" />
                                </div>
                                <div class="row input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Designation" v-model="comdesignation1" />
                                </div>
                                <label for="sdate">Start Date</label>
                                <div class="row input-group mb-3">
                                    <input type="date" class="form-control" id="sdate" placeholder="Start Date" v-model="sdate3" />
                                </div>
                                <label for="edate">End Date</label>
                                <div class="row input-group mb-3">
                                    <input type="date" class="form-control" id="edate" placeholder="End Date" v-model="edate3" />
                                </div>
                                <div class="row input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Location" v-model="companylocation1" />
                                </div>
                                <div class="row input-group">
                                    <textarea class="form-control" placeholder="Short description" v-model="cdes1" aria-label="With textarea"></textarea>
                                </div>
                            </div>
                        </div>