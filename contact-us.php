<?php include 'config/constants.php';?>
<?php include 'config/functions.php';?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php'?>
    <title><?php echo $thename?> | Contact Us | 24/7 Support</title>

    <meta name="keywords"
        content="<?php echo $thename?>, Mota Odumusi Anglican Nursery/Primary School contact, Isara school phone, best nursery and primary schools in Isara, school address Ogun State, private school email, early childhood education contact, Mota Odumusi School location, how to reach Mota Odumusi School, school enquiries Isara" />

    <meta name="description"
        content="Get in touch with Mota Odumusi Anglican Nursery and Primary School, Isara, Ogun State, Nigeria. Contact us for admission enquiries, school visits, or general information about our nursery and primary education programs." />

    <meta property="og:title" content="<?php echo $thename?> | Contact Us | 24/7 Support" />
    <meta property="og:image" content="<?php echo $website_url?>/all-images/plugin-pix/default.jpg" />
    <meta property="og:description"
        content="Reach out to Mota Odumusi Anglican Nursery and Primary School in Isara, Ogun State. Our team is available to assist with admissions, school tours, and enquiries about our educational programs." />

    <meta name="twitter:title" content="<?php echo $thename?> | Contact Us | 24/7 Support" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $website_url?>/all-images/plugin-pix/default.jpg" />
    <meta name="twitter:description"
        content="Contact Mota Odumusi Anglican Nursery and Primary School today for admission details, visit scheduling, and enquiries about our nursery and primary education programs in Isara, Ogun State." />
</head>



<body>
    <?php  include 'header.php'?>

    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <div class="other-pages-back-div">
            <div class="top-title">
                <div class="div-in">
                    <ul>
                        <a href="<?php echo $website_url?>">
                            <li>Home <i class="bi-caret-right-fill"></i></li>
                        </a>
                        <a href="<?php echo $website_url?>/about">
                            <li>Contact Us</li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                <h1 data-aos="fade-in" data-aos-duration="800"><span>Contact Us</span></h1>
                <p>We’d love to hear from you! Whether you’re seeking admission information, want to schedule a school
                    tour, or have general enquiries, our team is ready to assist you.</p>

                <?php $callclass->_otherPagesBtn($website_url);?>
            </div>
        </div>
    </section>



    <section class="others-pg-content-div">
        <div class="menu-btn-div">
            <div class="btn-div-in">
                <button class="menu-btn active-btn" id="next-ketu" title="ISARA ADDRESS"
                    onclick="_next_contact_page('ketu-hide-div','ketu');">ISARA ADDRESS</button>
            </div>
        </div>

        <div id="ketu-hide-div">
            <section class="contact-hash-bg">
                <div class="bottom-body-div">
                    <div class="contact-div animated zoomIn">
                        <div class="div-in inner-contact">
                            <div class="icon img-div"><img src="all-images/images/email.png"
                                    alt="<?php echo $thename?> Email Address" /></div>

                            <div class="text">
                                <h2>MAIL US</h2>
                                <p>info@motaodumusianglicanschools.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-div animated zoomIn">
                        <div class="div-in inner-contact">
                            <div class="icon img-div"><img src="all-images/images/phone.png"
                                    alt="<?php echo $thename?> Phone Number" /></div>

                            <div class="text">
                                <h2>CALL US</h2>
                                <p><a href="tel:+2348067874629">(+234) 806 787 4629</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-div animated zoomIn">
                        <div class="div-in inner-contact">
                            <div class="icon img-div"><img src="all-images/images/location.png"
                                    alt="<?php echo $thename?> Office Address" /></div>

                            <div class="text">
                                <h2>LOCATION</h2>
                                <p>Remo Anglican College Isara, Isara, Ogun State, Nigeria.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="map-body-div">
                <div class="map-back-div">
                    <iframe allowfullscreen="" class="google-map" 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.197960268785!2d3.6797299000000003!3d6.9859469999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bd7867838e4d1%3A0x333098c766671926!2sRemo%20Anglican%20College!5e0!3m2!1sen!2sng!4v1767325815188!5m2!1sen!2sng">
                    </iframe>
                </div>
            </section>
        </div>

        <section class="body-div">
            <div class="body-div-in">
                <div class="contact-mail-div" data-aos="fade-in" data-aos-duration="800">
                    <div class="inner-div">
                        <div class="div-in">
                            <div class="text_field_container" id="fullName_container">
                                <script>
                                textField({
                                    id: 'fullName',
                                    title: 'Full Name'
                                });
                                </script>
                            </div>

                            <div class="text_field_container" id="email_container">
                                <script>
                                textField({
                                    id: 'email',
                                    title: 'Email Address',
                                    type: 'email'
                                });
                                </script>
                            </div>

                            <div class="text_field_container" id="subject_container">
                                <script>
                                textField({
                                    id: 'subject',
                                    title: 'Subject'
                                });
                                </script>
                            </div>
                        </div>

                        <div class="div-in right-div-in">
                            <div class="text_area_container" id="message_container">
                                <script>
                                textField({
                                    id: 'message',
                                    title: 'Message',
                                    type: 'textarea'
                                });
                                </script>
                            </div>

                            <button class="btn" id="submitBtn" onclick="_sendContactEmail();">Send Mail <i
                                    class="bi-send-check"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php'?>
    </section>
</body>

</html>