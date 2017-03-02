<?php
require_once "View/view_parts/top.php";
require_once "View/view_parts/header.php";
?>




    <!-- =-=-=-=-=-=-= Google Map =-=-=-=-=-=-= -->
    <section id="google-map">
        <div class="container-fluid no-padding">
            <div id="map"></div>
        </div>
        <!-- container-fluid end -->
    </section>

    <!-- =-=-=-=-=-=-= Google Map End =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= Contact Us =-=-=-=-=-=-= -->
    <section id="contact-us" class="section-padding-80 contact-bg">
        <div class="container">
            <!-- Row -->
            <div class="row">





                <div class="col-md-7  ">


                    <div class="about-title">
                        <h2>Leave A Message</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent congue justo scelerisque mattis iaculis. Maecenas vestibulum faucibus enim scelerisque egestas. Praesent facilisis, tortor vel vehicula imperdiet. </p>



                    </div>

                    <div class="notice success" id="success">
                        <p>Thanks so much for your message. We check e-mail frequently and will try our best to respond to your inquiry.</p>
                    </div>

                    <div class="row margin-top-50">
                        <form id="contactForm" method="post" action="#">
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


                            <div class="col-sm-12">
                                <!-- Comment -->
                                <div class="form-group">

                                    <textarea placeholder="Message..." id="message" name="message" class="form-control" rows="6" required></textarea>
                                </div>
                            </div>
                            <!-- End col-sm-12 -->

                            <div class="col-sm-12">
                                <button type="submit" id="yes" class="btn btn-primary">Send Message</button>
                                <img id="loader" alt="" src="images/loader.gif" class="loader">
                            </div>
                            <!-- End col-sm-6 -->

                        </form>
                    </div>

                </div>

                <div class="col-md-5">

                    <div class="contact-image">
                        <img alt="" src="images/contact.png">
                    </div>
                </div>



                <div class="clearfix"></div>
            </div>
            <!-- Row End -->
        </div>
        <!-- end container -->
    </section>

<?php
require_once "View/view_parts/footer.php";
require_once "View/view_parts/base.php";
?>