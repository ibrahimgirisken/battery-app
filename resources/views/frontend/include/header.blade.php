 <!-- ======= Header ======= -->
 <header id="header" class="header d-flex align-items-center">
   <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

     <a href="/" class="logo d-flex align-items-center">
       <!-- Uncomment the line below if you also wish to use an image logo -->
       <!-- <img src="/frontend/assets/img/logo.png" alt=""> -->
       <h1>UpConstruction<span>.</span></h1>
     </a>

     <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
     <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
     <nav id="navbar" class="navbar">
       <ul>
         <li><a href="/" class="{{request()->is('/') ?  'active':''}}">@lang('main-page.home')</a></li>
         <li><a href="{{route('about')}}" class="{{request()->is('about') ?  'active':''}}">@lang('main-page.about')</a></li>
         <li><a href="{{route('services')}}" class="{{request()->is('services') ?  'active':''}}">@lang('main-page.services')</a></li>
         <li><a href="{{route('projects')}}" class="{{request()->is('projects') ?  'active':''}}">@lang('main-page.projects')</a></li>
         <li><a href="{{route('blog')}}" class="{{request()->is('blog') ?  'active':''}}">@lang('main-page.blog')</a></li>
         <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
           <ul>
             <li><a href="#">Dropdown 1</a></li>
             <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
               <ul>
                 <li><a href="#">Deep Dropdown 1</a></li>
                 <li><a href="#">Deep Dropdown 2</a></li>
                 <li><a href="#">Deep Dropdown 3</a></li>
                 <li><a href="#">Deep Dropdown 4</a></li>
                 <li><a href="#">Deep Dropdown 5</a></li>
               </ul>
             </li>
             <li><a href="#">Dropdown 2</a></li>
             <li><a href="#">Dropdown 3</a></li>
             <li><a href="#">Dropdown 4</a></li>
           </ul>
         </li>
         <li><a href="{{route('contact')}}" class="{{request()->is('contact') ?  'active':''}}">@lang('main-page.contact')</a></li>
         <li>
           <div class="dropdown">
             <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
               {{ __('Dil Seç') }}
             </button>
             <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <li><a class="dropdown-item {{ App::getLocale() == 'tr' ? 'active' : '' }}" href="{{ route(Route::currentRouteName(), ['locale' => 'tr']) }}">Türkçe</a></li>
               <li><a class="dropdown-item {{ App::getLocale() == 'en' ? 'active' : '' }}" href="{{ route(Route::currentRouteName(), ['locale' => 'en']) }}">English</a></li>
               <li><a class="dropdown-item {{ App::getLocale() == 'de' ? 'active' : '' }}" href="{{ route(Route::currentRouteName(), ['locale' => 'de']) }}">Deutsch</a></li>
             </ul>
           </div>
         </li>
       </ul>
     </nav><!-- .navbar -->

   </div>
 </header><!-- End Header -->