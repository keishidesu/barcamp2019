@extends('layouts.default')

@section('content')
	<div class="container text-dark mt-4 pt-5">
		<h1>Proposed Talks</h1>
		@if(count($posts) > 1)
			@foreach($posts as $post)
				<div class="alert alert-dark">
					<h3>{{$post->speaker}}</h3>
					<p>{{$post->body}}</p>
				</div>
			@endforeach
		@else
			<p>No posts found</p>
		@endif
	</div>
@endsection