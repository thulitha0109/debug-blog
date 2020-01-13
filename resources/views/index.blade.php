@include('includes.header')


		<!-- section -->
		
		<div class="section">
			<!-- container -->
			<div class="container">
			<div class="section-title">
							<h2>Latest Posts</h2>
							</div>
				<!-- row -->
				<div class="row">	
					<!-- post -->
					<div class="col-md-6">
						<div class="post post-thumb">
							<a class="post-img" href="{{route('post.single',['slug' =>$first_post->slug])}}"><img src="{{$first_post->featured}}" alt="{{$first_post->title}}"></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-1" href="{{route('category.single',['id'=> $first_post->category->id])}}">{{$first_post->category->name}}</a>
									<span class="post-date">{{$first_post->created_at->toFormattedDateString()}}</span>
								</div>
								<h3 class="post-title"><a href="{{route('post.single',['slug' =>$first_post->slug])}}">{{$first_post->title}}</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="col-md-6">
						<div class="post post-thumb">
							<a class="post-img" href="{{route('post.single',['slug' =>$second_post->slug])}}"><img src="{{$second_post->featured}}" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="{{route('category.single',['id'=> $second_post->category->id])}}">{{$second_post->category->name}}</a>
									<span class="post-date">{{$second_post->created_at->toFormattedDateString()}}</span>
								</div>
								<h3 class="post-title"><a href="{{route('post.single',['slug' =>$second_post->slug])}}">{{$second_post->title}}</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>{{$wix->name}}</h2>
						</div>
					</div>

					<!-- post -->
				

				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<!-- post -->
						@foreach($wix->posts()->orderby('created_at', 'desc')->take(1)->get() as $post)
							<div class="col-md-12">
								<div class="post post-thumb">
									<a class="post-img" href="{{route('post.single',['slug' =>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-3" href="{{route('category.single',['id'=> $post->category->id])}}">{{$post->category->name}}</a>
											<span class="post-date">{{$post->created_at->toFormattedDateString()}}</span>
										</div>
										<h3 class="post-title"><a href="{{route('post.single',['slug' =>$post->slug])}}">{{$post->title}}</a></h3>
									</div>
								</div>
							</div>
						@endforeach
							<!-- /post -->
							<div class="section-title">
							<h2>{{$frameworks->name}}</h2>
							</div>
							<!-- post -->
							@foreach($frameworks->posts()->orderby('created_at', 'desc')->take(2)->get() as $post)
							<div class="col-md-6">
								<div class="post">
									<a class="post-img" href="{{route('post.single',['slug' =>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-4" href="{{route('category.single',['id'=> $post->category->id])}}">{{$post->category->name}}</a>
											<span class="post-date">{{$post->created_at->toFormattedDateString()}}</span>
										</div>
										<h3 class="post-title"><a href="{{route('post.single',['slug' =>$post->slug])}}">{{$post->title}}</a></h3>
									</div>
								</div>
							</div>
							@endforeach
							<!-- /post -->

							<!-- post -->


							<div class="clearfix visible-md visible-lg"></div>

			

							<div class="clearfix visible-md visible-lg"></div>
							

							<!-- post -->
						
						</div>
					</div>

					<div class="col-md-4">
						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Most Read</h2>
							</div>
							@foreach($post->orderby('created_at', 'desc')->take(4)->get() as $post)
							<div class="post post-widget">
								<a class="post-img" href="{{route('post.single',['slug' =>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
								<div class="post-body">
								<div class="post-meta">
										<a class="post-category cat-3" href="{{route('category.single',['id'=> $post->category->id])}}">{{$post->category->name}}</a>
										
									</div>
									<h3 class="post-title"><a href="{{route('post.single',['slug' =>$post->slug])}}">{{$post->title}}</a></h3>
								</div>
							</div>
							@endforeach
						
						<!-- /post widget -->

						<!-- post widget -->
						@foreach($post->orderby('created_at', 'asc')->take(1)->get() as $post)
						<div class="aside-widget">
							<div class="section-title">
								<h2>Featured Posts</h2>
							</div>
							<div class="post post-thumb">
								<a class="post-img" href="{{route('post.single',['slug' =>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
								<div class="post-body">
									<div class="post-meta">
										<a class="post-category cat-3" href="{{route('category.single',['id'=> $post->category->id])}}">{{$post->category->name}}</a>
										<span class="post-date">{{$post->created_at->toFormattedDateString()}}</span>
									</div>
									<h3 class="post-title"><a href="{{route('post.single',['slug' =>$post->slug])}}">{{$post->title}}</a></h3>
								</div>
							</div>
							@endforeach
						<!-- /post widget -->
						
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->
		<div class="section section-grey">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h2>{{$languages->name}}</h2>
						</div>
					</div>

					<!-- post -->
					@foreach($languages->posts()->orderby('created_at', 'desc')->take(3)->get() as $post)
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="{{route('post.single',['slug' =>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-4" href="{{route('category.single',['id'=> $post->category->id])}}">{{$post->category->name}}</a>
									<span class="post-date">{{$post->created_at->toFormattedDateString()}}</span>
								</div>
								<h3 class="post-title"><a href="{{route('post.single',['slug' =>$post->slug])}}">{{$post->title}}</a></h3>
							</div>
						</div>
					</div>
					@endforeach
		<!-- section -->
		<div class="section section-grey">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h2>{{$laravel->name}}</h2>
						</div>
					</div>

					<!-- post -->
					@foreach($laravel->posts()->orderby('created_at', 'desc')->take(3)->get() as $post)
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="{{route('post.single',['slug' =>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-4" href="{{route('category.single',['id'=> $post->category->id])}}">{{$post->category->name}}</a>
									<span class="post-date">{{$post->created_at->toFormattedDateString()}}</span>
								</div>
								<h3 class="post-title"><a href="{{route('post.single',['slug' =>$post->slug])}}">{{$post->title}}</a></h3>
							</div>
						</div>
					</div>
					@endforeach
					<!-- /post -->

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

				<!-- section -->
				<div class="section section-grey">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h2>{{$magento->name}}</h2>
						</div>
					</div>

					<!-- post -->
					@foreach($magento->posts()->orderby('created_at', 'desc')->take(3)->get() as $post)
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="{{route('post.single',['slug' =>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-4" href="{{route('category.single',['id'=> $post->category->id])}}">{{$post->category->name}}</a>
									<span class="post-date">{{$post->created_at->toFormattedDateString()}}</span>
								</div>
								<h3 class="post-title"><a href="{{route('post.single',['slug' =>$post->slug])}}">{{$post->title}}</a></h3>
							</div>
						</div>
					</div>
					@endforeach
					<!-- /post -->

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
								<div class="section-title">
									<h2>Most Read</h2>
								</div>
							</div>
							<!-- post -->
							@foreach($post->orderby('created_at', 'asc')->take(6)->get() as $post)
							<div class="col-md-5">
								<div class="post post-row">
									<a class="post-img" href="{{route('post.single',['slug' =>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-3" href="{{route('category.single',['id'=> $post->category->id])}}">{{$post->category->name}}</a>
											<span class="post-date">{{$post->created_at->toFormattedDateString()}}</span>
										</div>
										<h3 class="post-title"><a href="{{route('post.single',['slug' =>$post->slug])}}">{{$post->title}}</a></h3>
									</div>
								</div>
							</div>
							@endforeach
							<!-- /post -->

							<!-- /post -->
							
							<div class="col-md-12">
								<div class="section-row">
									<button class="primary-button center-block">Load More</button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->
						
						<!-- catagories -->
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
						<!-- /catagories -->
						
						<!-- tags -->
						<div class="aside-widget">
							<div class="tags-widget">
							@foreach($tags as $tag)
								<ul>
									<li><a href="{{route('tag.single',['id'=> $tag->id])}}">{{$tag->tag}}</a></li>
								</ul>
							@endforeach
							</div>
						</div>
						<!-- /tags -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<!-- Footer -->
	@include('includes.footer')
		<!-- /Footer -->

		<!-- jQuery Plugins -->
		<script src="/js/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/main.js"></script>

	</body>
</html>
