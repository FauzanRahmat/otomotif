<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kawasaki</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <link href="https://seeklogo.com/images/K/kawasaki-premium-logo-9C62101373-seeklogo.com.png" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/gallery.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/ekko-lightbox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
        <div class="container-xxl position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <div href="" class="navbar-brand p-0">
                    <img src="{{ asset('images/'.$l->image)}}" alt="" width="100%">
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav py-0">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#produk" class="nav-item nav-link">Product</a>
                        <a href="#testi" class="nav-item nav-link">Testimonial</a>
                        <a href="#order" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>

            <div class="container-xxl">
                    <div class="slider_section position-relative">
                        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner"> 
                            @foreach ($d as $item)
                                <div class="carousel-item {{$loop->iteration == 1 ? 'active' : ''}}">
                                    <div class="img_container">
                                        <div class="img-box">
                                            <img src="{{asset('images/'.$item->image)}}" class="" alt="...">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                          </div>
                          <div class="carousel_btn_box">
                            <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                              <i class="fa fa-arrow-left" aria-hidden="true"></i>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                              <i class="fa fa-arrow-right" aria-hidden="true"></i>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                        </div>
                        @foreach ($j as $item)

                        <div class="detail-box">
                          <div class="col-md-8 col-lg-6 mx-auto">
                            <div class="inner_detail-box">
                              <h1>
                                {{$item->title}}
                              </h1>
                              <p>
                                "{{$item->about}}."
                            </p>
                            </div>
                          </div>
                        </div>
                        @endforeach

                    </div>
            </div>
        </div>

        
        <div class="service-area wow fadeInUp" data-wow-delay="0.3s">
          <div class="container" >
              <div class="row">
                                          
                <div class="col-md-3 col-sm-6">
                          <!-- single service start -->
                          <div class="single-service text-center" style="width: 100%">
                                      <div class="icon-title">
                                          <i class="fas fa-phone-square-alt"></i>
                                      </div>
                                      <h3 style="margin-top: 20px">{{$pelayanan1->title}}</h3>
                                      <p>{{$pelayanan1->about}}</p>
                          </div>
                          <!-- single service end -->
                      </div>
                                          <div class="col-md-3 col-sm-6">
                          <!-- single service start -->
                          <div class="single-service text-center" style="width: 100%">
                                      <div class="icon-title">
                                          <i class="fas fa-pencil-alt"></i>
                                      </div>
                                      <h3 style="margin-top: 20px">{{$pelayanan2->title}}</h3>
                                      <p>{{$pelayanan2->about}}</p>
                          </div>
                          <!-- single service end -->
                      </div>
                                          <div class="col-md-3 col-sm-6">
                          <!-- single service start -->
                          <div class="single-service text-center" style="width: 100%">
                                      <div class="icon-title">
                                          <i class="fas fa-truck"></i>
                                      </div>
                                      <h3 style="margin-top: 20px">{{$pelayanan3->title}}</h3>
                                      <p>{{$pelayanan3->about}}</p>
                          </div>
                          <!-- single service end -->
                      </div>
                                          <div class="col-md-3 col-sm-6">
                          <!-- single service start -->
                          <div class="single-service text-center" style="width: 100%">
                                      <div class="icon-title">
                                          <i class="fas fa-handshake"></i>
                                      </div>
                                      <h3 style="margin-top: 20px">{{$pelayanan4->title}}</h3>
                                      <p>{{$pelayanan4->about}}</p>
                          </div>
                          <!-- single service end -->
                      </div>
                                      
              </div>
          </div>
      </div>

        <div class="gallery_section layout_padding" id="produk">
            <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
              <div class="heading_container heading_center">
                <div class="title">
                    <h2 id="gallery">
                        Product
                    </h2> 
                </div>
              </div>
            <div class="row">
                <?php
          //Columns must be a factor of 12 (1,2,3,4,6,12)
          $numOfCols = 4;
          $rowCount = 0;
          $bootstrapColWidth = 12 / $numOfCols;
          foreach ($a as $item){
            if($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php } 
              $rowCount++; ?>  
                   <div class="col-sm-6 col-md-3 px-0" id="filterable-cards">
                    <div class="img-box">
                      <img src="{{ asset('images/'.$item->image)}}" style="200px">
                    </div>
                    <div class="text-product">
                        <h6>{{$item->tahun}}</h6>                       
                        <h3>{{$item->judul}}</h3>
                       <p>{{$item->harga}}</p>
                   </div>   
                  </div>
          <?php
              if($rowCount % $numOfCols == 0) { ?> </div> <?php } } ?>
                   
            </div>
              <div class="btn-box">
                <a href="">
                  View All
                </a>
              </div>
            </div>
          </div>

          <div class="shop-area wow fadeInUp" data-wow-delay="0.1s" >
                      <div class="title">
                        <h2>
                            Pelayanan Kami
                        </h2> 
                      </div>
            <div class="container">
                <div class="row">
                                            
                  <div class="col-md-6 col-sm-6">
                            <!-- single service start -->
                            <div class="single-service">
                                <div class="icon-title2 col-md-2 d-flex">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <h3 style="margin-left:20px">Area Penjualan</h3>
                                </div>
                                <div class="col-md-10">
                                    <p>Pengiriman kami meliputi Seluruh Jakarta, Bekasi, Depok, Tangerang, Bogor, Cikarang, Serpong, Serang dan Cilegon. Free Ongkos Kirim unit motor dan STNK.</p>
                                </div>
                            </div>
                            <!-- single service end -->
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <!-- single service start -->
                            <div class="single-service">
                                <div class="icon-title2 col-md-2" style="display: flex">
                                    <i class="fab fa-internet-explorer"></i>
                                    <h3 style="margin-left: 20px">Penjualan Online</h3>
                                </div>
                                <div class="col-md-10">
                                    <p>Beli motor kawasaki secara online memiliki banyak manfaat; mehilangkan jarak dan waktu, pangkas biaya, harga terbaik dan aman dengan sistem bayar di rumah</p>
                                </div>
                            </div>
                            <!-- single service end -->
                        </div>
                                            <div class="col-md-6 col-sm-6">
                            <!-- single service start -->
                            <div class="single-service">
                                <div class="icon-title2 col-md-2">
                                    <i class="fas fa-info-circle"></i>
                                    <h3 style="margin-left: 20px">Informasi Kawasaki</h3>
                                </div>
                                <div class="col-md-10">
                                    <p>Informasi tentang harga kawasaki terbaru berserta promo diskonnya. Informasi Perbandingan Tipe motor yang cocok dengan lifestyle dan kebutuhan anda. Berita kegiatan dan produk launching kawasaki terkini</p>
                                </div>
                            </div>
                            <!-- single service end -->
                        </div>
                                            <div class="col-md-6 col-sm-6">
                            <!-- single service start -->
                            <div class="single-service">
                                <div class="icon-title2 col-md-2">
                                    <i class="far fa-money-bill-alt"></i>
                                    <h3 style="margin-left: 20px">Kredit Motor</h3>
                                </div>
                                <div class="col-md-10">
                                    <p>Wujudkan mimpi anda memiliki Motor Kawasaki idaman anda sekarang dengan cara membeli secara kredit. Kami berikan potongan Diskon uang muka dan angsuran murah.</p>
                                </div>
                            </div>
                            <!-- single service end -->
                        </div>
                                       
                </div>
            </div>
        </div>

          <div class="container-xxl py-5" id="testi">
            <div class="title">
              <h2>
                  Testimonial
              </h2> 
            </div>                    
            <div class="container py-5 px-lg-5">
              <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5">What Say Our Clients!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="{{asset('images/'.$testimoni1->image)}}" style="width: 85px; height: 85px;">
                            <div class="ms-4">
                                <h5 class="mb-1">{{$testimoni1->nama}}</h5>
                                <p class="mb-1">{{$testimoni1->prof}}</p>
                                
                            </div>
                        </div>
                        <p class="mb-0">{{$testimoni1->deskripsi}}</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="{{asset('images/'.$testimoni2->image)}}" style="width: 85px; height: 85px;">
                            <div class="ms-4">
                                <h5 class="mb-1">{{$testimoni2->nama}}</h5>
                                <p class="mb-1">{{$testimoni2->prof}}</p>
                                
                            </div>
                        </div>
                        <p class="mb-0">{{$testimoni2->deskripsi}}</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="{{asset('images/'.$testimoni3->image)}}" style="width: 85px; height: 85px;">
                            <div class="ms-4">
                                <h5 class="mb-1">{{$testimoni3->nama}}</h5>
                                <p class="mb-1">{{$testimoni3->prof}}</p>
                                
                            </div>
                        </div>
                        <p class="mb-0">{{$testimoni3->deskripsi}}</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="{{asset('images/'.$testimoni4->image)}}" style="width: 85px; height: 85px;">
                            <div class="ms-4">
                                <h5 class="mb-1">{{$testimoni4->nama}}</h5>
                                <p class="mb-1">{{$testimoni4->prof}}</p>
                                
                            </div>
                        </div>
                        <p class="mb-0">{{$testimoni4->deskripsi}}</p>
                    </div>
                </div>
            </div>
        </div>

          <div class="heading_container heading_center mt-5">
            <div class="title">
                <h2 id="order">
                    Order Kendaraan Anda
                </h2> 
            </div>
        </div>  
        <div class="container-xxl py-5" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <p class="text-center mb-4">Order Kendaraan Anda Sekarang Tanpa Ongkir Dan Pengiriman Cepat Menggunakan Awan Kinton</p>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="btn-box">
                                        <a href="">
                                          Send Message
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <a href="https://api.whatsapp.com/send?phone=085158211804&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
            </a>
        </div>

        <footer class="footer-g text-center text-md-left wow fadeIn" data-wow-delay="0.1s" >
            <div class="container">
                <div class="row pt-4">
                    <div class="col-sm-6 col-md-3 pb-4">
                        <h4 class="mb-4 putter">
                            Type Motorcycle
                        </h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#" class="text-light">Off Road</a>
                            </li>
                            <li>
                                <a href="#" class="text-light">Classic</a>
                            </li>
                            <li>
                                <a href="#" class="text-light">Sport</a>
                            </li>
                            <li>
                                <a href="#" class="text-light">Naked</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 pb-4">
                        <h4 class="mb-4 putter">
                            Brochure
                        </h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#" class="text-light">Product</a>
                            </li>
                            <li>
                                <a href="#" class="text-light">Finance</a>
                            </li>
                            <li>
                                <a href="#" class="text-light">Video</a>
                            </li>
                            <li>
                                <a href="#" class="text-light">Hot News</a>
                            </li>
                        </ul>
                    </div>
                    @foreach ($e as $item)
                        
                    <div class="col-md-6 pb-4">
                        <h4 class="mb-4 putter">
                            About Us
                        </h4>
                        <ul class="list-unstyled">
                            <li>
                                <a>{{$item->about}}</a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="container-xxl">
                        <div class="col-md-5 col-lg-6 " style="width: 100vh">
                            <div class="subsribe-box" >
                                <iframe src="{{$item->location}}" width="1115" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters potter">

                    <div class="col-12 col-sm-6 col-md-8" style="margin-top: 20px">
                        <a href="https://portfolio-huntara.netlify.app/" style="color:white" target="_blank">© 2023 Kawasaki Motor Indonesia</a>
                        </p>
                    </div>    
                    <div class="col-6 col-md-4">
                        <ul class="social-icons">
                        <li><a class="facebook" href="{{$item->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="{{$item->twitt}}"><i class="fa fa-twitter" target="_blank"></i></a></li>
                        <li><a class="instagram" href="{{$item->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a class="youtube" href="{{$item->youtube   }}" target="_blank"><i class="fa fa-youtube"></i></a></li>   
                        </ul>
                    </div>
                </div>
                @endforeach

        </footer>

        
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/ekko-lightbox.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>

  
  
  
</body>

</html>