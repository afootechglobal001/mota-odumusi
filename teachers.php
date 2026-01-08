<?php include 'config/constants.php';?>
<?php include 'config/functions.php';?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $thename ?> | Frequently Asked Questions | Offline Support</title>

    <meta name="keywords"
        content="<?php echo $thename ?>, Mota Odumusi Anglican Nursery/Primary School FAQ, Isara school questions, best nursery and primary schools in Isara, school admission enquiry, parent support Ogun State, private schools information, early childhood education FAQ, Mota Odumusi School parents guide, student support services Isara, Ogun State schools enquiry, top private schools in Ogun State" />

    <meta name="description"
        content="Find answers to frequently asked questions about Mota Odumusi Anglican Nursery and Primary School, Isara, Ogun State. Learn more about admissions, curriculum, facilities, and student support services." />

    <meta property="og:title" content="<?php echo $thename ?> | Frequently Asked Questions | Offline Support" />
    <meta property="og:image" content="<?php echo $website_url ?>/all-images/plugin-pix/default.jpg" />
    <meta property="og:description"
        content="Get helpful answers about Mota Odumusi Anglican Nursery and Primary School — from admissions and curriculum to facilities and support services — designed to guide parents and students effectively." />

    <meta name="twitter:title" content="<?php echo $thename ?> | Frequently Asked Questions | Offline Support" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $website_url ?>/all-images/plugin-pix/default.jpg" />
    <meta name="twitter:description"
        content="Explore frequently asked questions about Mota Odumusi Anglican Nursery and Primary School in Isara, Ogun State — covering admissions, academics, and general enquiries for parents and students." />
</head>



<body>
    <?php  include 'header.php'?>

    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <div class="other-pages-back-div">
            <div class="top-title">
                <div class="div-in">
                    <ul>
                        <a href="<?php echo $website_url?>">
                            <li title="Home">Home <i class="bi-caret-right-fill"></i></li>
                        </a>
                        <a href="<?php echo $website_url?>/about">
                            <li title="About Us">Our Teachers</li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                <h1 data-aos="fade-in" data-aos-duration="800"><span>Our Teachers</span></h1>
                <p>Welcome to The Everest Top Group Of Schools, where we inspire young minds, foster creativity, and
                    empower students to reach their full potential.</p>

                <?php $callclass->_otherPagesBtn($website_url);?>
            </div>
        </div>
    </section>

    <section class="others-pg-content-div">
        <section class="body-div">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div" data-aos="fade-in" data-aos-duration="1200">
                        <div class="top-div">
                            <div><span class="top-title">OUR TEACHERS</span></div>
                            <h2>Meet With Our Teachers</h2>
                            <p>Meet with our dedicated teachers to discuss your child’s progress, ask questions, and
                                explore how we can support their educational journey.</p>
                        </div>
                    </div>

                    <div class="teachers-back-div" id="fetchAllTeachers">
                        <script>
                        _fetchAllTeachers();
                        </script>
                    </div>
                </div>
            </div>
        </section>

        <?php $callclass->_statistics($website_url);?>
        <?php include 'footer.php'?>
    </section>

</body>

</html>