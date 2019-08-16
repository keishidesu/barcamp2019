<!DOCTYPE html>
<html>
<head>

	<!--title-->
	<title>Proposed topics</title>

	<!--Metas-->
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!--Link Bootsrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<!--Link Fontawesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<!--Styles-->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->



</head>
<style>
	.card:hover{
		background-color:  #f0e6ff;
	}

	.card{
		border-color: #642c6a;
	}

</style>

<body>
	<div class="container">
		<div class="row mt-5 mb-5">
			<div class="col-md-6 col-sm-12">
				@foreach ($talks as $talk)
					<div class="talks" data-talkid="{{ $talk->id }}">
						<div class="card mt-3">
						  <div class="card-body">
						    <h5 class="card-title">{{ $talk->title }}</h5>
						    <p class="card-text">{{ $talk->body }}</p>
						    <hr>
						    <div class="interaction">
						    	<a href ="#" class="vote">{{ Auth::user()->votes()->where('talk_id', $talk->id)->first() ? Auth::user()->votes()->where('talk_id', $talk->id)->first()->vote == 1 ? 'You voted for this talk' : 'Vote' : 'Vote'}}</a> |
						    	<a href ="#" class="vote">{{ Auth::user()->votes()->where('talk_id', $talk->id)->first() ? Auth::user()->votes()->where('talk_id', $talk->id)->first()->vote == 0 ? 'You downvoted this talk' : 'Downvote' : 'Downvote'}}</a>
						    </div>
						  </div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>


<script src ="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src ="{{ asset('/js/vote.js') }}"></script>

<script type="text/javascript">
var token = '{{ Session::token() }}';
var urlVote = '{{ route('vote') }}'
</script>


</body>
</html>



