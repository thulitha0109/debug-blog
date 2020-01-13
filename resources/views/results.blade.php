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
							<h1>Search Results: {{$query}}</h1>
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
                
							<div class="section-row">
                        <h3>All Posts</h3>
                            </div>		
                           @if($posts->count()>0)
                            @foreach($posts as $post)
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
                                @else
                                <h1 class="text-center">No Posts Found.</h1>
                                @endif
                            

							<!-- /post -->

							
							<div class="clearfix visible-md visible-lg"></div>
							
							
							
						</div>
					</div>
					
					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						</div>
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

	</body>
</html>

