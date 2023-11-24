<!DOCTYPE html>
<html lang="en">

  <head>
    <base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--

TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>

                        <!--
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>
                            <li class="scroll-to-section">
                                @auth
                                <a href="{{url('/showcart', Auth::user()->id)}}">
                                Cart{{$count}}</a>
                                @endauth
                                @guest
                                Cart[0]
                                @endguest
                            </a></li>
                            <li>
                            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                       <li>
                       <x-app-layout>

                        </x-app-layout>

                       </li>
                    @else
                       <li> <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>

                        @if (Route::has('register'))
                           <li> <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
                            </li>
                        </ul>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div id="top">
    <table align="center">
        <tr>
            <th style="padding: 30px; background-color: orangered; color: #fff;">Food Name</th>
            <th style="padding: 30px; background-color: orangered; color: #fff;">Price</th>
            <th style="padding: 30px; background-color: orangered; color: #fff;">Quantity</th>
            <th style="padding: 30px; background-color: orangered; color: #fff;">Remove</th>
        </tr>
        <form action="{{url('orderconfirm')}}" method="post">
            @csrf
        @foreach($data as $data)
        <tr align="center">
            <td style="padding: 10px;"><input type="text" name="foodname[]" value="{{$data->title}}" hidden>{{$data->title}}</td>
            <td style="padding: 10px;"><input type="text" name="price[]" value="{{$data->price}}" hidden>{{$data->price}}</td>
            <td style="padding: 10px;"><input type="text" name="quantity[]" value="{{$data->quantity}}" hidden>{{$data->quantity}}</td>
        </tr>
        @endforeach

        @foreach($data2 as $data2)
        <tr style="position: relative; top: -85px; right
        : -400px;">
        <td style="padding: 10px;"><a href="{{url('/remove' ,$data2->id)}}"  style="text-decoration: none; color: #ff0000;">Remove</a></td>
        @endforeach
    </tr>
    </table>
    <div style="text-align: center; margin-top: 20px;">
    <button id="order" type="button" style="padding: 10px 20px; background-color: orangered; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Order Now</button>
</div>

<div style="max-width: 300px; margin: 0 auto; display: none;" id="appear">
    <div style="margin-bottom: 10px;">
        <label for="" style="display: block; font-weight: bold;">Name</label>
        <input type="text" name="name" placeholder="Enter your name" style="width: 100%; padding: 5px; border: 1px solid #ccc; border-radius: 3px;">
    </div>
    <div style="margin-bottom: 10px;">
        <label for="" style="display: block; font-weight: bold;">Phone</label>
        <input type="text" name="phone" placeholder="Enter your contact" style="width: 100%; padding: 5px; border: 1px solid #ccc; border-radius: 3px;">
    </div>
    <div>
        <label for="" style="display: block; font-weight: bold;">Address</label>
        <input type="text" name="address" placeholder="Enter your address" style="width: 100%; padding: 5px; border: 1px solid #ccc; border-radius: 3px;">
    </div>
    <div style="text-align: center; margin-top: 20px;">
    <input type="submit" value="Confirm your Order" style="padding: 10px 20px; background-color: orangered; color: #fff; border: none; border-radius: 5px; cursor: pointer;">
    <button id="close" type="button" style="padding: 10px 20px; background-color: #61A3BA; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Close</button>

</div>

</div>

</form>

</div>


</div>

<script type="text/javascript">
    $("#order").click(
        function() {
            $("#appear").show();
        }
    );
    $("#close").click(
        function() {
            $("#appear").hide();
        }
    );

</script>


    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);

            });
        });

    </script>
  </body>
</html>
