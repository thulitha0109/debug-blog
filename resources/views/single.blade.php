@include('includes.header')


		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Post content -->
					<div class="col-md-8">
						<div class="section-row sticky-container">
							<div class="main-post">
								<h2>{{$post->title}}</h2>
								
								
								<figure class="figure-img">
									<img class="img-responsive" src="{{$post->featured}}" alt="">
									<figcaption>{{$post->category->name}}, {{$post->created_at->toFormattedDateString()}}</figcaption>
								</figure>
								{!!$post->content!!}
								</div>
							<div class="post-shares sticky-shares">
								<a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
								<a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
								<a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-envelope"></i></a>
							</div>
						</div>
						
						
						
						<!-- ad -->
						<div class="section-row text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-2.jpg" alt="">
							</a>
						</div>
						<!-- ad -->
						
						<!-- author -->
						<div class="section-row">
							<div class="post-author">
								<div class="media">
									<div class="media-left">
										<img class="media-object" src="{{$post->user->avatar}}" alt="">
									</div>
									<div class="media-body">
										<div class="media-heading">
											<h3>{{$post->user->name}}</h3>
										</div>
										<p>{{$post->user->about}}</p>
										<ul class="author-social">
											<li><a href="{{$post->user->facebook}}"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- /author -->

						<!-- comments -->
						<div class="section-row">
							

							@include('includes.disqus')

							<div class="post-comments">
								
										<!-- comment -->
										<div class="media">
											
											<div class="media-body">
												<div class="media-heading">
													
										</div>
										<!-- /comment -->
									</div>
								</div>
								<!-- /comment -->

								<!-- comment -->
								<div class="media">
									
									<div class="media-body">
										<div class="media-heading">
											
										</div>
									</div>
								</div>
								<!-- /comment -->
							</div>
						</div>
						<!-- /comments -->

						<!-- reply -->
						
					</div>
					<!-- /Post content -->

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
							@foreach($post->orderby('created_at', 'asc')->take(4)->get() as $post)
							<div class="post post-widget">
								<a class="post-img" href="{{route('post.single',['slug' =>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="{{route('post.single',['slug' =>$post->slug])}}">{{$post->title}}</a></h3>
								</div>
							</div>

							@endforeach
						</div>
						<!-- /post widget -->

						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Featured Posts</h2>
							</div>
							@foreach($post->orderby('created_at', 'desc')->take(2)->get() as $post)
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
							
						</div>
						<!-- /post widget -->
						
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
						<div class="section-title">
								<h2>Tags</h2>
							</div>
							<div class="tags-widget">
							@foreach($tags as $tag)
								<ul>
									<li><a href="{{route('tag.single',['id'=> $tag->id])}}">{{$tag->tag}}</a></li>
								</ul>
							@endforeach
							</div>
						</div>
						<!-- /tags -->
						
						<!-- archive -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Archive</h2>
							</div>
							<div class="archive-widget">
								<ul>
									<li><a href="#">January 2018</a></li>
									<li><a href="#">Febuary 2018</a></li>
									<li><a href="#">March 2018</a></li>
								</ul>
							</div>
						</div>
						<!-- /archive -->
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

	</body>
</html>

