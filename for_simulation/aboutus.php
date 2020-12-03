<?php
    session_start();
    $_SESSION['action']='';
    $string='';
    if(array_key_exists("login",$_SESSION) and $_SESSION["login"])
    {
        $string='<li class="nav-item">
                            <a class="nav-link" href="login.php?logout=1">Log Out</a>
                        </li>';
        
    }
    
    

?>

<!DOCTYPE html>
<html>

<head>
    <title>About Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="navicon.svg">
    <style>
        body {
            font-family: 'Mulish', sans-serif;
            margin: 0;
            padding: 0;
            background: #eee !important;
        }

        #nm {
            letter-spacing: 3px;
        }

        .very {
            border-radius: 50%;
            height: 50%
        }

        .fuggy {
            color: rgb(17, 2, 77);
        }

        .page {

            /* background-color:whitesmoke; */
            /* background-color:#aaaa; */
            /* background-color:#0d47a1; */
            
        }

        #nm {
            padding-left: 0px;
            letter-spacing: 3px;
        }

        .nav-link {
            padding-top: 10px;
            letter-spacing: 3px;
        }

        .dropdown-menu {
            background-color: #007bff;
            border: none !important;
        }

        .dropdown-item {
            color: #70abff !important;
            letter-spacing: 2px;
        }

        .dropdown>.dropdown-menu>a:hover {
            color: #cce5ff !important;
            background-color: transparent;
        }

        .h1,
        h1 {
            margin-top: 40px;
        }

        .pb-5,
        .py-5 {
            margin-top: -60px;
            padding-bottom: 0rem !important;
        }









        section {
            padding: 60px 0;
        }

        section .section-title {
            text-align: center;
            color: #007b5e;
            margin-bottom: 50px;
            text-transform: uppercase;
        }
    </style>

</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-3 ">
            <!--<div class="container-fluid">-->
            <a class="navbar-brand" href="index.php" id="nm">
                <img src="navicon.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                Apna Bank
            </a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown bg-primary">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="transaction.php">Transfer Money to own bank</a>
                            <a class="dropdown-item" href="tootherbank.php">Transfer Money to other bank</a>
                            <a class="dropdown-item" href="balance.php">current balance</a>
                            <a class="dropdown-item" href="feedback.php">Raise a Complaint</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown bg-primary">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            Account
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="profile.php">Profile</a>

                            <a class="dropdown-item" href="transactionsummary.php">Transction details</a>
                            <a class="dropdown-item" href="deleteAccount.php">Delete Account</a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="aboutus.php">About</a>
                    </li>



                </ul>
            </div>
            <!--</div>-->
            </div>
        </nav>
        <!--  end of navbar -->

        <!--  end of navbar -->

        <!-- About us starts -->
        <section>
            <div class="container fluid p-3">
                <h1 class="text-center section-title  h1 ">ABOUT US</h1>
                <hr class="w-25 mx-auto pt-5">
            </div>


        </section>
        <!-- about us ends -->
        <!-- Our comapny -->
        <section>
            <article class="py-5 text-center container">
                <div>

                    <h5 class="section-title h2">OUR COMPANY</h5>
                    <hr class="w-25 mx-auto pt-5">
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo voluptatibus quibusdam recusandae ducimus voluptate facere reprehenderit, in provident? Blanditiis explicabo, saepe ipsa ad quos, soluta aut doloremque est maiores non alias dolorum distinctio at inventore sapiente nobis possimus perferendis? Perspiciatis quis odio eaque necessitatibus, magni nemo nihil aperiam ducimus quam cupiditate. Tempora vero quam culpa voluptas in tenetur minima animi, magni sit, iure voluptatum sapiente, eos enim. Nulla, fuga necessitatibus. Dolorum illo ducimus incidunt sunt ipsam doloribus porro nesciunt eveniet quia, eum autem velit asperiores voluptatem hic esse ratione architecto deleniti mollitia odio laborum earum quidem, quibusdam distinctio quaerat. Consequatur accusamus aliquid doloremque porro dolorum nesciunt laboriosam facilis debitis! Dolorem recusandae tempora iste vel mollitia a. Quis minima, nisi ipsum odit veritatis molestias, excepturi sint quaerat dignissimos aspernatur perspiciatis voluptates!</p> -->
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae deleniti tempore voluptates cumque
                        repudiandae dolore excepturi numquam nihil atque explicabo repellat saepe consequatur error
                        placeat, architecto reiciendis nemo sit minima quis assumenda. Iusto voluptatum velit quo earum
                        accusantium minima, asperiores tempora ratione dolores illum ipsa est recusandae deserunt itaque
                        aut neque nostrum, nam accusamus omnis aliquid repellat! Maxime, perspiciatis architecto.</p>

                </div>
            </article>
        </section>
        <!-- our comapny ends -->
        <!-- Our history -->
        <section>
            <article class="py-5 text-center container">


                <div>

                    <h5 class="section-title h2">OUR CULTURE</h5>
                    <hr class="w-25 mx-auto pt-5">
                    <p>At Bank of America, our culture comes from how we run the company every day. At the heart of our responsible growth strategy is our commitment to "act responsibly," which includes our commitments to ethical behavior, acting with integrity and complying with laws, rules, regulations and policies that reinforce such behavior.

We recognize that cultivating a strong culture is an ongoing effort, fostered day after day in both formal and informal ways. Building a unified culture requires thoughtful, purposeful action. This work helped us bring together all of our employees - from different businesses, companies, and countries - to be aligned to our purpose of making financial lives better.</p>

                </div>
            </article>
        </section>

        <!-- out history ends -->

        <!-- our business -->
        <section>
            <article class="py-5 text-center container">


                <div>

                    <h5 class="section-title h2">OUR STRATEGY</h5>
                    <hr class="w-25 mx-auto pt-5">

                    <p>Our commitment to responsible growth is resolute.

Responsible growth has four pillars: We have to grow — no excuses. We have to grow by delivering more for our customers and clients. We have to grow by managing risk well. And, our growth must be sustainable. Sustainable means we have to share our success with our communities, we have to be a great place to work for our teammates, and we have to drive operational excellence. This creates the ability to reinvest the savings back into our team, our capabilities, our client experience, and our communities and shareholders.</p>

                </div>
            </article>
        </section>

        <!-- our business ends -->

    </header>



    <!-- Footer -->
    <footer class="page-footer font-small ">


        <!-- Footer Links -->
        <div style="background-color:#1C2331;">


            <div  style="background-color:#3F729B;">
                <div class="container">

                    <!-- Grid row-->
                    <div class="row py-4 d-flex align-items-center">

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0 text-white">
                            <h6 class="mb-0">Get connected with us on social networks!</h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-7 text-center text-md-right  " >

                            <!-- Facebook -->
                            <a class="fb-ic text-white" href="https://www.facebook.com/">
                                <i class="fab fa-facebook-f white-text mr-4"> </i>
                            </a>
                            <!-- Twitter -->
                            <a class="tw-ic text-white" href="https://twitter.com/">
                                <i class="fab fa-twitter white-text mr-4"> </i>
                            </a>
                            <!-- Google +-->
                            <!-- <a class="gplus-ic">
                            <i class="fab fa-google-plus-g white-text mr-4"> </i>
                        </a>-->
                            <!--Linkedin -->
                            <a class="li-ic text-white" href="https://in.linkedin.com/">
                                <i class="fab fa-linkedin-in white-text mr-4"> </i>
                            </a>
                            <!--Instagram-->
                            <a class="ins-ic text-white" href="https://www.instagram.com/">
                                <i class="fab fa-instagram white-text"> </i>
                            </a>

                        </div>
                        
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row-->
                    <!-- rahul  -->
                   
<hr>
                </div>
            </div>
            
            <div class="container text-center text-md-left mt-5 " style="bac"  >

                <!-- Grid row -->
                <div class="row mt-3 text-white">

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

                        <!-- Content -->
                        <h6 class="text-uppercase font-weight-bold text-white">Apna Bank</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>Please do not believe any entity using Apna Bank logos & branding to request the public for
                            money
                            in exchange for opening a Customer Service Point.</p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                        <!-- Links -->
                        <!--<h6 class="text-uppercase font-weight-bold">OUR OFFERINGS</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a class="dark-grey-text" href="#!">Savings Account</a>
                    </p>
                    <p>
                        <a class="dark-grey-text" href="#!">Current Account</a>
                    </p>-->
                        <!-- <p>
                        <a class="dark-grey-text" href="#!">BrandFlow</a>
                    </p> -->
                        <!-- <p>
                        <a class="dark-grey-text" href="#!">Bootstrap Angular</a>
                    </p> -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                        <!-- Links -->
                        <!--<h6 class="text-uppercase font-weight-bold">Useful links</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a class="dark-grey-text" href="#!">Your Account</a>
                    </p>-->
                        <!-- <p>
                        <a class="dark-grey-text" href="#!">Become an Affiliate</a>
                    </p> -->
                        <!-- <p>
                        <a class="dark-grey-text" href="#!">Shipping Rates</a>
                    </p> -->
                        <!--<p>
                        <a class="dark-grey-text" href="#!">Help</a>
                    </p>-->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Contact</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <i class="fas fa-home mr-3"></i>Kumarswamy layout, Bengaluru ,India</p>
                        <p>
                            <i class="fas fa-envelope mr-3"></i> info@example.com</p>
                        <p>
                            <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p>
                            <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
        </div>

        <!-- Footer Links -->

        <!-- Copyright -->
        <!-- <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> -->
        
        <div class="footer-copyright text-center text-white py-3 " style="background-color:#1C2331;">© 2020 Copyright:
            Apna Bank
            <!--<a  style="color:white;" href="https://mdbootstrap.com/"> ApnaBank.com</a>-->
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- footer ends -->





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>