@include('includes.header')

<div class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<ul class="page-header-breadcrumb">
								<li><a href="/">Home</a></li>
								<li>About Us</li>
							</ul>
							<h1>About Us</h1>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
		</header>
		<!-- /Header -->
		
		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="section-row">
						<h1>All we care about quality content.</h1>
							<p>We care about quality content. We never wanted to be a big publishing company: Our team is small, but it’s a truly wonderful team of people who really care about what they do. Passionate and dedicated. Honest and respectful. Professional but informal. Quirky and personal.

Through our articles, we are committed to nourishing productivity, improving design and development skills and finessing the work-life balance. Getting better, together, by learning from each other — that’s the spirit that has been our mantra for all these years.</p>
							<figure class="figure-img">
								<img class="img-responsive" src="./img/about-1.jpg" alt="">
							</figure>
							<p>All articles are carefully curated, edited and prepared according to the high standards set in the Debug’s Publishing Policy. These guidelines are continually revised and updated to ensure that the quality of the published content is never compromised. Debug Blog is always expanding to provide more quality content for professionals working in web design.</p>
						</div>
						<div class="row section-row">
							<div class="col-md-6">
								<figure class="figure-img">
									<img class="img-responsive" src="./img/about-2.png" alt="">
								</figure>
							</div>
							<div class="col-md-6">
								<h3>Our Mission & Vision</h3>
								<p>To be the most reliable, useful, but most importantly practical articals to open source web developers and designers.</p>
								<ul class="list-style">
									<li><p>understands all web requirements and dilivering full "end to end" solutions.</p></li>
									<li><p>help people who want to grow and become entrepreneurs.</p></li>
									<li><p>provide more quality content for professionals and beginners working in web development.</p></li>
								</ul>
							</div>
						</div>
					</div>
					
					<!-- aside -->
					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->

						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Most Read</h2>
							</div>
							@foreach($post as $post)
							<div class="post post-widget">
								<a class="post-img" href="{{route('post.single',['slug' =>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="{{route('post.single',['slug' =>$post->slug])}}">{{$post->title}}</a></h3>
								</div>
							</div>
							@endforeach
						
						</div>
						<!-- /post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Catagories</h2>
							</div>
							<div class="category-widget">
							@foreach($categories as $category)
								<ul>
									<li><a href="{{route('category.single',['id'=> $category->id])}}" class="cat-3">{{$category->name }}</a></li>
								</ul>
							@endforeach
							</div>
						</div>
					</div>
					<!-- /aside -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->
		@include('includes.footer')
		<!-- jQuery Plugins -->
		<script src="/js/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/main.js"></script>
