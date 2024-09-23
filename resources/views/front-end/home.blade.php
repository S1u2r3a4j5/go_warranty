<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>go-warranty</title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/customStyle.css') }}">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">

    <style>
        .trusted_client {
            height: 265px;
            position: relative;
            width: 92%;
            /* Set width to 90% */
            margin: 0 auto;
            /* Center horizontally */
        }

        .trusted_client h1 {
            text-align: center;
            font-weight: bolder;
            margin: 0;
            padding: 15px 0;
            margin-top: 20px;
        }

        /* Swiper container styles */
        .swiper-container {
            width: 100%;
            height: 50%;
            position: relative;
        }

        /* Swiper wrapper styles */
        .swiper-wrapper {
            display: flex;
            align-items: center;
            margin: 0px 0px 0px -12px;

        }

        /* Swiper slide styles */
        .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
            width: auto;
            /* Allow width to adjust based on content */
        }

        /* Ensure images fit well within the slides */
        .swiper-slide img {
            width: 100%;
            /* Ensure images take full width of the slide */
            height: auto;
            object-fit: contain;
            /* Maintain aspect ratio */
            margin: 0px 77px;
        }

        /* Navigation buttons */
        .swiper-button-prev,
        .swiper-button-next {
            width: 44px;
            height: 44px;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            cursor: pointer;
            z-index: 10;
        }

        .swiper-button-prev::after,
        .swiper-button-next::after {
            font-size: 20px;
            color: #fff;
        }

        .swiper-button-prev {
            left: -25px;
        }

        .swiper-button-next {
            right: -25px;
        }

        /* Pagination bullets */
        .swiper-pagination {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            /* Center horizontally */
            display: flex;
            justify-content: center;
            /* Center bullets horizontally */
            align-items: center;
            padding: 0;
            list-style: none;
            z-index: 10;
        }

        .swiper-pagination-bullet {
            width: 8px;
            height: 8px;
            background: #000;
            margin: 0 4px;
            /* Reduced margin for compact spacing */
            border-radius: 50%;
            opacity: 0.5;
            transition: opacity 0.3s;
        }

        .swiper-pagination-bullet-active {
            opacity: 1;
        }
    </style>


</head>

<body>
    <!-- Registration Structure Begins Here -->
    <div>
        {{-- <div class="registration">
            <div class="login-part">
                <span>Login</span>
                <span style="margin-left: 6px;">Registration</span>
            </div>
            <div class="enquiry-part">
                <span>Enquiry Now</span>
                <span style="margin-left: 6px;">APK DOWNLOAD</span>
            </div>
        </div> --}}
        <div class="registration">
            <div class="login-part">
                <span>Login</span>
                <span>Registration</span>
                <span>Enquiry Now</span>
            </div>
            <div class="enquiry-part">
                <span>APK DOWNLOAD</span>
            </div>
        </div>

        <!------ About Section here --->
        <section>

            <div class="menu-section">
                <div class="menu-toggle">
                    <i class="fa-solid fa-bars"></i> <!-- Use Font Awesome or any icon library -->
                </div>
                <div class="spareware">
                    <div>
                        <img src="{{ asset('images/transparent-logo-2.png') }}" alt="transparent logo-2">
                    </div>
                </div>
                <div class="navbar">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="contacts">
                    <span><i class="fa-solid fa-phone-volume"></i></span>
                    <span>9340875961</span>
                </div>
                <div class="account">
                    <span>My Account</span>
                </div>
            </div>
        </section>
        <!------ End about Section here --->

        <div class="content">
            <div class="left_content">
                <img src="{{ asset('images/repair-pic.png') }}" alt="repair-pic">

            </div>
            <div class="right_content">
                <div class="upp">Bringing your Appliances Back to Life</div>
                <div class="concern">
                    <h1>Your Repair Our Concern</h1>
                </div>
                <div class="repair_spare">
                    <div class="repair">
                        <div class="wd_image">
                            <span class="svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                    viewBox="0 0 50 50" fill="none">
                                    <rect width="50" height="50" fill=""></rect>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0H0V10V40H10V10L40 10V0H10Z"
                                        fill="#F5B332"></path>
                                </svg>
                            </span>
                            <div class="flat_book">
                                <h2 class="serve_h2">Repair Services</h2>
                                <h2 class="flat_h2">Flat 15% Discount</h2>
                                <div class="book_now"><span>BOOK NOW</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="repair">
                        <div class="wd_image">
                            <span class="svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                    viewBox="0 0 50 50" fill="none">
                                    <rect width="50" height="50" fill=""></rect>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0H0V10V40H10V10L40 10V0H10Z"
                                        fill="#F5B332"></path>
                                </svg>
                            </span>
                            <div class="flat_book">
                                <h2 class="serve_h2">Spare Parts</h2>
                                <h2 class="flat_h2">Upto 20% Discount</h2>
                                <div class="book_now"><span>BOOK NOW</span></div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="spare"></div> --}}
                </div>
            </div>
        </div>
        <div class="doorstep">
            <div class="doorstep_u">
                <div class="doorstep_left">
                    <h2>Doorstep Availability within 24 hours</h2>
                </div>
                <div class="doorstep_right">
                    {{-- <form action="#" >
                        <input type="number" name="number" class="" placeholder="Contact Number">
                    </form> --}}
                    <form action="#" method="" class="mt-4">
                        <div class="form-group">
                            <input type="number" class="form-control" id="numberInput" name="number"
                                placeholder="Contact Number">
                        </div>
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="termsCheck" name="termsCheck"
                                required>
                            <label class="form-check-label" for="termsCheck">I agree to the terms and
                                conditions</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
        <div class="off_on_service">
            <h1>Flat 15% Off on Service</h1>
        </div>
        <div class="ac_repair">
            <div class="ac_repair_u">
                <div class="img_h5">
                    <img src="{{ asset('images/ac1.jpg') }}" alt="Image 1">
                    <h5>AC Repairing</h5>
                    <div class="book_now"><span><i class="fa-solid fa-phone"></i>BOOK NOW</span></div>

                </div>
                <div class="img_h5">
                    <img src="{{ asset('images/download2.jpg') }}" alt="Image 1">
                    <h5>TV Repairing</h5>
                    <div class="book_now"><span><i class="fa-solid fa-phone"></i>BOOK NOW</span></div>

                </div>
                <div class="img_h5">
                    <img src="{{ asset('images/bb3.jpg') }}" alt="Image 1">
                    <h5>Washing Machine Repairing</h5>
                    <div class="book_now"><span><i class="fa-solid fa-phone"></i>BOOK NOW</span></div>

                </div>
                <div class="img_h5">
                    <img src="{{ asset('images/5b4.jpg') }}" alt="Image 1">
                    <h5>Microwave Oven Repairing</h5>
                    <div class="book_now"><span><i class="fa-solid fa-phone"></i>BOOK NOW</span></div>

                </div>
                <div class="img_h5">
                    <img src="{{ asset('images/trained5.jpg') }}" alt="Image 1">
                    <h5>Refrigerator Repairing</h5>
                    <div class="book_now"><span><i class="fa-solid fa-phone"></i>BOOK NOW</span></div>

                </div>
                <div class="img_h5">
                    <img src="{{ asset('images/male-technician6.jpg') }}" alt="Image 1">
                    <h5>Laptop Repairing</h5>
                    <div class="book_now"><span><i class="fa-solid fa-phone"></i>BOOK NOW</span></div>

                </div>

            </div>
        </div>

        <div class="trusted_client">
            <h1>TRUSTED CLIENTS</h1>
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/icon/reliance-1.png') }}" alt="reliance-1">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('images/icon/paytm-1.jpg') }}" alt="paytm-1">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('images/icon/onsite-1.png') }}" alt="onsite-1">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('images/icon/croma-1.png') }}" alt="croma-1">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('images/icon/voltas-1.png') }}" alt="voltas-1">
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination" style="width: 50%; margin-left: 49%;">
                </div>
            </div>
        </div>

        <div class="footer">
            <span>Copyright@2023.espareware.com</span>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 4,
            // spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
 
    <script>
        // JavaScript to toggle menu
        document.querySelector('.menu-toggle').addEventListener('click', function() {
            var navbar = document.querySelector('.navbar');
            if (navbar.style.display === 'none' || navbar.style.display === '') {
                navbar.style.display = 'flex';
            } else {
                navbar.style.display = 'none';
            }
        });
    </script>



</body>

</html>
