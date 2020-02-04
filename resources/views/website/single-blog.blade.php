@extends('website.layouts.master')
@section('title', 'Home')
@section('content')

    <!-- =========================
        Blog Section
    ============================== -->
    <section class="blog-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-1"></div>
    			<div class="col-md-10">
    				<div class="blog-single">
	    				<div class="blog-box">
	    					<!-- 
								==================
								Date Section
								==================
	    					 -->
	    					<div class="blog-date text-center">
	    						<h2 class="date">25</h2>
	    						<h4 class="monthe">March</h4>
	    					</div>
	    					<!-- 
								==================
								Blog Img
								==================
	    					 -->
	    					<div class="blog-img">
	    						<img src="{{ asset('frontend/img/blog-img/single-blog-img-1.jpg') }}" class="figure-img img-fluid" alt="blog-img">
	    						<div class="shadow">
	    							<img src="{{ asset('frontend/img/shadow.png') }}" class="figure-img img-fluid" alt="blog-img">
	    						</div>
	    					</div>
	    					<!-- 
								==================
								Meta Area
								==================
	    					 -->
	    					<div class="single-blog-mata-area">
		    					<div class="blog-badge">
									<span class="badge badge-secondary black-bg">News</span>
									<span class="badge badge-secondary green-bg">Blog</span>
									<span class="badge badge-secondary orange-bg">Update</span>
								</div>
		    					<div class="blog-meta">
		    						<div class="d-flex justify-content-start">
			    						<a href="#">
				    						<div class="blog-like">
				    							<i class="fa fa-thumbs-up" aria-hidden="true"></i>
				    							115
				    						</div>
			    						</a>
			    						<a href="#">
				    						<div class="comment">
				    							<i class="fa fa-commenting" aria-hidden="true"></i>
				    							59
				    						</div>
			    						</a>
			    						<a href="#">
				    						<div class="blog-share">
				    							<i class="fa fa-share-alt-square" aria-hidden="true"></i>
				    							20
				    						</div>
			    						</a>
		    						</div>
		    					</div>
	    					</div>
	    					<!-- 
								==================
								Author Meta
								==================
	    					 -->
	    					<div class="author-meta">
	    						Posted by <a href="#">admin</a> / <a href="#">news</a> / <a href="#">technology</a>
	    					</div>
	    					<!-- 
								======================
								Blog Content
								======================
	    					 -->
	    					<div class="blog-content-box">
	    						<a href="#"><h4 class="blog-title">Whatever the problem, be part of the solution. don’t just sit around raising questions and pointing out obstacles. we ‘ve all worked that person</h4></a>
	    						<p class="blog-content">With precision crafted metal frame design, refined performance and Windows 10 built in, it’s the smart choice for your business. With precision crafted metal frame design, refined performance and Windows 10 built in, it’s the smart choice for your business.With precision crafted metal frame design, refined performance and Windows 10 built in, it’s the smart cho With precision crafted metal frame design, refined performance and Windows 10 built in, it’s the smart choWith precision crafted metal frame design, refined performance and Windows 10 built in, it’s the smart cho.</p>
	    						<br>

	    						<p class="blog-content">The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their projects again and again. And if she hasn’t been rewritten, then they are still using her.</p>
	    						<br>

	    						<h6 class="mb-20">Longe and Parole and dragged her into their agency</h6>
								<p class="blog-content mb-20">She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Vllage and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>
								<br>
								<h6 class="mb-20">Longe and Parole and dragged her into their agency</h6>
								<p class="blog-content mb-20">She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Vllage and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>

								<br>
								<h6 class="mb-20">Vokalia and Consonantia, there live the blind text</h6>
								<p class="blog-content mb-20">She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Vllage and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>
	    					</div>
	    					<!-- 
								=====================
								Blog Share Oprion
								=====================
	    					 -->
	    					{{-- <div class="single-blog-share-section">
	    						<strong>Share :</strong>
	    						<a href="#">
	    							<span class="badge badge-secondary share-facebook" data-toggle="tooltip" data-placement="top" title="Share This Blog in Facebook"><i class="fa fa-facebook" aria-hidden="true"></i>facebook</span>
	    						</a>
	    						<a href="#">
	    							<span class="badge badge-secondary share-twitter" data-toggle="tooltip" data-placement="top" title="Share This Blog in Twitter"><i class="fa fa-twitter" aria-hidden="true"></i>twitter</span>
	    						</a>
	    						<a href="#">
	    							<span class="badge badge-secondary share-linkedin" data-toggle="tooltip" data-placement="top" title="Share This Blog in Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i>Linkdin</span>
	    						</a>
	    						<a href="#">
	    							<span class="badge badge-secondary share-pinterest" data-toggle="tooltip" data-placement="top" title="Share This Blog in Pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i>Pinterest</span>
	    						</a>
	    					</div> --}}
	    				</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

@endsection