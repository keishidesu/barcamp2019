
var talkId = 0;

$('.vote').on('click', function(event){

	event.preventDefault();


	talkId = event.target.parentNode.parentNode.parentNode.parentNode.dataset['talkid'];
	// console.log(event.target.parentNode.parentNode.parentNode.parentNode);
	// console.log(talkId);
	
	var isVote = event.target.previousElementSibling == null;

	// var result = await $.ajax({
	$.ajax({
		method: 'POST',
		url: urlVote,
		data: {isVote: isVote, talkId: talkId, _token: token }

	})
	.done(function(){
		event.target.innerText = isVote ? event.target.innerText == 'Vote' ? 'You voted for this talk' : 'Vote' :
		// event.target.innerText == 'Downvote' ? 'You downvoted this talk' : 'Downvote'; 

		// if(isVote){
		// 	event.target.nextElementSibling.innerText = 'Downvote';
		// } else{
		// 	event.target.previousElementSibling.innerText = 'Vote';
		// }

	})
	.fail(function(err){
		// console.log(err);
		event.target.innerText = "Every participant are limit to 5 vote only"
	})
});