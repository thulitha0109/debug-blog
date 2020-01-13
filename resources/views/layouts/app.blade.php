<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Debug Admin</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet"> 

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="/css/toastr.min.css"/>

		<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css"/>


		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="/css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="/css/style.css"/>

		
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		


</head>
<body>
<	<!-- Header -->
		<header id="header">
			<!-- Nav -->
			<div id="nav">
				<!-- Main Nav -->
				<div id="nav-fixed">
					<div class="container">
						<!-- logo -->
						<div class="nav-logo">
							<a href="/" class="logo"><img src="/./img/logo.png" alt=""></a>
                            
						</div>
						<!-- /logo -->

						<!-- nav -->
                        <ul class="nav-menu nav navbar-nav">
							
                        @guest
							<li class="cat-3"><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            @if (Route::has('register'))
							<li class="cat-3"><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                            @endif
                        @else
                        <li class="cat-3">
                                <a id="navbarDropdown" href="#">
                                    {{ Auth::user()->name }}
                                </a>

                                <li class="cat-3"><a href="{{ route('logout') }}"
                                    
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                            </li>
                        
                            @endguest
                            <li class="cat-3"><a href="/">Home</a></li>
							<li class="cat-3"><a href="{{route('about')}}">About Us</a></li>
							
							<li class="cat-3"><a href="#">Our Services</a></li>
							<li class="cat-3"><a href="{{route('contact')}}">Contact Us</a></li>

							
						</ul>
		
					</div>
				</div>	
				
				</div>
				<!-- Aside Nav -->
			</div>
			<!-- /Nav -->
		</header>
		<!-- /Header -->

        <div class ="container">
            <div class="row">
                @if(Auth::check())
                <div class="col-lg-4">
                    <ul class="list-group">
                        <li class="list-group-item">
                        <a href="{{route('home')}}">Home</a>
                        </li>
                        <li class="list-group-item">
                        <a href="{{route('categories')}}">Categories</a>
                        </li>
                        <li class="list-group-item">
                        <a href="{{route('tags')}}">Tags</a>
                        </li>
                        <li class="list-group-item">
                        <a href="{{route('tag.create')}}">Create Tags</a>
                        </li>
                    @if(Auth::user()->admin)
                        <li class="list-group-item">
                        <a href="{{route('users')}}">Users</a>
                        </li>
                        <li class="list-group-item">
                        <a href="{{route('user.create')}}">New User</a>
                        </li>
                    @endif
                        <li class="list-group-item">
                        <a href="{{route('user.profile')}}">My Profile</a>
                        </li>
                        <li class="list-group-item">
                        <a href="{{route('posts')}}">All Posts</a>
                        </li>
                        <li class="list-group-item">
                        <a href="{{route('posts.trashed')}}">All Trashed Posts</a>
                        </li>
                        <li class="list-group-item">
                        <a href="{{route('category.create')}}">Create New Category</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('post.create')}}">Create New Post</a>
                        </li>
                        @if(Auth::user()->admin)
                        <li class="list-group-item">
                            <a href="{{route('settings')}}">Site Settings</a>
                        </li>
                        @endif
                    </ul>
                </div>
                @endif
                <div class="col-lg-8">
                        @yield('content')
                </div>    
            </div>
        </div>

    </div>
    <script src="/js/app.js"></script>
    <script src="{{asset('/js/toastr.min.js')}}"></script>
    <script>
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
        @if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}")
        @endif
    </script>
@yield('scripts')

<footer id="footer">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-5">
						<div class="footer-widget">
							<div class="footer-logo">
								<a href="/" class="logo"><img src="/./img/logo.png" width="250px" height="50px" alt=""></a>
							</div>
							<ul class="footer-nav">
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Advertisement</a></li>
							</ul>
							<div class="footer-copyright">
                        

							<span>&copy; Copyright &copy;<script>document.write(new Date().getFullYear());</script> De Bug | All rights reserved.</span>
                                
							</div>
						</div>
					</div>
					

					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">About Us</h3>
									<ul class="footer-links">
										<li><a href="about.html">About Us</a></li>
										<li><a href="#">Join Us</a></li>
										<li><a href="contact.html">Contacts</a></li>
                                        <li><a href="contact.html">Faq</a></li>
									</ul>
								</div>
							</div>
                            
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">Catagories</h3>
									
								<ul>
									<li><a href="{{'http://laravelcms.test/category/2'}}" class="cat-3">Web Platforms</a></li>
                                    <li><a href="{{'http://laravelcms.test/category/3'}}" class="cat-3">Web Framworks</a></li>
                                    <li><a href="{{'http://laravelcms.test/category/4'}}" class="cat-3">Web Languages</a></li>
                                    <li><a href="{{'http://laravelcms.test/category/5'}}" class="cat-3">Laravel</a></li>
                                    <li><a href="{{'http://laravelcms.test/category/6'}}" class="cat-3">Magento</a></li>
								</ul>
							
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="footer-widget">
							<h3 class="footer-title">Join our Newsletter</h3>
							<div class="footer-newsletter">
								<form>
									<input class="input" type="email" name="newsletter" placeholder="Enter your email">
									<button class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
								</form>
							</div>
							<ul class="footer-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
</body>
</html>
