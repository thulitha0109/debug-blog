@include('includes.header')

			
			
			<!-- Page Header -->
			<div class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<ul class="page-header-breadcrumb">
								<li><a href="/">Home</a></li>
								<li>Category</li>
							</ul>
							<h1>Category: {{$category->name}}</h1>
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
                @foreach($category->posts()->orderby('created_at', 'asc')->take(1)->get() as $post)
					<div class="col-md-8">
						<div class="row">
							<!-- post -->
							<div class="col-md-12">
								<div class="post post-thumb">
									<a class="post-img" href="{{route('post.single',['slug' =>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-1" href="{{route('category.single',['id'=> $post->category->id])}}">{{$post->category->name}}</a>
											<span class="post-date">{{$post->created_at->toFormattedDateString()}}</span>
										</div>
										<h3 class="post-title"><a href="{{route('post.single',['slug' =>$post->slug])}}">{{$post->title}}</a></h3>
									</div>
								</div>
                            </div>
                @endforeach
      
							<!-- /post -->
							<div class="section-row">
                        <h3>Latest Posts of {{$category->name}}</h3>
</div>		
                           
                            @foreach($category->posts()->orderby('created_at', 'desc')->take(2)->get() as $post)
							<div class="col-md-6">
								<div class="post">
									<a class="post-img" href="{{route('post.single',['slug' =>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-2" href="{{route('category.single',['id'=> $post->category->id])}}">{{$post->category->name}}</a>
											<span class="post-date">{{$post->created_at->toFormattedDateString()}}</span>
										</div>
										<h3 class="post-title"><a href="{{route('post.single',['slug' =>$post->slug])}}">{{$post->title}}</a></h3>
									</div>
								</div>
                            </div>
                            @endforeach
							<!-- /post -->

							
							<div class="clearfix visible-md visible-lg"></div>
							
							
							<!-- ad -->
                            <div class="section-row">
                                <h3>All Posts of {{$category->name}}</h3>
                            </div>	
                            <!-- post -->
                            @foreach($category->posts()->orderby('created_at', 'desc')->take(5)->get() as $post)
							<div class="col-md-6">
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
						
						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Most Read</h2>
							</div>
                            @foreach($category->posts()->orderby('created_at', 'asc')->take(4)->get() as $post)
							<div class="post post-widget">
								<a class="post-img" href="{{route('post.single',['slug' =>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
								<div class="post-body">
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
						
						<!-- /archive -->
					</div>
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
