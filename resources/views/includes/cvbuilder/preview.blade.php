 <br>
                        <h4>{{ name }}</h4>
                        <span>{{ designation }}</span>
                        <br>
                        <span>Address : {{ address }}</span>
                        <br>
                        <span>Phone Number : {{ phone }}</span>
                        <br>
                        <span>Email : {{ email }}</span>
                        <br>
                        <span>Date Of Birth : {{ date }}</span>
                        <br>

                        <hr>

                        <h4>Objective </h4>
                        <span>{{ objective }}</span>
                        <br>

                        <hr>

                        <h4>Education Qualification </h4>
                        <table>
                            <tr>
                                <th>Qualification</th>
                                <th>Institute</th>
                                <th>Location</th>
                                <th>Score </th>
                                <th>Year</th>
                            </tr>
                            <tr>
                                <td>SSC</td>
                                <td>{{ schoolname }}</td>
                                <td>{{ schoolocation }}</td>
                                <td>{{ schoolscore }}</td>
                                <td>{{ sdate }} - {{ edate }}</td>
                            </tr>
                            <tr>
                                <td>HSC</td>
                                <td>{{ hschoolname }}</td>
                                <td>{{ hschoolocation }}</td>
                                <td>{{ hschoolscore }}</td>
                                <td>{{ sdate1 }} - {{ sdate1 }}</td>
                            </tr>
                            <tr>
                                <td>Degree</td>
                                <td>{{ collegename }}</td>
                                <td>{{ collegelocation }}</td>
                                <td>{{ collegescore }}</td>
                                <td>{{ sdate2 }} - {{ edate2 }}</td>
                            </tr>
                        </table>

                        <hr>
                        <h4>Skills </h4>
                        <div class="row">
                            <div class="col-sm-6">
                                <span>C : </span>
                                <div class="star-rating-1">
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="2"></span>
                                    <span class="fa fa-star-o" data-rating="3"></span>
                                    <span class="fa fa-star-o" data-rating="4"></span>
                                    <span class="fa fa-star-o" data-rating="5"></span>
                                    <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <span>JAVA : </span>
                                <div class="star-rating-2">
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="2"></span>
                                    <span class="fa fa-star-o" data-rating="3"></span>
                                    <span class="fa fa-star-o" data-rating="4"></span>
                                    <span class="fa fa-star-o" data-rating="5"></span>
                                    <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <span>PHP : </span>
                                <div class="star-rating-3">
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="2"></span>
                                    <span class="fa fa-star-o" data-rating="3"></span>
                                    <span class="fa fa-star-o" data-rating="4"></span>
                                    <span class="fa fa-star-o" data-rating="5"></span>
                                    <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <span>DBMS : </span>
                                <div class="star-rating-4">
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="2"></span>
                                    <span class="fa fa-star-o" data-rating="3"></span>
                                    <span class="fa fa-star-o" data-rating="4"></span>
                                    <span class="fa fa-star-o" data-rating="5"></span>
                                    <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <h4> Achievment </h4>
                                <span>{{ ach1 }} </span>
                                <br>
                                <span> {{ ach2 }} </span>
                                <br>
                                <span> {{ ach3 }} </span>
                                <br>
                                
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <h4> Work Experience </h4>
                                <span><h5>{{ companyname1 }}</h5></b></span>
                                <br>
                                <span>{{ comdesignation1 }} </span>
                                <br>
                                <span> {{ sdate3 }} </span>
                                <br>
                                <span> {{ edate3 }} </span>
                                <br>
                                <span> {{ companylocation1 }} </span>
                                <br>
                                <span> {{ cdes1 }} </span>
                            </div>
                        </div>