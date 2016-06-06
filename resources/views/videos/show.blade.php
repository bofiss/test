@extends('layouts.video')

@section('content')

      <div class="main-content">
                <!-- Video
            ================================================== -->
           <div class="container">
             <div id="player">Loading the player...</div>
              <script type="text/javascript">
              var playerInstance = jwplayer("player");
              playerInstance.setup({
              file: "//www.youtube.com/watch?v=n7-3-vlO8xY",
              image: "/images/1400.jpeg",
              aspectratio: "16:9",
              width: "100%",
              height: "70%",
              stretching: "fill"
              });
              </script>

            {{-- <div class="js-media-player">
                <div data-plyr='{ title: "testing" , poster: "/images/bg1.jpg"}' data-video-id="Fgz2wRXbwE4" data-type="youtube"></div>
            </div> --}}
          </div>
      </div>
  <div class="container">
    <div class="myfavoryte ">
      <div class="container">
        <div class="block_title">
         <h5>Message pour la France, et le Cameroun</h5>
        </div>
        <div class="block_favorite">
           <div class="user-actions" data-reactid=".17irlz3rklc.1.$/=10.0.2.0.1.1">
             <div class="like" data-reactid=".17irlz3rklc.1.$/=10.0.2.0.1.1.0">
               <div class="like-button" data-reactid=".17irlz3rklc.1.$/=10.0.2.0.1.1.0.0">
                 <div class="heart-container" data-reactid=".17irlz3rklc.1.$/=10.0.2.0.1.1.0.0.0">
                   <i class="ion-ios-heart"></i>
                 </div>
                 <div class="like-label" data-reactid=".17irlz3rklc.1.$/=10.0.2.0.1.1.0.0.1">J'aime </div>
                 <span data-reactid=".17irlz3rklc.1.$/=10.0.2.0.1.1.0.0.2"></span>
               </div>
               <div class="modal-container" data-reactid=".17irlz3rklc.1.$/=10.0.2.0.1.1.0.1"></div>
             </div>

             <div class="add anonymous" data-reactid=".17irlz3rklc.1.$/=10.0.2.0.1.1.1">
               <div class="add-button" data-reactid=".17irlz3rklc.1.$/=10.0.2.0.1.1.1.0">
                 <div class="add-icon" data-reactid=".17irlz3rklc.1.$/=10.0.2.0.1.1.1.0.0">
                   <i class="ion-ios-eye"></i></div>
                   <span data-reactid=".17irlz3rklc.1.$/=10.0.2.0.1.1.1.0.1">123</span>
                 </div>
                 <div class="modal-container" data-reactid=".17irlz3rklc.1.$/=10.0.2.0.1.1.1.1"></div>
               </div>
               <div class="share" data-reactid=".17irlz3rklc.1.$/=10.0.2.0.1.1.2">
                 <div class="share-button" data-reactid=".17irlz3rklc.1.$/=10.0.2.0.1.1.2.0">
                   <div class="share-icon" data-reactid=".17irlz3rklc.1.$/=10.0.2.0.1.1.2.0.0">
                   <i class="ion-android-share-alt"></i></div>
                   <span data-reactid=".17irlz3rklc.1.$/=10.0.2.0.1.1.2.0.1">Partager </span>
                 </div>
           <div class="modal-container" data-reactid=".17irlz3rklc.1.$/=10.0.2.0.1.1.2.1"></div></div></div>
        </div>
      </div>
    </div>
      <section>

        <div class="tabs tabs-style-line">
          <nav>
            <ul>
              <li><a href="#section-line-1"><span>Our Controls</span></a></li>
              <li><a href="#section-line-2"><span>Sony Playstation 4</span></a></li>
              <li><a href="#section-line-3"><span>Microsoft Xbox One</span></a></li>
              <li><a href="#section-line-4"><span>Nintendo Wii U</span></a></li>

            </ul>
          </nav>
          <div class="content-wrap">

            <section id="section-line-1"><div class="jcarousel-wrapper">

                <!-- Carousel -->
                <div class="jcarousel" data-jcarousel="true">
                    <ul style="left: -600px; top: 0px;">
                        <li><img src="../images/bg1.jpg" width="600" height="400" alt=""></li>
                        <li><img src="../images/bg1.jpg" width="200" height="100" alt=""></li>
                        <li><img src="../images/bg2.jpg" width="200" height="100" alt=""></li>
                        <li><img src="../images/bg3.jpg" width="200" height="100" alt=""></li>
                        <li><img src="../images/bg4.jpg" width="200" height="100" alt=""></li>
                        <li><img src="../images/bg5.jpg" width="200" height="100" alt=""></li>
                    </ul>
                </div>
                <!-- Prev/next controls -->
                <a href="#" class="jcarousel-control-prev" ><i class="ion-ios-arrow-left" data-pack="ios" data-tags="chevron" ></i></a>
                <a href="#" class="jcarousel-control-next" ><i class="ion-ios-arrow-right" data-pack="ios" data-tags="chevron" ></i></a>


            </div></section>
            <section id="section-line-2"><p>2</p></section>
            <section id="section-line-3"><p>3</p></section>
            <section id="section-line-4"><p>4</p></section>

          </div><!-- /content -->

        </div><!-- /tabs -->

      </section>

  </div>
@endsection
