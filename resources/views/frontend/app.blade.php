<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <!--header -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" type="text/css">

    <!-- Css custom -->
    <link rel="stylesheet" href="{{asset('frontend/customStyle/style.css')}}" type="text/css">

</head>

<body>
    <div id="preloder2" class="proloder2">
        <span class="loader2" id="getloader"></span>

    </div>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    @yield('content')
    <!--- display the footer -->
    @include('frontend.partials.Footer')

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('frontend/js/mixitup.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    <script src="{{asset('admin2/js/jquery-3.7.0.min.js')}}"></script>
    @yield('scripts')
    <script>
        disable_spinner(true)

        function disable_spinner(should_i_disable_it) {
            if (should_i_disable_it) {
                document.querySelector('#preloder2').removeAttribute('id')
                document.querySelector('.loader2').classList.remove('loader2')
            } else {
                document.querySelector('.proloder2').setAttribute('id', 'preloder2');
                document.querySelector('#getloader').classList.add('loader2')
            }

        }
    </script>
    <script>
            var size_id  ;
            var color_id;
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            showMember();

            $('.size-check').on('click', function() {
                $(this).children(':first-child').attr('checked','checked');
                size_id = $(this).attr('size_id');
                color_id = $('.opacity').attr('color')
                if (color_id) {
                    $.ajax({
                        url: '../fetch-size/' + prod_id + '/' + size_id + '/' + color_id,
                        dataType: 'json',
                        success: function(data) {
                            $('#available-qte').empty().html(data.availability)
                        },
                        error: function(err) {
                            console.log(err)
                        }
                    })
                } else(
                    alert('choose the color first')
                )
                return false

            })
            $('#add-cart-form').on('submit', function(e) {
                e.preventDefault()
                disable_spinner(false);
                var form = $(this).serialize();
                var url = $(this).attr('action');

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: form,
                    dataType : 'json',
                        success: function(data) {
                        console.log(data)
                        disable_spinner(true);
                        if(data.count){
                            $(".number-of-carts").empty().html(' '+data.count)
                        }
                    },
                    error: function(err) {
                        console.log(err)
                        disable_spinner(true);

                        alert('error in your request')
                    }
                });
            });
 

            function showMember() {
                $.get("{{ route('admin.categories.list') }}", function(data) {

                    $('#memberBody').empty().html(data);
                })
            }



        })
    </script>
    <script> 
    toastr.options = {
        "progressBar" : true,
    }
    toastr.success('mabrok mabrok')
    </script>

</body>

</html>