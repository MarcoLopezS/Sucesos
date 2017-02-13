@extends('layouts.frontend')

@section('titulo')
    Etiqueta | @parent
@endsection

@section('contenido_header')
@stop

@section('contenido_body')
	<!-- PAGE HEADER -->
	<div class="page_header">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-9">
					<ul class="bcrumbs">
						<li><a href="#">Home</a></li>
						<li>Lifestyle</li>
					</ul>
					<br>
					<h2>LifeStyle</h2>
				</div>
				<div class="col-md-5 col-sm-3">
					<div class="dropdown pull-right">
						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Recent
						<span class="fa fa-angle-down"></span></button>
						<ul class="dropdown-menu">
							<li><a href="#">Tech</a></li>
							<li><a href="#">Entertainment</a></li>
							<li><a href="#">Travel</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- // PAGE HEADER -->

	<!-- CATEGORY -->
	<div class="container padding-bottom-30">
		<div class="row">
			<div class="col-md-8 col-sm-7 dual-posts padding-bottom-30">
			
				<div class="row">
					<div class="layout_3--item">
						<div class="col-md-5 col-sm-6">
							<div class="thumb">
								<div class="icon-24 video2"></div>
								<a href="post_page_01.html"><img src="images/category/01/1.jpg" class="img-responsive" alt=""/></a>
							</div>
						</div>

						<div class="col-md-7 col-sm-6">
							<span class="cat">Tech</span>
							<h4><a href="post_page_01.html">Yelp Is Now Marking Businesses That Sue Reviewers</a></h4>
							<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur...</p>
							<div class="meta"><span class="author">by Katie F.</span><span class="date">Sep. 25, 2016</span><span class="views">728</span></div>
						</div>
					</div>
				</div>
				
				<hr class="l4">
				
				<div class="row">
					<div class="layout_3--item">
						<div class="col-md-5 col-sm-6">
							<div class="thumb">
								<a href="post_page_01.html"><img src="images/category/01/2.jpg" class="img-responsive" alt=""/></a>
							</div>
						</div>

						<div class="col-md-7 col-sm-6">								
							<span class="cat">Entertainment</span>
							<h4><a href="post_page_01.html">Your Starbucks Barista Is Allowed to Wear a Fedora Now</a></h4>
							<p>Nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur autem vel eum iure...</p>
							<div class="meta"><span class="author">by Mahita G.</span><span class="date">Sep. 24, 2016</span><span class="views">712</span><span class="comments">4</span></div>
						</div>
					</div>
				</div>
				
				<hr class="l4">
				
				<div class="row">
					<div class="layout_3--item">
						<div class="col-md-5 col-sm-6">
							<div class="thumb">
								<div class="icon-24 gallery2"></div>
								<a href="post_page_01.html"><img src="images/category/01/4.jpg" class="img-responsive" alt=""/></a>
							</div>
						</div>

						<div class="col-md-7 col-sm-6">								
							<span class="cat">Business</span>
							<h4><a href="post_page_01.html">The Very Good News Buried in Apple's Dismal Results</a></h4>
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui...</p>
							<div class="meta"><span class="author">by Mahita G.</span><span class="date">Sep. 22, 2016</span><span class="views">634</span><span class="comments">2</span></div>
						</div>
					</div>
				</div>
				
				<hr class="l4">
				
				<div class="row">				
					<div class="layout_3--item">
						<div class="col-md-5 col-sm-6">
							<div class="thumb">
								<a href="post_page_01.html"><img src="images/category/01/5.jpg" class="img-responsive" alt=""/></a>
							</div>
						</div>

						<div class="col-md-7 col-sm-6">								
							<span class="cat">World</span>
							<h4><a href="post_page_01.html">This Is the Most Alarming Number in Apples Earnings Report</a></h4>
							<p>Quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt...</p>
							<div class="meta"><span class="author">by Brandon B.</span><span class="date">Sep. 20, 2016</span><span class="views">598</span></div>
						</div>
					</div>
				</div>
				
				<hr class="l4">
				
				<div class="row">	
					<div class="layout_3--item">
						<div class="col-md-5 col-sm-6">
							<div class="thumb">
								<a href="post_page_01.html"><img src="images/category/01/6.jpg" class="img-responsive" alt=""/></a>
							</div>
						</div>

						<div class="col-md-7 col-sm-6">								
							<span class="cat">Tech</span>
							<h4><a href="post_page_01.html">Yelp Is Now Marking Businesses That Sue Reviewers</a></h4>
							<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur...</p>
							<div class="meta"><span class="author">by Katie F.</span><span class="date">Sep. 25, 2016</span><span class="views">728</span></div>
						</div>
					</div>
				</div>
				
				<hr class="l4">
				
				<div class="row">					
					<div class="layout_3--item">
						<div class="col-md-5 col-sm-6">
							<div class="thumb">
								<div class="icon-24 video2"></div>
								<a href="post_page_01.html"><img src="images/category/01/7.jpg" class="img-responsive" alt=""/></a>
							</div>
						</div>

						<div class="col-md-7 col-sm-6">								
							<span class="cat">Entertainment</span>
							<h4><a href="post_page_01.html">Your Starbucks Barista Is Allowed to Wear a Fedora Now</a></h4>
							<p>Nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur autem vel eum iure...</p>
							<div class="meta"><span class="author">by Mahita G.</span><span class="date">Sep. 24, 2016</span><span class="views">712</span><span class="comments">4</span></div>
						</div>
					</div>
				</div>
				
				<hr class="l4">
				
				<div class="row">
					<div class="layout_3--item">
						<div class="col-md-5 col-sm-6">
							<div class="thumb">
								<a href="post_page_01.html"><img src="images/category/01/9.jpg" class="img-responsive" alt=""/></a>
							</div>
						</div>

						<div class="col-md-7 col-sm-6">								
							<span class="cat">World</span>
							<h4><a href="post_page_01.html">This Is the Most Alarming Number in Apples Earnings Report</a></h4>
							<p>Quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt...</p>
							<div class="meta"><span class="author">by Brandon B.</span><span class="date">Sep. 20, 2016</span><span class="views">598</span></div>
						</div>
					</div>
				</div>
				
				<hr class="l4">
				
				<div class="row">
					<div class="layout_3--item">
						<div class="col-md-5 col-sm-6">
							<div class="thumb">
								<div class="icon-24 gallery2"></div>
								<a href="post_page_01.html"><img src="images/category/01/11.jpg" class="img-responsive" alt=""/></a>
							</div>
						</div>

						<div class="col-md-7 col-sm-6">								
							<span class="cat">Tech</span>
							<h4><a href="post_page_01.html">Yelp Is Now Marking Businesses That Sue Reviewers</a></h4>
							<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur...</p>
							<div class="meta"><span class="author">by Katie F.</span><span class="date">Sep. 25, 2016</span><span class="views">728</span></div>
						</div>
					</div>
				</div>

				<hr class="l4">
				
				<div class="row">					
					<div class="layout_3--item">
						<div class="col-md-5 col-sm-6">
							<div class="thumb">
								<a href="post_page_01.html"><img src="images/category/01/3.jpg" class="img-responsive" alt=""/></a>
							</div>
						</div>

						<div class="col-md-7 col-sm-6">								
							<span class="cat">LifeStyle</span>
							<h4><a href="post_page_01.html">Why Boosting CEO Pay Makes Companies Perform Badly</a></h4>
							<p>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident...</p>
							<div class="meta"><span class="author">by Brandon B.</span><span class="date">Sep. 23, 2016</span><span class="views">672</span></div>
						</div>
					</div>
				</div>
				
				<hr class="l4">
				
				<div class="row">
					<div class="layout_3--item">
						<div class="col-md-5 col-sm-6">
							<div class="thumb">
								<div class="icon-24 video2"></div>
								<a href="post_page_01.html"><img src="images/category/01/8.jpg" class="img-responsive" alt=""/></a>
							</div>
						</div>

						<div class="col-md-7 col-sm-6">								
							<span class="cat">World</span>
							<h4><a href="post_page_01.html">This Is the Most Alarming Number in Apples Earnings Report</a></h4>
							<p>Quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt...</p>
							<div class="meta"><span class="author">by Brandon B.</span><span class="date">Sep. 20, 2016</span><span class="views">598</span></div>
						</div>
					</div>
				</div>
				
				<hr class="l4">
				
				<div class="row">
					<div class="layout_3--item">
						<div class="col-md-5 col-sm-6">
							<div class="thumb">
								<a href="post_page_01.html"><img src="images/category/01/13.jpg" class="img-responsive" alt=""/></a>
							</div>
						</div>

						<div class="col-md-7 col-sm-6">								
							<span class="cat">Tech</span>
							<h4><a href="post_page_01.html">Yelp Is Now Marking Businesses That Sue Reviewers</a></h4>
							<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur...</p>
							<div class="meta"><span class="author">by Katie F.</span><span class="date">Sep. 25, 2016</span><span class="views">728</span></div>
						</div>
					</div>
				</div>
				
				<hr class="l4">

				<!-- PAGINATION -->
				<ul class="pagination">
					<li class="active"><a href="category_01.html">1</a></li>
					<li><a href="category_01.html">2</a></li>
					<li><a href="category_01.html">3</a></li>
					<li><a href="category_01.html">4</a></li>
					<li><a href="category_01.html">5</a></li>
					<li><span>...</span></li>
					<li><a href="category_01.html">18</a></li>
				</ul>
			</div>
			<!-- // CATEGORY -->

			<!-- SIDEBAR -->
			<aside class="col-md-4 col-sm-5">
				<div class="ads ad-300 margin-bottom-60">
					<span>Advertisement</span>
					<img src="images/ads/300x250-2.jpg" class="img-responsive" alt=""/>
				</div>

				<div class="side-widget margin-bottom-60">
					<h3 class="heading-1"><span>Follow Us</span></h3>
					<div class="side-share side-share2">
						<div class='share s_facebook'>
							<i class="fa fa-facebook"></i>
							<div class='counter c_facebook'></div>
							<span>fans</span>
						</div>
						<div class='share s_linkedin'>
							<i class="fa fa-linkedin"></i>
							<div class='counter c_linkedin'></div>
							<span>followers</span>
						</div>
						<div class='share s_plus'>
							<i class="fa fa-google-plus"></i>
							<div class='counter c_plus'></div>
							<span>followers</span>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>

				<div class="side-widget margin-bottom-30">
					<h3 class="heading-1"><span>Most Popular</span></h3>
					<div class="layout_1--item">
						<a href="#">
							<span class="badge text-uppercase badge-overlay badge-tech">Tech</span>
							<div class="overlay"></div>
							<img src="images/category/01/10.jpg" class="img-responsive" alt="">
							<div class="layout-detail padding-25">
								<h6>Retailers' Apple Pay Competitor Has Already Been Hacked</h6>
								<div class="meta"><span class="author">by Mahita G.</span><span class="date">Sep. 24, 2016</span><span class="comments">1</span></div>
							</div>
						</a>
					</div>

					<ul class="trending padding-top-30 padding-bottom-30">
						<li>
							<div class="thumb">
								<img src="images/aside/01/1.jpg" class="img-responsive" alt="">
							</div>
							<h4><a href="post_page_01.html">Nest's New Product Is an Outdoor Security Camera</a></h4>
							<div class="meta"><span class="date">Sep. 26, 2016</span></div>
						</li>
						<li>
							<div class="thumb">
								<img src="images/aside/01/2.jpg" class="img-responsive" alt="">
							</div>
							<span class="cat">Business</span>
							<h4><a href="post_page_01.html">What to Know About the History of the Fed's Beige Book</a></h4>
							<div class="meta"><span class="date">Sep. 24, 2016</span><span class="comments">4</span></div>
						</li>
						<li>
							<div class="thumb">
								<div class="icon-24 video2"></div>
								<div class="overlay-alt"></div>
								<img src="images/aside/01/3.jpg" class="img-responsive" alt="">
							</div>
							<h4><a href="post_page_01.html">The Ultimate Job Seeker's Guide to LinkedIn</a></h4>
							<div class="meta"><span class="date">Sep. 22, 2016</span></div>
						</li>
						<li>
							<div class="thumb">
								<img src="images/aside/01/4.jpg" class="img-responsive" alt="">
							</div>
							<span class="cat">Lifestyle</span>
							<h4><a href="post_page_01.html">A Major Legal Fight Just Opened Up in the Hyperloop</a></h4>
							<div class="meta"><span class="date">Sep. 21, 2016</span><span class="comments">2</span></div>
						</li>
						<li>
							<div class="thumb">
								<div class="icon-24 gallery2"></div>
								<div class="overlay-alt"></div>
								<img src="images/aside/01/5.jpg" class="img-responsive" alt="">
							</div>
							<h4><a href="post_page_01.html">These Are Some of the Best Drone Photos in the World</a></h4>
							<div class="meta"><span class="date">Sep. 20, 2016</span></div>
						</li>
					</ul>
				</div>

				<div class="side-widget margin-bottom-30">
					<h3 class="heading-1"><span>Trending Stories</span></h3>
					<ul class="trending-text">
						<li>
							<em>1</em>
							<p><a href="post_page_01.html">Nests New Product Is an Outdoor Security Camera</a> <span>Sep 26, 2016</span></p>
						</li>
						<li>
							<em>2</em>
							<p><a href="post_page_01.html">What to Know About the History of the Fed's Beige Book</a> <span>Sep 24, 2016</span></p>
						</li>
						<li>
							<em>3</em>
							<p><a href="post_page_01.html">The Ultimate Job Seeker's Guide to LinkedIn</a> <span>Sep 22, 2016</span></p>
						</li>
						<li>
							<em>2</em>
							<p><a href="post_page_01.html">A Major Legal Fight Just Opened Up in the Hyperloop</a> <span>Sep 21, 2016</span></p>
						</li>
						<li>
							<em>5</em>
							<p><a href="post_page_01.html">These Are Some of the Best Drone Photos in the World</a> <span>Sep 20, 2016</span></p>
						</li>
					</ul>
				</div>
			</aside>
			<!-- // SIDEBAR -->

		</div>
	</div>
	<!-- // CONTENT -->
@stop

@section('contenido_footer')
@stop