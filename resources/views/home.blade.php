@extends('layouts.app')

@section('content')
  <!-- Carousel
================================================== -->

<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" style ="background:url(/uploads/images/December2015/bg.png); background-size:cover; background-position:center center;">
<!-- Indicators -->


<ol class="carousel-indicators">
  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  <li data-target="#myCarousel" data-slide-to="1"></li>
  <li data-target="#myCarousel" data-slide-to="2"></li>
</ol>
<div class="carousel-inner" role="listbox">
  <div class="item active"
  style="background: linear-gradient(rgba(0, 0, 0, 0.9),  rgba(0, 0, 0, 0.3)), url('https://unsplash.it/1600/1400?image=902') center center no-repeat; background-size:cover">

    <div class="container">
      <div class="carousel-caption">
        <a href="#" class="play-btn"><img src="/images/play-light.svg" width="100px"></a>
        <h1>Example headline.</h1>
        <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
        <p><a class="btn btn-xs btn-success" href="#" role="button">Sign up today</a></p>
      </div>

    </div>
  </div>
  <div class="item" style="background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.2) ), url('/images/bg5.jpg') center center no-repeat; background-size:cover">
    <div class="container">
      <div class="carousel-caption">
        <a href="#" class="play-btn"><img src="/images/play-light.svg" width="100px"></a>
        <h1>Another example headline.</h1>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p><a class="btn btn-xs btn-success" href="#" role="button">Learn more</a></p>
      </div>

    </div>
  </div>
  <div class="item" style="background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.2)), url('/images/bg10.png') center center no-repeat; background-size:cover">
    <img src="/images/3.jpeg" width="100px">
    <div class="container">
      <div class="carousel-caption">
        <a href="#" class="play-btn"><img src="/images/play-light.svg" width="100px"></a>
        <h1>One more for good measure.</h1>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p><a class="btn btn-xs btn-success" href="#" role="button">Browse gallery</a></p>

      </div>

    </div>
  </div>
</div>
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
  <span style="font-size: 48px"><i class="icon ion-ios-arrow-left" data-pack="ios" data-tags="chevron" ></i></span>
  <span class="sr-only">Previous</span>
</a>

<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span style="font-size: 48px;"><i class="icon ion-ios-arrow-right" data-pack="ios" data-tags="chevron" ></i></span>
  <span class="sr-only">Next</span>
</a>

</div><!-- /.carousel -->
<div class="main-content">
<div class="container">

    <div class="jcarousel-wrapper">
        <h2 class="heading-title">les series récentes <i class="ion-ios-arrow-right"></i></h2>
        <div class="jcarousel">

            <ul class="video-box">
                <li>
                  <div class="video-container">
                    <div class="video-thumb">
                      <img src="/images/bg9.jpg" alt="Image 1">
                      <div class="video-info">
                       <span><i class="ion-ios-clock"></i> 7:32</span>
                       <span><i class="ion-android-favorite"></i> 125</span>
                       <span><i class="ion-ios-eye"></i> 78</span>
                      </div>
                      <a href="#" class="plays"> <img src="/images/play-light.svg" width="40px" height="40px" alt="Image 4"></a>
                   </div>
                   <div class="video-description">
                     <h3>apostasie 1/4</h3>
                     <p>elit. Suspendisse sit amet fringilla orci. Aenean molestie dolor, fringilla orci. Aenean molestie dolor </p>
                   </div>
                 </div>

                </li>
                <li>
                  <div class="video-container">
                    <div class="video-thumb">
                      <img src="/images/bg2.jpg" alt="Image 2">
                      <div class="video-info">
                       <span><i class="ion-ios-clock"></i> 7:32</span>
                       <span><i class="ion-android-favorite"></i> 125</span>
                       <span><i class="ion-ios-eye"></i> 78</span>
                      </div>
                       <a href="#" class="plays"> <img src="/images/play-light.svg" width="40px" height="40px" alt="Image 4"></a>
                   </div>
                   <div class="video-description">
                     <h3>apostasie 1/4</h3>
                     <p>elit. Suspendisse sit amet fringilla orci. Aenean molestie dolor, fringilla orci. Aenean molestie dolor </p>
                   </div>
                 </div>

                 </li>
                <li>
                  <div class="video-container">
                    <div class="video-thumb">
                      <img src="/images/bg3.jpg" alt="Image 3">
                      <div class="video-info">
                       <span><i class="ion-ios-clock"></i> 7:32</span>
                       <span><i class="ion-android-favorite"></i> 125</span>
                       <span><i class="ion-ios-eye"></i> 78</span>
                      </div>
                       <a href="#" class="plays"> <img src="/images/play-light.svg" width="40px" height="40px" alt="Image 4"></a>
                    </div>
                    <div class="video-description">
                      <h3>apostasie 1/4</h3>
                      <p>elit. Suspendisse sit amet fringilla orci. Aenean molestie dolor, fringilla orci. Aenean molestie dolor </p>
                    </div>
                   </div>

                 </li>
                <li>
                  <div class="video-container">
                    <div class="video-thumb">
                      <img src="/images/bg6.jpg" alt="Image 4">
                       <div class="video-info">
                        <span><i class="ion-ios-clock"></i> 7:32</span>
                        <span><i class="ion-android-favorite"></i> 125</span>
                        <span><i class="ion-ios-eye"></i> 78</span>
                       </div>
                       <a href="#" class="plays"> <img src="/images/play-light.svg" width="40px" height="40px" alt="Image 4"></a>
                   </div>
                   <div class="video-description">
                     <h3>apostasie 1/4</h3>
                     <p>elit. Suspendisse sit amet fringilla orci. Aenean molestie dolor, fringilla orci. Aenean molestie dolor </p>
                   </div>
                 </div>

                 </li>

            </ul>
        </div>

        <a href="#" class="jcarousel-control-prev"><i class="icon ion-ios-arrow-left" data-pack="ios" data-tags="chevron" ></i></a>
        <a href="#" class="jcarousel-control-next"><i class="icon ion-ios-arrow-right" data-pack="ios" data-tags="chevron" ></i></a>

        <p class="jcarousel-pagination"></p>
    </div>
</div>

<div class="container">

    <div class="jcarousel-wrapper">
        <h2 class="heading-title">enseignement récents <i class="ion-ios-arrow-right"></i></h2>
        <div class="jcarousel">

            <ul class="video-box">
                <li>
                  <div class="video-container">
                    <div class="video-thumb">
                      <img src="/images/bg9.jpg" alt="Image 1">
                      <div class="video-info">
                       <span><i class="ion-ios-clock"></i> 7:32</span>
                       <span><i class="ion-android-favorite"></i> 125</span>
                       <span><i class="ion-ios-eye"></i> 78</span>
                      </div>
                      <a href="#" class="plays"> <img src="/images/play-light.svg" width="40px" height="40px" alt="Image 4"></a>
                   </div>
                   <div class="video-description">
                     <h3>apostasie 1/4</h3>
                     <p>elit. Suspendisse sit amet fringilla orci. Aenean molestie dolor, fringilla orci. Aenean molestie dolor </p>
                   </div>
                 </div>

                </li>
                <li>
                  <div class="video-container">
                    <div class="video-thumb">
                      <img src="/images/bg2.jpg" alt="Image 2">
                      <div class="video-info">
                       <span><i class="ion-ios-clock"></i> 7:32</span>
                       <span><i class="ion-android-favorite"></i> 125</span>
                       <span><i class="ion-ios-eye"></i> 78</span>
                      </div>
                       <a href="#" class="plays"> <img src="/images/play-light.svg" width="40px" height="40px" alt="Image 4"></a>
                   </div>
                   <div class="video-description">
                     <h3>apostasie 1/4</h3>
                     <p>elit. Suspendisse sit amet fringilla orci. Aenean molestie dolor, fringilla orci. Aenean molestie dolor </p>
                   </div>
                 </div>

                 </li>
                <li>
                  <div class="video-container">
                    <div class="video-thumb">
                      <img src="/images/bg3.jpg" alt="Image 3">
                      <div class="video-info">
                       <span><i class="ion-ios-clock"></i> 7:32</span>
                       <span><i class="ion-android-favorite"></i> 125</span>
                       <span><i class="ion-ios-eye"></i> 78</span>
                      </div>
                       <a href="#" class="plays"> <img src="/images/play-light.svg" width="40px" height="40px" alt="Image 4"></a>
                    </div>
                    <div class="video-description">
                      <h3>apostasie 1/4</h3>
                      <p>elit. Suspendisse sit amet fringilla orci. Aenean molestie dolor, fringilla orci. Aenean molestie dolor </p>
                    </div>
                   </div>

                 </li>
                <li>
                  <div class="video-container">
                    <div class="video-thumb">
                      <img src="/images/bg6.jpg" alt="Image 4">
                       <div class="video-info">
                        <span><i class="ion-ios-clock"></i> 7:32</span>
                        <span><i class="ion-android-favorite"></i> 125</span>
                        <span><i class="ion-ios-eye"></i> 78</span>
                       </div>
                       <a href="#" class="plays"> <img src="/images/play-light.svg" width="40px" height="40px" alt="Image 4"></a>
                   </div>
                   <div class="video-description">
                     <h3>apostasie 1/4</h3>
                     <p>elit. Suspendisse sit amet fringilla orci. Aenean molestie dolor, fringilla orci. Aenean molestie dolor </p>
                   </div>
                 </div>

                 </li>

            </ul>
        </div>

        <a href="#" class="jcarousel-control-prev"><i class="icon ion-ios-arrow-left" data-pack="ios" data-tags="chevron" ></i></a>
        <a href="#" class="jcarousel-control-next"><i class="icon ion-ios-arrow-right" data-pack="ios" data-tags="chevron" ></i></a>

        <p class="jcarousel-pagination"></p>
    </div>
</div>
</div>
@endsection
