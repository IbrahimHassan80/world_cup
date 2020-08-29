<div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-logo">
          
          <a href="#"><img src="images/logo.png" alt="Image"></a>
        </div>
        
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar absolute transparent" role="banner">
      <div class="py-3">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-6 col-md-3">
              <!-- ICONS -->
              <a href="#" class="text-secondary px-2 pl-0"><span class="icon-facebook"></span></a>
              
              <a href="#" class="text-secondary px-2"><span class="icon-instagram"></span></a>
              
              <a href="#" class="text-secondary px-2"><span class="icon-twitter"></span></a>
              
              <a href="#" class="text-secondary px-2"><span class="icon-linkedin"></span></a>
            <!--  -->
            </div>
            
            <div class="col-6 col-md-9 text-right">
              <div class="d-inline-block"><a href="#" class="text-secondary p-2 d-flex align-items-center"><span class="icon-envelope mr-3"></span> <span class="d-none d-md-block">youremail@domain.com</span></a></div>
             
              <div class="d-inline-block"><a href="#" class="text-secondary p-2 d-flex align-items-center"><span class="icon-phone mr-0 mr-md-3"></span> <span class="d-none d-md-block">01278552735</span></a></div>
            </div>
          
          </div>
        </div>
      </div>
      
      <nav class="site-navigation position-relative text-right bg-black text-md-right" role="navigation">
        <div class="container position-relative">
          
          <div class="site-logo">
            <a href="index.html"><img src="images/logo.png" alt=""></a>
          </div>

          <div class="d-inline-block d-md-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          <ul class="site-menu js-clone-nav d-none d-md-block">
             @if (Auth::check()) 
              <li><a href="{{url('home')}}">Home</a></li>
              <li><a href="{{url('matches')}}">{{__('messages.matches')}}</a></li>
              <li><a href="{{url('cup')}}">{{__('messages.Country')}}</a></li>
              <li><a href="{{url('groups')}}">{{__('messages.Groups')}}</a></li>
            <!-- --------------------------- -->
            <li class="nav-item dropdown">
             
             <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
             </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              
              <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
               </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                </form>
                 </div>
                  </li>
               @endif
                            <!-- -------------------------------- -->
          </ul>
        </div>
      </nav>
    </header>

<div class="slide-one-item home-slider owl-carousel">
      <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        
        <div class="container">
          <div class="row align-items-center justify-content-start">
            <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
              <h1 class="bg-text-line">Russia's World Cup Championship</h1>
              <p><a href="#" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_4.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-start">
            <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
              <h1 class="bg-text-line">Russia's World Cup Championship</h1>
              <p><a href="#" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-start">
            <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
              <h1 class="bg-text-line">Russia's World Cup Championship</h1>
              <p><a href="#" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p>
            </div>
          </div>
        </div>
      </div>  
    
      <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-start">
            <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
              <h1 class="bg-text-line">Russia's World Cup Championship</h1>
              <p><a href="#" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p>
            </div>
          </div>
        </div>
      </div>  
    </div>

