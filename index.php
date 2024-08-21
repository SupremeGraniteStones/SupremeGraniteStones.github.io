<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Experience the sophistication of finely crafted granite and natural stone at SGS - Supreme Granite and Stone. Visit us in Bangalore or browse our gallery to find the perfect stone for your project.">
<title>SGS- Supreme Granite & Stones</title>
<link rel="icon" href="img/favicon_io/favicon.ico" type="image/x-icon" alt="SGS Logo">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="newstyles.css">
</head>
<body style="display: flex; flex-direction: column; height: 100%;overflow: auto;">

    <header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid d-flex justify-content-between">
                <div class="logo d-flex align-items-center">
                    <img src="img/LOGO.png" alt="SGS Logo" style="height: 50px;">
                    <div class="logo-text">
                        <span class="ms-2">Supreme</span> <br> 
                        <span class="ms-2">Granite & Stone</span>
                    </div>
                </div>
                <div class="nav-links d-none d-lg-flex align-items-center">
                    <a class="nav-link active" href="#home">Home</a>
                    <a class="nav-link" href="#about-us">About Us</a>
                    <a class="nav-link" href="#products">Products</a>
                    <a class="nav-link" href="#gallery">Gallery</a> 
                </div>
                <div class="contact-actions">
                    <a class="btn" href="#contact">Contact Us</a>
                    <a class="btn" href="#">Get Quote</a>
                </div>
            </div>
        </nav>
    </header>

    <main style="flex: 1;overflow-y: auto;">
        <div class="content">
            <section class="home mb-2" id="home">
                <img src="img/home.webp" alt="Home Image" class="img mb-2">
                <div class="slider mt-2">
                    <div class="info">
                        <h4>Welcome to SGS</h4>
                        <div class="wlogo">
                            <h1>Supreme </h1>
                            <h2>Granite & Stone</h2>
                        </div>
                        <h5>Discover the elegance and durability of premium granite and natural stone tailored for timeless architectures. Serving Bangalore and beyond with excellence and expertise.</h5>
                        <h3><blockquote><i>
                            “Crafting your spaces with the strength of nature and the art of design.”
                        </i></blockquote></h3>
                    </div>
                    <div class="cta">
                        <a href="https://www.instagram.com/sgs.styles" target="_blank" class="btn"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/9066804666?text=Hi%21%21%0ACan%20you%20help%20me%20with%20the%20query%20about%20Granite%3F" target="_blank" rel="noopener noreferrer" class="btn"> <i class="fab fa-whatsapp"></i></a>
                        <a href="#contact" class="btn">Contact Us</a>
                        <a href="tel:9066804666" class="btn"><i class="fas fa-phone-alt"></i></a>
                        <!-- <a href="#products" class="btn">Best Sellers</a> -->
                        <!-- location icon on click it should open google maps with the location should be satellite view -->
                        <a href="https://www.google.com/maps/place/SUPREME+GRANITE+AND+STONES/@12.7975661,77.6033369,1060m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bae114e2a9d7a5f:0xb2f1472554c3dd47!8m2!3d12.7975609!4d77.6059118!16s%2Fg%2F11lhcg3zkl?entry=ttu" target="_blank" rel="noopener noreferrer" class="btn">
                            <i class="fas fa-map-marker-alt"></i>
                        </a>
                    </div>
                </div>
            </section>
            <section class="about-us mt-4 mb-2" id="about-us">
                <div class="about">
                    <div class="row">
                        <div class="col-md-6 px-auto">
                            <div id="aboutUsCarousel" class="carousel slide carousel-container" data-bs-ride="carousel" data-bs-interval="5000">
                                <!-- Indicators -->
                                <div class="carousel-indicators">
                                    <?php
                                    $directory = 'img/about/';
                                    $imageTypes = ['*.jpg', '*.png', '*.gif', '*.webp'];
                                    $files = [];
                                    foreach ($imageTypes as $type) {
                                        $files = array_merge($files, glob($directory . $type));
                                    }
                                    foreach ($files as $index => $file) {
                                        echo '<button type="button" data-bs-target="#aboutUsCarousel" data-bs-slide-to="' . $index . '"' . ($index === 0 ? ' class="active" aria-current="true"' : '') . ' aria-label="Slide ' . ($index + 1) . '"></button>';
                                    }
                                    ?>
                                </div>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <?php
                                    foreach ($files as $index => $file) {
                                        echo '<div class="carousel-item' . ($index === 0 ? ' active' : '') . '">';
                                        echo '<img src="' . $file . '" alt="About Us ' . ($index + 1) . '" class="d-block w-100">';
                                        echo '</div>';
                                    }
                                    ?>
                                </div>

                                <!-- Controls -->
                                <button class="carousel-control-prev" type="button" data-bs-target="#aboutUsCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#aboutUsCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div style="display: flex; justify-content: space-between;">
                                <div>
                                    <h1>About Us</h1>
                                    <p>
                                        <strong>Supreme Granite & Stones</strong> is a leading supplier of <strong>premium granite</strong> and <strong>natural stone</strong> in Bangalore. We offer a wide range of products, including <strong>granite</strong> and <strong>stones</strong>. Our products, sourced from the finest quarries across India, are renowned for their <strong>quality</strong>, <strong>durability</strong>, and <strong>beauty</strong>.
                                    </p>
                                    <p>
                                        We cater to both:
                                        <ul>
                                            <li><i class="fas fa-home"></i> Residential projects</li>
                                            <li><i class="fas fa-building"></i> Commercial projects</li>
                                            <li><i class="fas fa-hotel"></i> Hospitality projects</li>
                                            <li><i class="fas fa-landmark"></i> Landscaping projects</li>
                                            <li><i class="fas fa-tree"></i> Outdoor applications</li>
                                            <li><i class="fas fa-archway"></i> Architectural and Decorative applications</li>
                                        </ul>
                                        providing customized solutions to meet the unique needs of our customers.
                                    </p>
                                </div>
                            </div>
                            <h5>We Trade Across India:</h5>
                            <div class="row text-center mb-3">
                                <div class="col">
                                    <i class="fas fa-truck"></i> Nationwide Coverage
                                </div>
                            </div>
                            <p>
                                <i class="fas fa-users"></i> <strong>Our team of experts</strong> is dedicated to providing exceptional service and ensuring customer satisfaction. Contact us today to learn more about our products and services.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- loction icon and text -->
                <div class="address d-flex align-items-center">
                    <p class="mb-0">Address: 15 16-1A, 21st mile stone, Malle Nalsandra, Jigani, Nallasandra, Karnataka 560083. Phone: 9066804666.</p>
                    <a href="https://maps.app.goo.gl/kXQhLnJisJNj5SvX7" target="_blank" class="ms-2" style="text-decoration: none; color: #14253e;">
                        <i class="fas fa-map-marker-alt"></i> Click Here
                    </a>
                </div>
                <div class="row image-overlap">
                    <div class="col-md-6">
                        <img src="img/a3.jpg" alt="About Us 1" class="img-fluid img1">
                        <img src="img/a2.jpg" alt="About Us 2" class="img-fluid img2">
                        <img src="img/a1.png" alt="About Us 3" class="img-fluid img3">
                    </div>
                    <div class="col-md-6">
                        <h2 class="mb-4">Why Choose Us?</h2>
                        <ul class="list">
                            <li><i class="fas fa-thumbs-up"></i> Quality Assurance</li>
                            <li><i class="fas fa-shield-alt"></i> Durability Guarantee</li>
                            <li><i class="fas fa-tags"></i> Competitive Pricing</li>
                            <li><i class="fas fa-smile"></i> Customer Satisfaction</li>
                            <li><i class="fas fa-clock"></i> Timely Delivery</li>
                            <li><i class="fas fa-leaf"></i> Eco-friendly Practices</li>
                            <li><i class="fas fa-cogs"></i> Best-Processing Tech</li>
                            <li><i class="fas fa-handshake"></i> Reliable Partnerships</li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="products mt-4 mb-2" id="products">
                <h1>Our Best Sellers</h1>
                <div class="product-grid">
                    <!-- Each product item is a grid item -->
                    <div class="product-item">
                        <h3>Granite Countertops</h3>
                        <div class="product-inner">
                            <img src="img/p1.png" alt="Product 1" class="product-image rounded-circle">
                        </div>
                        <h4>Product Id: #12345</h4>
                        <p>High-quality granite countertops that combine durability with beauty.</p>
                    </div>
                    <!-- Repeat for other products -->
                    <div class="product-item">
                        <h3>Granite Flooring</h3>
                        <div class="product-inner">
                            <img src="img/p2.png" alt="Product 2" class="product-image rounded-circle">
                        </div>
                        <h4>Product Id: #12345</h4>
                        <p>Stylish and durable granite flooring that adds elegance to your space.</p>
                    </div>
                    <div class="product-item">
                        <h3>Granite Wall Cladding</h3>
                        <div class="product-inner">
                            <img src="img/p3.png" alt="Product 3" class="product-image rounded-circle">
                        </div>
                        <h4>Product Id: #12345</h4>
                        <p>Enhance the beauty of your walls with our premium granite wall cladding.</p>
                    </div>
                    <div class="product-item">
                        <h3>Granite Steps</h3>
                        <div class="product-inner">
                            <img src="img/p4.png" alt="Product 4" class="product-image rounded-circle">
                        </div>
                        <h4>Product Id: #12345</h4>
                        <p>Sturdy and stylish granite steps that add a touch of sophistication to your space.</p>
                    </div>
                    <div class="product-item">
                        <h3>Granite Slabs</h3>
                        <div class="product-inner">
                            <img src="img/p5.png" alt="Product 5" class="product-image rounded-circle">
                        </div>
                        <h4>Product Id: #12345</h4>
                        <p>High-quality granite slabs that are perfect for countertops, flooring, and more.</p>
                    </div>
                </div>
            </section>

            <section class="gallery" id="gallery">
                <div class="container">
                    <h2>Gallery</h2>
                    <div class="gallery-masonry">
                        <img src="img/p1.png" alt="Product 1" class="grid-item">
                        <img src="img/p2.png" alt="Product 2" class="grid-item">
                        <img src="img/p3.png" alt="Product 3" class="grid-item">
                        <img src="img/p4.png" alt="Product 4" class="grid-item">
                        <img src="img/p5.png" alt="Product 5" class="grid-item">
                        <img src="img/p1.png" alt="Product 1" class="grid-item">
                        <img src="img/p2.png" alt="Product 2" class="grid-item">
                        <img src="img/p3.png" alt="Product 3" class="grid-item">
                        <img src="img/p4.png" alt="Product 4" class="grid-item">
                        <img src="img/p5.png" alt="Product 5" class="grid-item">
                        <img src="img/about/1.png" alt="About Us 1" class="grid-item">
                        <img src="img/about/2.png" alt="About Us 2" class="grid-item">
                        <img src="img/about/3.jpg" alt="About Us 3" class="grid-item">
                        <img src="img/about/4.png" alt="About Us 4" class="grid-item">
                        <img src="img/about/5.png" alt="About Us 5" class="grid-item">
                        <img src="img/about/1.png" alt="About Us 1" class="grid-item">
                        <img src="img/about/2.png" alt="About Us 2" class="grid-item">
                        <img src="img/about/3.jpg" alt="About Us 3" class="grid-item">
                        <img src="img/about/4.png" alt="About Us 4" class="grid-item">
                        <img src="img/about/5.png" alt="About Us 5" class="grid-item">
                        
                        <!-- Additional images -->
                    </div>
                    <div class="gallery-actions"> 
                        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/reel/C-cAf15RklS/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:350px; min-width:226px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/reel/C-cAf15RklS/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                            <a href="https://www.instagram.com/reel/C-cAf15RklS/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by (SGS) SUPREME GRANITE AND STONES (@sgs.styles)</a></p></div>
                        </blockquote>
                        <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/C8d8Gc_NiRH/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/reel/C8d8Gc_NiRH/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                            <a href="https://www.instagram.com/reel/C8d8Gc_NiRH/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by (SGS) SUPREME GRANITE AND STONES (@sgs.styles)</a></p></div>
                        </blockquote>
                    </div>
                </div>
            </section>
            <!-- contact us -->
            <section class="contact-us" id="contact">
                <div class="container">
                    <h1>Contact Us</h1>
                    <div class="contact-container">
                        <div class="contact-info">
                            <h2>Our Office</h2>
                            <p>15 16-1A, 21st mile stone, Malle Nalsandra, Jigani, Nallasandra, Karnataka 560083</p>
                            <p>Phone: 9066804666</p>
                            <p>Email: sgstyles115@gmail.com </p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fas fa-phone-alt"></i></a>
                            </div>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.7063848931934!2d77.6059118!3d12.797560899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae114e2a9d7a5f%3A0xb2f1472554c3dd47!2sSUPREME%20GRANITE%20AND%20STONES!5e0!3m2!1sen!2sin!4v1723987903701!5m2!1sen!2sin" width="450" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <form class="contact-form" action="submit_form.php" method="POST" onsubmit="return validateForm()">
                            <h4><b>Send Us a Message</b></h4>
                            <input type="text" id="name" name="name" placeholder="Your Name" required>
                            <input type="email" id="email" name="email" placeholder="Your Email" required>
                            <textarea id="message" name="message" placeholder="Your Message" required></textarea>
                            <button type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <footer class="footer py-3">
        <div class="container text-center">
            &copy; 2024 Vivek Jain. All Rights Reserved
        </div>
    </footer>

    <script>
        // active nav link
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navLinks.forEach(l => l.classList.remove('active'));
                link.classList.add('active');
            });
        });

        var grid = document.querySelector('.grid');
        var msnry = new Masonry(grid, {
            itemSelector: '.grid-item',
            percentPosition: true
        });

        function validateForm() {
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var message = document.getElementById('message').value;
        if (name == "" || email == "" || message == "") {
            alert("All fields must be filled out");
            return false;
        }
        return true;
    }
    </script>
    <script src="https://kit.fontawesome.com/8e1f1f0fda.js" crossorigin="anonymous"></script>
    <script async src="//www.instagram.com/embed.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
