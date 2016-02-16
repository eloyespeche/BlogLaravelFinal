@extends('front.template.main')

@section('content')
	
	<section>
		<div class="panel panel-primary">

			<div class="panel-heading">
				<h6>Últimos artículos</h6>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-8">
						<div class="row">

							@foreach($articles as $article)

								<div class="col-md-6">
									<div class="panel panel-primary">
										<div class="panel-body">
											<a href="{{ route('front.view.article', $article->slug) }}" class="thumbnail">
											@foreach($article->images as $image)
												<img class="img-responsive img-article" src="{{ asset('img/articles/' . $image->name) }}" alt="...">
											@endforeach
											</a>
											<a href="{{ route('front.view.article', $article->slug) }}">
												<h4 class="text-center">{{ $article->title }}</h4>
											</a>
											<hr>
											<i class="fa fa-folder-open-o"></i><a href="{{ route('front.search.category', $article->category->name) }}">{{ $article->category->name }}</a>
											<div class="pull-right">
												<i class="fa fa-clock-o"></i> {{ $article->created_at->diffForHumans() }}
											</div>
										</div>
									</div>
								</div>

							@endforeach

						</div>
						{!! $articles->render() !!}
					</div>
				<div class="col-md-4 aside">
					@include('front.template.partials.aside')
				</div>
			</div>
		</div>

	
</section>
	


	
	
	

@endsection