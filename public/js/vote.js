
var talkId = 1;

$('.vote').on('click', function(event){

	event.preventDefault();
	// talkId = event.target.parentNode.parentNode.dataset['talkId'];

	talkId = event.target.parentNode.parentNode.parentNode.parentNode.dataset['talkid'];
	console.log(event.target.parentNode.parentNode.parentNode.parentNode);
	console.log(talkId);
	
	var isVote = event.target.previousElementSibling == null;

	$.ajax({
		method: 'POST',
		url: urlVote,
		data: {isVote: isVote, talkId: talkId, _token: token }

	})
	.done(function(){
		event.target.innerText = isVote ? event.target.innerText == 'Vote' ? 'You voted for this talk' : 'Vote' :
		event.target.innerText == 'Downvote' ? 'You downvoted this talk' : 'Downvote'; 

		if(isVote){
			event.target.nextElementSibling.innerText = 'Downvote';
		} else{
			event.target.previousElementSibling.innerText = 'Vote';
		}

	});
});