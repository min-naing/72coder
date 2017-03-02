<?php
require_once "View/view_parts/top.php";
require_once "View/view_parts/header.php";
?>






    <!-- =-=-=-=-=-=-= Quote =-=-=-=-=-=-= -->
    <section id="quote" class="section-padding-80 quote-bg">
        <div class="container">
            <!-- Row -->
            <div class="row">
                <div class="text-center col-md-8 col-md-offset-2 ">
                    <!-- title-section -->
                    <div class="main-heading text-center">
                        <p class="sub-title">Do you plan to build or renovate ?</p>
                        <h2> Get a free Quote</h2>

                    </div>
                    <!-- End title-section -->
                    <div class="row margin-top-50">
                        <form method="post" action="#">
                            <div class="col-sm-6">
                                <!-- Name -->
                                <div class="form-group">

                                    <input type="text" placeholder="Name" id="name" name="name" class="form-control" required>
                                </div>
                            </div>
                            <!-- End col-sm-6 -->

                            <div class="col-sm-6">
                                <!-- Email -->
                                <div class="form-group">

                                    <input type="email" placeholder="Email" id="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <!-- End col-sm-6 -->


                            <div class="col-sm-12">
                                <!-- Email -->
                                <div class="form-group">

                                    <input type="text" placeholder="Subject" id="subject" name="subject" class="form-control" required>
                                </div>
                            </div>
                            <!-- End col-sm-12 -->

                            <div class="col-sm-6">
                                <!-- Email -->
                                <div class="form-group">

                                    <select class="form-control" name="type">
                                        <option>Type</option>
                                        <option>Home</option>
                                        <option>Kitchen</option>
                                        <option>Garden</option>
                                        <option>Electricy</option>
                                        <option>isolation</option>
                                    </select>
                                </div>
                            </div>
                            <!-- End col-sm-6 -->

                            <div class="col-sm-6">
                                <!-- Email -->
                                <div class="form-group">

                                    <select class="form-control" name="budget">
                                        <option>Budget</option>
                                        <option value="$2000 - $5000">$2000 - $5000</option>
                                        <option value="$5000 - $10k">$5000 - $10k</option>
                                        <option value="$10k - $20k">$10k - $20k</option>
                                        <option value="$20k - $40k">$20k - $40k</option>
                                        <option value="$40k +">$40k + </option>
                                    </select>
                                </div>
                            </div>
                            <!-- End col-sm-6 -->




                            <!--Form Group-->
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <select class="form-control" name="sel-location">
                                    <option>Select Location</option>
                                    <option>Afghanistan</option>
                                    <option>Albania</option>
                                    <option>Algeria</option>
                                    <option>American Samoa</option>
                                    <option>Andorra</option>
                                    <option>Angola</option>
                                    <option>Anguilla</option>
                                    <option>Antarctica</option>
                                    <option>Argentina</option>
                                    <option>Armenia</option>
                                    <option>Aruba</option>
                                    <option>Australia</option>
                                    <option>Austria</option>
                                    <option>Azerbaijan</option>
                                    <option>Bahamas</option>
                                    <option>Bahrain</option>
                                    <option>Bangladesh</option>
                                    <option>Barbados</option>
                                    <option>Belarus</option>
                                    <option>Belgium</option>
                                    <option>Belize</option>
                                    <option>Benin</option>
                                    <option>Bermuda</option>
                                    <option>Bhutan</option>
                                    <option>Bolivia</option>
                                    <option>Botswana</option>
                                    <option>Bouvet Island</option>
                                    <option>Brazil</option>
                                    <option>Brunei Darussalam</option>
                                    <option>Bulgaria</option>
                                    <option>Burkina Faso</option>
                                    <option>Burundi</option>
                                    <option>Cambodia</option>
                                    <option>Cameroon</option>
                                    <option>Canada</option>
                                    <option>Cape Verde</option>
                                    <option>Cayman Islands</option>
                                    <option>Chad</option>
                                    <option>Chile</option>
                                    <option>China</option>
                                    <option>Christmas Island</option>
                                    <option>Cocos Islands</option>
                                    <option>Colombia</option>
                                    <option>Comoros</option>
                                    <option>Congo</option>
                                    <option>Cook Islands</option>
                                    <option>Costa Rica</option>
                                    <option>Cote d'Ivoire</option>
                                    <option>Croatia</option>
                                    <option>Cuba</option>
                                    <option>Cyprus</option>
                                    <option>Czech Republic</option>
                                    <option>Denmark</option>
                                    <option>Djibouti</option>
                                    <option>Dominica</option>
                                    <option>Dominican Republic</option>
                                    <option>Ecuador</option>
                                    <option>Egypt</option>
                                    <option>El Salvador</option>
                                    <option>Equatorial Guinea</option>
                                    <option>Eritrea</option>
                                    <option>Estonia</option>
                                    <option>Ethiopia</option>
                                    <option>Faroe Islands</option>
                                    <option>Fiji</option>
                                    <option>Finland</option>
                                    <option>France</option>
                                    <option>French Guiana</option>
                                    <option>Gabon</option>
                                    <option>Gambia</option>
                                    <option>Georgia</option>
                                    <option>Germany</option>
                                    <option>Ghana</option>
                                    <option>Gibraltar</option>
                                    <option>Greece</option>
                                    <option>Greenland</option>
                                    <option>Grenada</option>
                                    <option>Guadeloupe</option>
                                    <option>Guam</option>
                                    <option>Guatemala</option>
                                    <option>Guinea</option>
                                    <option>Guinea-Bissau</option>
                                    <option>Guyana</option>
                                    <option>Haiti</option>
                                    <option>Honduras</option>
                                    <option>Hong Kong</option>
                                    <option>Hungary</option>
                                    <option>Iceland</option>
                                    <option>India</option>
                                    <option>Indonesia</option>
                                    <option>Iran</option>
                                    <option>Iraq</option>
                                    <option>Ireland</option>
                                    <option>Israel</option>
                                    <option>Italy</option>
                                    <option>Jamaica</option>
                                    <option>Japan</option>
                                    <option>Jordan</option>
                                    <option>Kazakhstan</option>
                                    <option>Kenya</option>
                                    <option>Kiribati</option>
                                    <option>Kuwait</option>
                                    <option>Kyrgyzstan</option>
                                    <option>Laos</option>
                                    <option>Latvia</option>
                                    <option>Lebanon</option>
                                    <option>Lesotho</option>
                                    <option>Liberia</option>
                                    <option>Libya</option>
                                    <option>Liechtenstein</option>
                                    <option>Lithuania</option>
                                    <option>Luxembourg</option>
                                    <option>Macao</option>
                                    <option>Madagascar</option>
                                    <option>Malawi</option>
                                    <option>Malaysia</option>
                                    <option>Maldives</option>
                                    <option>Mali</option>
                                    <option>Malta</option>
                                    <option>Marshall Islands</option>
                                    <option>Martinique</option>
                                    <option>Mauritania</option>
                                    <option>Mauritius</option>
                                    <option>Mayotte</option>
                                    <option>Mexico</option>
                                    <option>Micronesia</option>
                                    <option>Moldova</option>
                                    <option>Monaco</option>
                                    <option>Mongolia</option>
                                    <option>Montenegro</option>
                                    <option>Montserrat</option>
                                    <option>Morocco</option>
                                    <option>Mozambique</option>
                                    <option>Myanmar</option>
                                    <option>Namibia</option>
                                    <option>Nauru</option>
                                    <option>Nepal</option>
                                    <option>Netherlands</option>
                                    <option>New Caledonia</option>
                                    <option>New Zealand</option>
                                    <option>Nicaragua</option>
                                    <option>Niger</option>
                                    <option>Nigeria</option>
                                    <option>Norfolk Island</option>
                                    <option>North Korea</option>
                                    <option>Norway</option>
                                    <option>Oman</option>
                                    <option>Pakistan</option>
                                    <option>Palau</option>
                                    <option>Panama</option>
                                    <option>Papua New Guinea</option>
                                    <option>Paraguay</option>
                                    <option>Peru</option>
                                    <option>Philippines</option>
                                    <option>Pitcairn</option>
                                    <option>Poland</option>
                                    <option>Portugal</option>
                                    <option>Puerto Rico</option>
                                    <option>Qatar</option>
                                    <option>Romania</option>
                                    <option>Russian Federation</option>
                                    <option>Rwanda</option>
                                    <option>Saint Helena</option>
                                    <option>Saint Lucia</option>
                                    <option>Samoa</option>
                                    <option>San Marino</option>
                                    <option>Sao Tome and Principe</option>
                                    <option>Saudi Arabia</option>
                                    <option>Senegal</option>
                                    <option>Serbia</option>
                                    <option>Seychelles</option>
                                    <option>Sierra Leone</option>
                                    <option>Singapore</option>
                                    <option>Slovakia</option>
                                    <option>Slovenia</option>
                                    <option>Solomon Islands</option>
                                    <option>Somalia</option>
                                    <option>South Africa</option>
                                    <option>South Georgia</option>
                                    <option>South Korea</option>
                                    <option>Spain</option>
                                    <option>Sri Lanka</option>
                                    <option>Sudan</option>
                                    <option>Suriname</option>
                                    <option>Swaziland</option>
                                    <option>Sweden</option>
                                    <option>Switzerland</option>
                                    <option>Taiwan</option>
                                    <option>Tajikistan</option>
                                    <option>Tanzania</option>
                                    <option>Thailand</option>
                                    <option>Timor-Leste</option>
                                    <option>Togo</option>
                                    <option>Tokelau</option>
                                    <option>Tonga</option>
                                    <option>Tunisia</option>
                                    <option>Turkey</option>
                                    <option>Turkmenistan</option>
                                    <option>Tuvalu</option>
                                    <option>Uganda</option>
                                    <option>Ukraine</option>
                                    <option>United Arab Emirates</option>
                                    <option>United Kingdom</option>
                                    <option>United States</option>
                                    <option>Uruguay</option>
                                    <option>Uzbekistan</option>
                                    <option>Vanuatu</option>
                                    <option>Vatican City</option>
                                    <option>Venezuela</option>
                                    <option>Vietnam</option>
                                    <option>Wallis and Futuna</option>
                                    <option>Western Sahara</option>
                                    <option>Yemen</option>
                                    <option>Zambia</option>
                                    <option>Zimbabwe</option>
                                </select>
                            </div>


                            <div class="col-sm-12">
                                <!-- Comment -->
                                <div class="form-group">

                                    <textarea placeholder="Write Your Project..." id="message" name="message" class="form-control" rows="6" required></textarea>
                                </div>
                            </div>
                            <!-- End col-sm-12 -->

                            <div class="col-sm-12">
                                <button type="submit" id="yes" class="btn btn-primary btn-block">Request Quote</button>

                            </div>
                            <!-- End col-sm-6 -->

                        </form>
                    </div>

                </div>


            </div>
            <!-- Row End -->
        </div>
        <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= Quote End =-=-=-=-=-=-= -->


<?php
require_once "View/view_parts/footer.php";
require_once "View/view_parts/base.php";
?>