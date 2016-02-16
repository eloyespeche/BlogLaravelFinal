@extends('front.template.main')

@section('title', $article->title)

@section('content')
	
	<section>
		<div class="panel panel-primary">

			<div class="panel-heading">
				<h6>{{ $article->title }}</h6>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-8">
						{{ $article->content }}
						<hr>
						<h5>Tags</h5>

						@foreach ($tags as $tag)
							{{ $tag->name }}
						@endforeach

						<hr>
						<h5>Comentarios</h5>

						<div id="disqus_thread"></div>
							<script>
							/**
							* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
							* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
							*/
							/*
							var disqus_config = function () {
							this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
							this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
							};
							*/
							(function() { // DON'T EDIT BELOW THIS LINE
							var d = document, s = d.createElement('script');

							s.src = '//miblogprogramacion.disqus.com/embed.js';

							s.setAttribute('data-timestamp', +new Date());
							(d.head || d.body).appendChild(s);
							})();
							</script>
							<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

					</div>
				<div class="col-md-4 aside">
					@include('front.template.partials.aside')
				</div>
			</div>
		</div>

	
</section>

@endsection
