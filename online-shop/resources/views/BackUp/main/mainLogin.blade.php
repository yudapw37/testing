<!DOCTYPE html>

<html lang="en">







<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="csrf-token" content="{{ csrf_token() }}" />
    <meta name="_token" content="{{csrf_token()}}" />
    <meta http-equiv="Cache-Control" content="no-store" />
    <meta name="keywords" content="book, buku, islam, buku islam, aqwam, solo" />
    <meta name="author" content="cemara it solution" />
    <meta name="Description" content="Aqwam Book Store">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}" type="image/png">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>







<style media="screen">



    <?php



        // $login = 1;



        //     if ($login == 1) {



        //     echo "



        //         .product-button-group{



        //         display: none!important;



        //         }



        //     ";



        // }



    ?>



</style>







<body>

            <p class="text-left " hidden style="font-size:12px;"><span id="urlimage">{{$urlImage}}</span></p>

    <!-- push menu-->



    <div class="pushmenu menu-home5">



        <div class="menu-push">



            <span class="close-left js-close"><i class="icon-close f-20"></i></span>



            <div class="clearfix"></div>



            <!-- <form role="search" method="get" id="searchform" class="searchform" action="/search">



                <div>



                    <label class="screen-reader-text" for="q"></label>



                    <input type="text" placeholder="Search for products" value="" name="q" id="q" autocomplete="off">



                    <input type="hidden" name="type" value="product">



                    <button type="submit" id="searchsubmit"><i class="ion-ios-search-strong"></i></button>



                </div>



            </form> -->



            <ul class="nav-home5 js-menubar">



                <li class="level1 active dropdown"><a href="/">Home</a>

                </li>



                 <li class="level1 active dropdown">

                   <a href="#">Akun</a>

                  <span class="icon-sub-menu"></span>

                  <ul class="menu-level1 js-open-menu">

                  <li class="level2"><a href="/login" title="">Login Akun</a></li>





                </ul>

                </li>



                <li class="level1 active dropdown"><a href="#">Categories</a>



                    <span class="icon-sub-menu"></span>



                    <ul class="menu-level1 js-open-menu" id="categoriesmenu">



                        <li class="level2"><a href="/login" title="">Login Akun</a></li>



                        <li class="level2"><a href="/register" title="">Register Akun</a></li>

                    </ul>



                </li>



            </ul>



        </div>



    </div>



 <!-- end push menu-->



        <div class="wrappage">



            <header id="header" class="header-v1">



                <div class="topbar hidden-xs hidden-sm">



                    <div class="container container-240">



                        <div class="row flex">



                            <div class="col-md-6 col-sm-6 col-xs-4 flex-left">



                                <div class="topbar-left">



                                    <div class="element element-store hidden-xs hidden-sm">



                                        <a id="label1" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">



                                        <img src="{{$getBaseUrl}}img/icon-map.png" alt="">



                                        <span>Store Location</span>







                                        </a>



                                    </div>



                                    <div class="element hidden-xs hidden-sm">



                                        <a href="#"><img src="{{$getBaseUrl}}img/icon-track.png" alt=""><span>Track Your Order</span></a>



                                    </div>



                                    <div class="element element-account hidden-md hidden-lg">



                                        <a href="#">My Account</a>



                                    </div>



                                </div>



                            </div>



                            <div class="col-md-6 col-sm-6 col-xs-8 flex-right">



                                <div class="topbar-right">



                                    <div class="element hidden-xs hidden-sm">



                                        <a href="#">Blog Aqwam </a>



                                    </div>



                                    <div class="element hidden-xs hidden-sm">



                                        <a href="#">Tv Aqwam</a>



                                    </div>



                                    <div class="element element-leaguage">



                                        <a id="label2" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" aria-label="label2">



                                            <img style="width:19px;" src="{{$getBaseUrl}}img/icon-l.png" alt="">

                                            <span>Login Akun</span>

                                        </a>



                                    </div>



                                    <div class="element element-currency">



                                        <a id="label3" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" aria-label="label3">







                                        </a>



                                    </div>



                                </div>



                            </div>



                        </div>



                    </div>



                </div>



                <div class="header-center">



                    <div class="container container-240">



                    <div class="row flex">







                            <div class="col-lg-2 col-md-2 col-sm-7 col-xs-8 v-center header-logo">
                              <div class="imgHeaderCon">
                                <div style="width:30px;float:left;padding-top: 23px;">
                                  <a href="#" class="hidden-md hidden-lg icon-pushmenu js-push-menu">
                                    <i style="color:white;font-size:30px;" class="fa fa-bars"></i>
                                  </a>
                                </div>
                                <a href="/">
                                  <img src="img/aqwam_putih.png" alt="" class="imgHeader">
                                </a>
                              </div>
                            </div>



                            <div class="col-lg-7 col-md-7 v-center header-search hidden-xs hidden-sm">



                                <form method="get" class="searchform ajax-search" style="margin-left: -50px!important;" action="/search" role="search">



                                    <!-- <input type="hidden" name="type" value="product"> -->



                                    <input type="text" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" name="q" class="form-control" placeholder="Saya ingin buku...">





                                    <div style="cursor: default" class="search-panel">







                                    </div>



                                    <span class="input-group-btn">



                                            <button class="button_search" type="submit" aria-label="search"><i class="ion-ios-search-strong"></i></button>



                                    </span>



                                </form>



                            </div>



                            <div class="col-lg-3  col-md-3 col-sm-5 col-xs-4 v-center header-sub">



                                <div class="right-panel">



                                    <div class="header-sub-element row">



                                    <div class="sub-left hidden-xs hidden-sm" style="margin-right:0px!important">



                                        <img style="width:90%!important" src="{{$getBaseUrl}}img/icon-call.png" alt="">



                                    </div>



                                    <div class="sub-right hidden-xs hidden-sm" style="font-size: 13px;margin-right:13px">



                                        <span>Call Us Free</span>



                                        <div id = 'headerPhone'>{{$headerphone->text}}</div>



                                    </div>

                                    <a id="akunScroll" class="dropdown-toggle" data-toggle="dropdown" href="/akun" role="button" aria-haspopup="true" aria-expanded="false" aria-label="label2" style="display: none;">
                                      <img style="width: 25px;" src="img/icon-l.png" alt="">
                                    </a>


                                    <div class="hidden-lg hidden-md" style="margin-right:10px;">
                                      <!-- <a href="/akun"><img src="img/co-login.png" alt=""></a> -->
                                      <a id="label2" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" aria-label="label2">

                                          <a href="/login"><img style="width:19px;" src="img/icon-l.png" alt=""></a>

                                      </a>

                                    </div>



                                        <div class="cart">



                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="label5">



                                                <img src="{{$getBaseUrl}}img/icon-cart.png" alt="">



                                            </a>





                                        </div>



                                    </div>



                                </div>



                            </div>



                        </div>



                        <br style="clear:both" />



                        <div style="width:100%" class="hidden-md hidden-lg">



                        <table style="width:100%">



                            <tr>



                            <!-- <td style="width:30px">



                                <a href="#" class="hidden-md hidden-lg icon-pushmenu js-push-menu">



                                <i style="color:white;font-size:30px" class="fa fa-bars"></i>



                                </a> -->



                            </td>



                            <td>



                              <form method="get" class="searchform ajax-search" action="/search" role="search">
                                <!-- <input type="text" name="" class="form-control" value=""> -->
                                <input type="text" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" name="q" class="form-control" placeholder="Saya ingin buku...">
                              </form>



                            </td>



                            </tr>







                        </table>



                        <!-- <div style="float:left;width:30px!important;border:1px solid white">



                        </div>



                        <div style="margin-bottom: 15px;width: 90%;float:right;border:1px solid white">



                    </div> -->



                    </div>



                    </div>



                </div>



            </header>



            <div class="main-head">
              <div id="btnAkunCon" class="d-none" style="cursor:pointer">
                <a id="btnAkunIns">Akun</a>
              </div>
              <div id="btnKeluarCon" class="d-none" style="cursor:pointer">
                <a id="btnKeluarIns">Keluar</a>
              </div>
              <div id="btnAkunConM" class="d-none" style="cursor:pointer">
                <a id="btnAkunIns" href="/akun">Akun</a>
              </div>
              <div id="btnKeluarConM" class="d-none" style="cursor:pointer">
                <a id="btnKeluarIns" href="/logout">Keluar</a>
              </div>
            </div>







            @yield('body')







            <div class="foot">







            </div>



            <footer>
              <div class="feature">
                <div class="container container-240">
                  <img src="img/banner/banner_down.png" alt="" class="img-responsive">
                </div>
              </div>

                <div class="f-top">
                    <div class="container container-240">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                <div class="footer-block footer-about">
                                  <div class="f-logo" style="text-align:center">
                                      <a href="#"><img src="{{$getBaseUrl}}img/aqwam_putih.png" alt="" class="img-reponsive" style="max-height:120px"></a>
                                  </div>

                                  <ul class="footer-block-content" style="text-align:center">
                                    <li class="moto">
                                      <span>AQWAM STORE - Jembatan Ilmu. <br> Belajar Islam dari Sumbernya</span>
                                    </li>
                                  </ul>
                                    <div class="footer-social social">
                                        <h3 class="footer-block-title">Follow us</h3>
                                        <a href="#" class="fa fa-twitter"></a>
                                        <a href="#" class="fa fa-dribbble"></a>
                                        <a href="#" class="fa fa-behance"></a>
                                        <a href="#" class="fa fa-instagram"></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

                                <div class="footer-block">
                                    <div class="footer-block-newsletter">

                                        <h3 class="footer-block-title">Kantor Pusat (Solo)</h3>
                                        <ul>
                                        <li class="address" id="addr1">
                                            <span>{{$footeraddrs1->text}}</span>

                                        </li>

                                        <li class="phone" id="phone1">

                                            <span>{{$footerphone1->text}}</span>

                                        </li>
                                    </ul>

                                    </div>
                                    <br>
                                    <br>
                                    <div class="footer-block-newsletter">
                                        <h3 class="footer-block-title">Kantor Cabang (Jakarta)</h3>
                                        <ul>
                                        <li class="address" id="addr2">

                                            <span>{{$footeraddrs2->text}}</span>

                                        </li>
                                        <li class="phone" id="phone2">

                                            <span>{{$footerphone2->text}}</span>

                                        </li>
                                        </ul>

                                    </div>

                                </div>

                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                                <div class="footer-block">

                                    <div class="footer-block-newsletter">

                                        <h3 class="footer-block-title">Berlangganan</h3>

                                        <p>Masukkan No Wa Anda untuk menerima pembaruan harian langsung ke Wa Anda</p>

                                        <form class="form_newsletter" action="/subscribe" method="post">

                                        @csrf

                                            <input type="hp" value="" placeholder="Masukkan No Hp anda" name="text" id="text" class="newsletter-input form-control">

                                            <button id="subscribe2" class="button_mini btn btn-gradient" type="submit">

                                                Simpan

                                            </button>

                                        </form>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="f-bottom">

                    <div class="container container-240">

                        <div class="row flex lr">

                            <div class="col-xs-6 f-copyright text-center"><span>© 2020 Cemara IT Solution.</span></div>

                        </div>

                    </div>

                </div>

            </footer>



            <a href="#" class="btn-gradient scroll_top"><i class="ion-ios-arrow-up"></i></a>
            <script src="{{asset('/js/jquery.js')}}"></script>
            <script src="{{asset('/js/bootstrap.js')}}"></script>
            <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
            <script src="{{asset('/js/slick.js')}}"></script>
            <script src="{{asset('/js/countdown.js')}}"></script>
            <script src="{{asset('/js/main.js')}}"></script>
            <script src="{{asset('/js/sweetalert2.all.min.js')}}"></script>
        </div>

    </body>



    <script type="text/javascript">

    function passVis(){

      var x = document.getElementById("inptPass");

      var y = document.getElementById("hide");

      if (x.type === 'password') {

        x.type = "text";

        y.className= "fa fa-eye";

      } else {

        x.type = "password";

        y.className= "fa fa-eye-slash";

      }

    }





    var lastScrollTop = 0;

    var ver = document.getElementById("verHide");



    document.addEventListener("scroll", function(){

     var st = window.pageYOffset || document.documentElement.scrollTop;

     if (st > lastScrollTop){

       if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {

         $("#hdrBtm").fadeOut(100);

         $("#verHide").fadeOut(100);

       }



     } else {

         $("#hdrBtm").fadeIn(500);

         // $("#verHide").fadeIn(800);

     }

     lastScrollTop = st <= 0 ? 0 : st;

    }, false);

    </script>



<script>
var imageurl = document.getElementById('urlimage').innerHTML;

        var a = $('#cartcount').data('cartcount');



            $(document).ready(function(){



                $('.addcart').click(function(){



                    var id = $(this).data('id');



                    if(id){

                            $.ajax({



                            url:"{{url('cart/')}}/"+id,



                            type:"GET",



                            success:function(response){



                                if (response == 'sukses'){



                                    Swal.fire({



                                            position: 'bottom-end',



                                            icon: 'success',



                                            title: 'Sukses Ditambahkan ke Keranjang',



                                            showConfirmButton: false,



                                            timer: 1500



                                            });



                                            $.ajax({



                                                    url:"{{url('cartcount')}}",



                                                    type:"GET",



                                                    success:function(response){



                                                        console.log(response);



                                                        document.getElementById("cartcount").innerHTML = response;



                                                    }});







                                    }



                                else if(response == 'login'){



                                    Swal.fire({



                                                title: 'Anda harus login dahulu',



                                                icon: 'info',



                                                showCancelButton: true,



                                                confirmButtonColor: '#3085d6',



                                                cancelButtonColor: '#d33',



                                                confirmButtonText: 'Ok, Login'



                                                })



                                        .then((result) => {



                                                    if (result.isConfirmed) {



                                                        console.log('login');



                                                        window.location.href = "{{URL::to('login/')}}";



                                                    }



                                                });



                                }



                                else{



                                    console.log(response);



                                    Swal.fire({



                                            position: 'bottom-end',



                                            icon: 'info',



                                            title: response,



                                            showConfirmButton: false,



                                            timer: 2000



                                            });



                                }



                            }



                        });



                    }



                    else{



                        console.log('Error');



                    }



                });



            });





            $(document).ready(function(){



                $('.addwishlist').click(function(){







                    var id = $(this).data('id');



                    // alert(id);



                    if(id){



                        // alert(id);



                            $.ajax({



                            url:"{{url('wishlist/')}}/"+id,



                            type:"GET",



                            success:function(response){



                                if (response == 'sukses'){



                                    Swal.fire({



                                            position: 'bottom-end',



                                            icon: 'success',



                                            title: 'Sukses Ditambahkan ke Favorit',



                                            showConfirmButton: false,



                                            timer: 1500



                                            });



                                    }



                                else if(response == 'login'){



                                    Swal.fire({



                                                title: 'Anda harus login dahulu',



                                                icon: 'info',



                                                showCancelButton: true,



                                                confirmButtonColor: '#3085d6',



                                                cancelButtonColor: '#d33',



                                                confirmButtonText: 'Ok, Login'



                                                }).then((result) => {



                                                    if (result.isConfirmed) {



                                                        console.log('login');



                                                        window.location.href = "{{URL::to('login/')}}";



                                                    }



                                                });



                                }



                                else{



                                    console.log(response);



                                    Swal.fire({



                                            position: 'bottom-end',



                                            icon: 'info',



                                            title: response,



                                            showConfirmButton: false,



                                            timer: 2000



                                            });



                                }



                            }



                        });



                    }



                    else{



                        console.log('Error');



                    }



                });



            });



            $(document).ready(function(){



                $('.cartdropdownget').click(function(){



                    // alert("testcart");



                            $.ajax({



                            url:"{{url('cart')}}/",



                            type:"GET",



                            success:function(response){

                                var cart = ""

                                variable = response;

                                for (i in variable) {

                                    cart += "<li class='item-cart'><div class='product-img-wrap'><a href=''><img src='"+imageurl+variable[i].gambar_buku+"' alt='' class='img-reponsive'></a></div><div class='product-details'><div class='inner-left'><div class='product-name'><a href=''>"+variable[i].judul_buku+"</a></div><span>( x1)</span><div class='product-price' style='color:red; text-align: right !important;'>"+variable[i].harga+"</div></div></div></li>"

                                }

                                // alert(variable);



                                document.getElementById("cartvalue").innerHTML = cart;



                            }



                        });

                        $.ajax({



                            url:"{{url('cartcount')}}/",



                            type:"GET",



                            success:function(response){

                                var cart = ""

                                variable = response;



                                // alert(variable);



                                document.getElementById("countcartjs").innerHTML = "Keranjang (" +variable+")"; ;



                            }



                        });





                });



            });



        </script>

</html>