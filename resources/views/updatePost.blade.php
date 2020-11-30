@extends('layouts.app')
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Post - CYBER MEDIA • SECLAB</title>
    <meta name="description" content="Update Profile Page">
    <meta name="keywords" content="update profile,infinite">
    <meta name="author" content="CYBSECGROUP">
    <meta name="robots" content="all">
    <meta name="revisit-after" content="1 Days">
    <meta property="og:locale" content="ka_GE">
    <meta property="og:site_name" content="CSG SECLAB">
    <meta property="og:type" content="website/">
    <meta property="og:title" content="Update Profile - CYBER MEDIA • SECLAB">
    <meta property="og:description" content="Update Profile Page">
    <meta property="og:url" content="https://seclab.ge/">
    <meta name="twitter:card" content="summary/">
    <meta name="twitter:title" content="Update Profile - CYBER MEDIA • SECLAB">
    <meta name="twitter:description" content="Update Profile Page">
    
            <meta name="google-site-verification" content="12s8HiHkgGz2G-aZSS7LsEuN_8z8KNdSr3KGRwQvlm8">
                <!-- Google Tag Manager -->
                
            {{-- <script async="" src="./Update Profile - CYBER MEDIA • SECLAB_files/gtm.js.download"></script><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-KQ4SCZN');</script> --}}
            
            <!-- End Google Tag Manager -->
            
            <!-- Google Tag Manager (noscript) -->
            {{-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ4SCZN"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> --}}
            <!-- End Google Tag Manager (noscript) -->

    <link rel="canonical" href="https://seclab.ge/">
    <link rel="shortcut icon" type="image/png" href="{{ url('/') }}">
    <link href="./Update Profile - CYBER MEDIA • SECLAB_files/css" rel="stylesheet">    <link href="./Update Profile - CYBER MEDIA • SECLAB_files/css(1)" rel="stylesheet">    <link href="./Update Profile - CYBER MEDIA • SECLAB_files/css(2)" rel="stylesheet">    <!-- Font-awesome CSS -->
    <link href="./Update Profile - CYBER MEDIA • SECLAB_files/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./Update Profile - CYBER MEDIA • SECLAB_files/bootstrap.min.css">
    <!-- Owl-carousel CSS -->
    <link href="./Update Profile - CYBER MEDIA • SECLAB_files/owl.carousel.min.css" rel="stylesheet">
    <link href="./Update Profile - CYBER MEDIA • SECLAB_files/owl.theme.default.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link rel="stylesheet" href="./Update Profile - CYBER MEDIA • SECLAB_files/grey.css">
    <!-- Jquery Confirm CSS -->
    <link href="./Update Profile - CYBER MEDIA • SECLAB_files/jquery-confirm.min.css" rel="stylesheet">
    <!-- Magnific Popup CSS -->
    <link href="./Update Profile - CYBER MEDIA • SECLAB_files/magnific-popup.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="./Update Profile - CYBER MEDIA • SECLAB_files/style.min.css" rel="stylesheet">
    <!-- Color CSS -->
    <link href="./Update Profile - CYBER MEDIA • SECLAB_files/dark.min.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="./Update Profile - CYBER MEDIA • SECLAB_files/responsive.min.css" rel="stylesheet">

    {{-- <script src="./Update Profile - CYBER MEDIA • SECLAB_files/jquery-1.12.4.min.js.download"></script> --}}
<!-- Global site tag (gtag.js) - Google Analytics -->
{{-- <script async="" src="./Update Profile - CYBER MEDIA • SECLAB_files/js"></script> --}}
{{-- <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3GLF6HM9WW');
</script> --}}<meta property="og:image" content="https://images2.imgbox.com/7c/85/aQSB9iDG_o.png">
<style>
    body {
    font-family: "Oxygen", Helvetica, Arial, sans-serif;    }

    .widget-title .title, .home-slider-item .title, .reactions .title-reactions, .poll .title, .w-popular-list li .title, .random-post-slider .item-info .title, .first-tmp-slider-item .item-info .title, .post-item-horizontal .title, .post-item .title, .footer-widget .title, .f-random-list li .title, .post-content .post-title .title, .related-posts .post-list li .title, .related-posts .related-post-title .title, .comment-tabs a, .page-title, .leave-reply-title, .post-item-boxed .title, .w-our-picks-list li .title {
    font-family: "Roboto", Helvetica, Arial, sans-serif;    }

    .text-style {
    font-family: "Ubuntu", Helvetica, Arial, sans-serif;    }
</style>    <script>var rtl = false;</script>
    <script>
        var csfr_token_name = 'infinite_csrf_token';
        var csfr_cookie_name = 'infinite_csrf_cookie';
        var base_url = 'https://seclab.ge/';
    </script>
</head>
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="page-content">
                        
        </div>
</div> --}}
<table class="table">
            <div class="container">
                <form action="{{ route('storeposts') }}" method="POST" enctype="multipart/form-data" id="add_post">
                    @csrf
                    {{-- <input type="hidden" name="id" value="{{ Auth::user()->id }}"> --}}
                    <div class="row text-center btn-change-avatar">
                        <a class="btn btn-secondary btn-sm position-relative">
                                            ფოტო                                   
                            <input type="file" name="image" class="uploadFile" accept=".png, .jpg, .jpeg"{{--  onchange="$(&#39;#upload-file-info&#39;).html($(this).val());" --}}>
                        </a>
                    <input type="text" class="form-control" name="title" placeholder="input title">
                    <textarea name="text" class="form-control" placeholder="text"></textarea>
                        <div class="form-group has-feedback">
                            <button type="submit" class="btn btn-secondary btn-action pull-right" {{-- onclick="document.getElementById('add_post').submit();" --}}>
                                            შენახვა                            
                            </button> 
                        </div>     
                    </div>     
                </form>
            </div>
</table>

<a href="https://seclab.ge/profile-update#" class="scrollup"><i class="fa fa-angle-up"></i></a>
<!-- Bootstrap js -->
{{-- <script src="./Update Profile - CYBER MEDIA • SECLAB_files/bootstrap.min.js.download"></script>
<!-- Owl-carousel js -->
<script src="./Update Profile - CYBER MEDIA • SECLAB_files/owl.carousel.min.js.download"></script>
<!-- Lazy js -->
<script src="./Update Profile - CYBER MEDIA • SECLAB_files/lazysizes.min.js.download"></script>
<!-- iCheck js -->
<script src="./Update Profile - CYBER MEDIA • SECLAB_files/icheck.min.js.download"></script>
<!-- Jquery Confirm js -->
<script src="./Update Profile - CYBER MEDIA • SECLAB_files/jquery-confirm.min.js.download"></script>
<!-- Gallery js -->
<script src="./Update Profile - CYBER MEDIA • SECLAB_files/imagesloaded.min.js.download"></script>
<script src="./Update Profile - CYBER MEDIA • SECLAB_files/masonry-3.1.4.min.js.download"></script>
<script src="./Update Profile - CYBER MEDIA • SECLAB_files/masonry.filter.js.download"></script>
<script src="./Update Profile - CYBER MEDIA • SECLAB_files/jquery.magnific-popup.min.js.download"></script>
<!-- Cookie js -->
<script src="./Update Profile - CYBER MEDIA • SECLAB_files/jquery.cookie.js.download"></script>
<!-- Theme js -->
<script src="./Update Profile - CYBER MEDIA • SECLAB_files/script.min.js.download"></script> --}}
@endsection
