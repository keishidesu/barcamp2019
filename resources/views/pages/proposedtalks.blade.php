@extends('layouts.default')

@section('title')
@endsection

@section('content')
	<script type="text/javascript">
		var votecount = 0;

		function refreshResults () {
		  var results = document.getElementById('results');
		  results.innerHTML += '<h3 id="results">votecount:</h3> ' + votecount;
		}

		document.getElementById('vote-button').addEventListener('click', function () {
		  votecount++;
		  refreshResults();
		});
	</script>

	<div class="container text-dark mt-4 pt-5">
		<h1>Proposed Talks</h1>
	</div>
	<div class="container">
		<div class="mt-3">
			@for ($i = 1; $i < 5; $i++)
				<div class="alert alert-dark bg-grey border-transparent">
					<div class="row">
						<div class="col-md-9 col-sm-6">
							@php
								$translate = 'proposedtalks.topic_'.$i;
							@endphp
							<h4>@lang($translate)</h4>
							@php
								$translate = 'proposedtalks.speaker_'.$i;
							@endphp
							<p class="font-italic">By: @lang($translate)</p>
						</div>
						<div class="text-right col-md-3 col-sm-6">
							<form class="myform">
							  	<h3 id="results"><!-- votecount: 0 --></h3>
								<i class="fas fa-star" style="font-size: 30px; color:#FFBD2E;"></i>
							</form>
						</div>
						<p class="container">
							<a class="btn bg-blue border-transparent text-white" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
							    Read More
							</a>
						</p>
						<div class="collapse container" id="collapseExample">
							<div class="card card-body bg-grey border-transparent">
							    @php
									$translate = 'proposedtalks.descrip_'.$i;
								@endphp
								@lang($translate)
							</div>
						</div>
					</div>
				</div>
			@endfor
		</div>
	</div>
@endsection

