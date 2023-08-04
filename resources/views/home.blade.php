@extends('layouts.app')
@section('main') 

<?php
if (isset($_GET['page'])) {
   $pageCount=$_GET['page'];
}
else {
    $pageCount=1;
}
?>
<div class="container">
    <div class="justify-content-center">
        <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-12 mt-4">
            <div class="card p-4 mb-5">
                <h2>Name: <b>{{$product[$pageCount-1]->name}}</b></h2>
                <div class="card-flex">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="des-para">
                                 <h3>Description:</h3>
                                 <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example scroller"  tabindex="0">
                                 <p>{{$product[$pageCount-1]->description}}</p> 
                                 </div>
                            </div>
                            
                        </div>
                        <div class="col-xl-6">
                        <div class="image-box">
                                <img src="{{ asset('/public/products/' . $product[$pageCount-1]->image) }}" class="rounded" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if($pageCount > 1)
            <a href="{{ URL('home') }}?page={{ isset($pageCount) ? $pageCount-1  : '' }}">
                <button class="float-left btn btn-success"  > Previous </button>
            </a>
            @else
            @endif
            @if($pageCount < count($product) )
                <a href="{{ URL('home') }}?page={{ isset($pageCount) ? $pageCount+1  : '' }}">
                    <button class="float-end btn  btn-warning "   > Next </button>
                </a>
            @else
            @endif
            
            
        </div>

        </div>
    </div>
</div>




<div class="abtus-inner">
                <div class="container">
                    <div class="row aboutUs-row">
                        <div class="col-xxl-6 col-xl-6 col-lg-7 col-md-7">
                            <div class="abtSec-content">
                                <div class="abtSec-boxmb">
                                    <!-- <h2 class="heading-f56-mediam">About
                                        <span class="yellow-h">Us</span>
                                    </h2> -->
                                    <!-- <h4 class="productTitle">{{ $product[0]->name }}</h4> -->
                                    <p class="common-para p18-regular"></p>
                                </div>
                            </div>
                        </div>

                        <script></script>
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="abt-section-video">
                                <div class="abt-vid-mb abtus-imgWd">

                                    <!-- <video class="earth-vid-mob" src="assets/images/homepage/earth-banner-mob.mp4" loop muted autoplay>
                                    </video> -->

                                    <!-- <img src="assets/images/homepage/hp-about-us.png" width="100%" alt="" /> -->

                                    <!-- <video class="earth-vid" src="assets/images/homepage/earth-banner-mob.mp4" loop muted autoplay>
                                    </video> -->

                                    <!-- <div class="abt_vid_mb">
                                            <video
                                                id="my-video"
                                                class="video-js"
                                                controls
                                                preload="auto"
                                                width="887"
                                                poster=""
                                                data-setup="{}"
                                            >
                                                <source src="assets/images/idmanagement/loader_loop.mp4" type="video/mp4" />
                                                <source src="assets/images/idmanagement/loader_loop.mp4" type="video/webm" />
                                                <p class="vjs-no-js">
                                                To view this video please enable JavaScript, and consider upgrading to a
                                                web browser that
                                                
                                                </p>
                                            </video>
                                        </div> -->
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            @endsection