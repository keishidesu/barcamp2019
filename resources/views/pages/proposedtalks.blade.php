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

	<!--Styles-->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
			@foreach ($talks as $talk)
				<div class="talks" data-postid="{{ $talk->id }}">
					<div class="col-12 mt-3">
						<div class="card">
						  <div class="card-body">
						    <h5 class="card-title">{{ $talk->title }}</h5>
						    <p class="card-text">{{ $talk->body }}</p>
						    <a href = "#">Like</a>
						    <hr>
						  </div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</body>

<script>
	numCounter = 0;
    $( "#toggle-button" ).click(function() {
        if (numCounter == 0){
            numCounter = numCounter+1;
            $(this).css("background-color","grey")
        } else {
            numCounter = 0;
            $(this).css("background-color","#642c6a")
        }
        $("#toggle-counter").text(numCounter);
    });

    numCounter = 0;
    $( "#toggle-button-2" ).click(function() {
        if (numCounter == 0){
            numCounter = numCounter+1;
            $(this).css("background-color","grey")
        } else {
            numCounter = 0;
            $(this).css("background-color","#642c6a")
        }
        $("#toggle-counter-2").text(numCounter);
    });

    numCounter = 0;
    $( "#toggle-button-3" ).click(function() {
        if (numCounter == 0){
            numCounter = numCounter+1;
            $(this).css("background-color","grey")
        } else {
            numCounter = 0;
            $(this).css("background-color","#642c6a")
        }
        $("#toggle-counter-3").text(numCounter);
    });

    numCounter = 0;
    $( "#toggle-button-3" ).click(function() {
        if (numCounter == 0){
            numCounter = numCounter+1;
            $(this).css("background-color","grey")
        } else {
            numCounter = 0;
            $(this).css("background-color","#642c6a")
        }
        $("#toggle-counter-3").text(numCounter);
    });

    numCounter = 0;
    $( "#toggle-button-4" ).click(function() {
        if (numCounter == 0){
            numCounter = numCounter+1;
            $(this).css("background-color","grey")
        } else {
            numCounter = 0;
            $(this).css("background-color","#642c6a")
        }
        $("#toggle-counter-4").text(numCounter);
    });

    numCounter = 0;
    $( "#toggle-button-5" ).click(function() {
        if (numCounter == 0){
            numCounter = numCounter+1;
            $(this).css("background-color","grey")
        } else {
            numCounter = 0;
            $(this).css("background-color","#642c6a")
        }
        $("#toggle-counter-5").text(numCounter);
    });

    numCounter = 0;
    $( "#toggle-button-6" ).click(function() {
        if (numCounter == 0){
            numCounter = numCounter+1;
            $(this).css("background-color","grey")
        } else {
            numCounter = 0;
            $(this).css("background-color","#642c6a")
        }
        $("#toggle-counter-6").text(numCounter);
    });

    numCounter = 0;
    $( "#toggle-button-7" ).click(function() {
        if (numCounter == 0){
            numCounter = numCounter+1;
            $(this).css("background-color","grey")
        } else {
            numCounter = 0;
            $(this).css("background-color","#642c6a")
        }
        $("#toggle-counter-7").text(numCounter);
    });

    numCounter = 0;
    $( "#toggle-button-8" ).click(function() {
        if (numCounter == 0){
            numCounter = numCounter+1;
            $(this).css("background-color","grey")
        } else {
            numCounter = 0;
            $(this).css("background-color","#642c6a")
        }
        $("#toggle-counter-8").text(numCounter);
    });

</script>


</html>



