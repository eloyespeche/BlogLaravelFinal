<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Categorías</h3>
	</div>
	<div class="panel-body">
		<ul class="list-group">

		    @foreach($categories as $category)
				<li class="list-group-item">
					<span class="badge">{{ $category->articles->count() }}</span>
					<a href="{{ route('front.search.category', $category->name) }}">
						{{ $category->name }}
					</a>
				</li>
			@endforeach

		</ul>
	</div>
</div>


<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Tags</h3>
	</div>
	<div class="panel-body">
		@foreach($tags as $tag)
			<span class="label label-default">
				<a href="{{ route('front.search.tag', $tag->name) }}">
					{{ $tag->name }}
				</a>
			</span>
	    @endforeach
	</div>
</div>

<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Comentarios</h3>
	</div>
	<div class="panel-body">
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
</div>
