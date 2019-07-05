@extends('layouts.default')

@section('title')

@endsection

@section('content')
<!-- Home -->
<div id="home">
  <div class="bg-home">
      <div class="row jumbotron justify-content-center text-center p-2 bg-transparent">
          <div class="col-12">
              <h1 class="pt-5 title text-center">
                  BARCAMP CYBERJAYA<br>
                  x<br>
                  JUMPSTART PROGRAM
              </h1>
          </div>
          <div class="row d-none d-md-block">
            <div class="jumbotron bg-transparent">
              <div class="text-center txt-cyan countdown d-sm-none d-md-block">
                <ul>
                  <li><span id="days"></span>days</li>
                  <li><span id="hours"></span>Hours</li>
                  <li><span id="minutes"></span>Minutes</li>
                  <li><span id="seconds"></span>Seconds</li>
                </ul>
              </div>
            </div>
          </div>
      </div>
      <script type="text/javascript">
        const second = 1000,
              minute = second * 60,
              hour = minute * 60,
              day = hour * 24;

        let countDown = new Date('Aug 17, 2019 00:00:00').getTime(),
            x = setInterval(function() {

              let now = new Date().getTime(),
                  distance = countDown - now;

              document.getElementById('days').innerText = Math.floor(distance / (day)),
                document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
                document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
                document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
              
              //do something later when date is reached
              //if (distance < 0) {
              //  clearInterval(x);
              //  'IT'S MY BIRTHDAY!;
              //}

        }, second)
      </script>
      <div class="row mt-2 d-none d-md-block">
        <div class="row col-12">
          <div class="col-md-4">
              <div class="card bg-transparent border-transparent">
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p class="font-italic quote">
                      "The term 'BarCamp' has nothing to do with alcohol but everything to do with high spirits - a spirit of sharing ideas in a free and fun environment."
                    </p>
                    <footer class="blockquote-footer">
                      <cite title="Source Title">
                      Outlook Business
                      </cite>
                    </footer>
                  </blockquote>
                </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card bg-transparent border-transparent">
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p class="font-italic quote">
                      "A gathering of folk who, in one way or another, aim to make the world a better place."
                    </p>
                    <footer class="blockquote-footer">
                      <cite title="Source Title">
                      Dr Koh Niak Wu
                      </cite>
                    </footer>
                  </blockquote>
                </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card bg-transparent border-transparent">
                <div class="card-body ">
                  <blockquote class="blockquote mb-0">
                    <p class="font-italic quote">
                      "Barcamp Cyberjaya its one amazing adhoc event where we see young mind share their idea and get it feedback with industry fellow."
                    </p>
                    <footer class="blockquote-footer">
                      <cite title="Source Title">
                      Mr. Curry Khoo
                      </cite>
                    </footer>
                  </blockquote>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About -->
<div id="about">
  <div class="container">
    <div class="mt-4">
      <h3 class="text-dark text-center">
        Unlike typical conferences, BarCamp has no preset of speakers.<br> 
        BarCamp is a user-generated conference that brings people together to share their passion!
      </h3>
    </div>
    <div class="row mt-3 pb-5">
      <div class="col-sm-12 col-md-6">
        <div class="card border-transparent">
          <div class="card-body">
            <h5 class="card-title txt-blue">You can choose to be an audience or speaker.</h5>
            <p class="card-text text-dark">You are welcome to share your knowledge or experiences. Speakers are encouraged to talk about technology, entrepreneurship, education or any other topics as long as it does not touch sensitive topics like politics and religions.</p>
            <h5 class="card-title txt-blue">You can choose who get to speak.</h5>
            <p class="card-text text-dark">Voting session will be held for proposed topics.</p>
            <h5 class="card-title txt-blue">You can choose which talks to attend.</h5>
            <p class="card-text text-dark">Multiple talks will be held on the same timetrack, choose the one you like! You are encourage to leave the session quietly if that is not something you interested with.<br><br>That means, the speaker lineup is generated by everyone who comes(including you) on that day itself. We can't wait to see what everyone will share and learn in this BarCamp!</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6">
        <div class="card border-transparent">
          <div class="card-body">
            <h5 class="card-title txt-blue">Talks Awards</h5>
            <p class="card-text text-dark">Cash voucher will be given out for the top 3 speakers! Not a competition but to encourage participants to share their knowledge or experiences!</p>
            <h5 class="card-title txt-blue">Boardgames</h5>
            <p class="card-text text-dark">None of the talks interest you? Stay in the lobby and play boardgames!</p>
            <h5 class="card-title txt-blue">No worry about money.</h5>
            <p class="card-text text-dark">Registration is FREE! Lunch, tea-time and water are provided! Tshirt will be given to those who registered earlier!</p>
            <h5 class="card-title txt-blue">What is more?</h5>
            <p class="card-text text-dark">There is LUCKYDRAW for participants this year! Arduino Beginner Kits and power banks will be given out!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--   Call for speakers -->
<div id="callforspeaker">
  <div class="bg-blue pt-2">
    <div class="container mt-4">
      <div class="row mt-4">
        <div class="col-sm-12 col-md-5">
          <h1 class="speakertitle pt-3">We Are Calling for Speakers</h1>
        </div>
        <div class="col-sm-12 col-md-7">
          <form class="mt-3 pb-3">
            <div class="form-group">
              <label for="exampleFormControlInput1">How Should We Address You?</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Name"required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">How Do We Contact You?</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Contact"required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">What Will You Be Talking About?</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Describe your topic"required></textarea>
            </div>
            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-info btn-lg btn-block" id="submit">Submit</button> 
                <a href="/proposedtalks" class="btn btn-outline-info btn-lg btn-block" role="button" aria-disabled="true">View Proposed Talks</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Venue -->
<div id="venue">
  <div class="container">
    <div class="mt-3">
      <h1 class="text-dark">Venue</h1>
    </div>
    <div class="continer-fluid">
      <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.6109337043267!2d101.63986901542282!3d2.9276437552891754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdb6e4a9d3b7a1%3A0xd0f74e8ad10f1129!2sMultimedia+University+-+MMU+Cyberjaya!5e0!3m2!1sen!2smy!4v1561531229528!5m2!1sen!2smy" width="1200" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>></iframe>
      </div>
    </div>
    <div class="container row">
      <h2 class="text-dark justify-content-center">How to Get to MMU</h2>
    </div>
    <div class="row mt-3 mb-5">
      <div class="col-sm-12 col-md-6">
        <div class="card mt-1 h-100">
          <div class="card-body cardhover">
            <h2 class="card-title text-dark text-center">Public Transport</h2>
            <p class="card-text text-dark">
              <ol class="text-dark">
                <li>Take KLIA Transit to Putrajaya/Cyberjaya station.</li>
                <li>Take taxi to Multimedia University Faculty of Computing and Informatics 
                  or Take the bus Nadi Putra 520 to MMU</li>
              </ol>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6">
        <div class="card mt-1 h-100">
          <div class="card-body cardhover">
            <h2 class="card-title text-dark text-center">Driving</h2>
            <p class="card-text text-dark">
              <ol class="text-dark">
                <li>Find MMU Cyberjaya on your navigation app.</li>
                <li>Once you are inside there will be road signs showing where to park</li>
              </ol>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- carousel -->
<div id="carousel">

</div>
<!-- FAQ -->
<div id="faq">
  <div class="bg-blue pt-2">
    <div class="container">
      <div class="mt-3 mb-3">
        <h1>Frequently Asked Questions</h1>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card bg-transparent border-transparent">
            <div class="card-body">
              <h3 class="card-title txt-cyan">What can we talk about in BarCamp?</h3>
              <p class="card-text">
              Speakers are encouraged to conduct sessions that are related to technology, entrepreneurship, and education (cause we are in Cyberjaya and in university right?). But, you can also talk about any other topics that you like, as long as other participants vote on it.<br><br>

              Speakers should refrain from touching on sensitive topics such as politics and religions.
              </p>
            </div>
            <div class="card-body">
              <h3 class="card-title txt-cyan">How many tracks are there, and how long is each session?</h3>
              <p class="card-text">
              There will be 5 simultaneous tracks. Each session will be roughly 45 minutes long.
              </p>
            </div>
            <div class="card-body">
              <h3 class="card-title txt-cyan">What equipments are provided and what do I need to bring?</h3>
              <p class="card-text">
              Each MMU FCI classroom is equipped with:
              <ul>
                <li>VGA Projector</li>
                <li>WiFi Access Point</li>
                <li>Power socket</li>
                <li>Whiteboard and markers</li>
                <li>If your device (such as MacBook or iPads) does not have VGA output, please bring your own VGA adapter.</li>
              </ul>
              </p>
            </div>
            <div class="card-body mb-3">
              <h3 class="card-title txt-cyan">What about Food?</h3>
              <p class="card-text">
              There will be free Halal lunch provided. Also, if you signed up as a vegan, we will do our best to make it easy for you.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- sponsors -->
<div id="sponsors">
  <div class="container">
    <div class="mt-3 mb-3 pt-3">
      <h1 class="text-dark">Past Sponsors</h1>
    </div>
    <div class="row mt-5">
      <div class="col-md-4 col-6">
        <div class="card border-transparent">
          <div class="card-body">
            <a href="https://www.binary.com" target="_blank" rel="noopener"><img src="/images/binary.com.png" class="img-fluid"></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-6">
        <div class="card border-transparent">
          <div class="card-body">
            <a href="https://www.123rf.com" target="_blank" rel="noopener"><img src="/images/123rf.png" class="img-fluid"></a>         
          </div>
        </div>
      </div>
      <div class="col-md-4 col-6">
        <div class="card border-transparent">
          <div class="card-body">
            <a href="http://www.seekasia.com" target="_blank" rel="noopener"><img src="/images/seekasia.png" class="img-fluid"></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-6">
        <div class="card border-transparent">
          <div class="card-body">
            <a href="http://cyberview.com.my" target="_blank" rel="noopener"><img src="/images/cyberview.png" class="img-fluid"></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-6">
        <div class="card border-transparent">
          <div class="card-body">
            <a href="https://www.cytron.com.my" target="_blank" rel="noopener"><img src="/images/cytron.png" class="img-fluid"></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-6">
        <div class="card border-transparent">
          <div class="card-body">
            <a href="https://www.servicerocket.com" target="_blank" rel="noopener"><img src="/images/servicerocket.png" class="img-fluid"></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-6">
        <div class="card border-transparent">
          <div class="card-body">
            <a href="https://www.hilti.group" target="_blank" rel="noopener"><img src="/images/hilti.png" class="img-fluid"></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-6">
        <div class="card border-transparent">
          <div class="card-body">
            <a href="http://www.chumbaka.asia" target="_blank" rel="noopener"><img src="/images/chumbaka.png" class="img-fluid"></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-6">
        <div class="card border-transparent">
          <div class="card-body">
            <a href="https://www.snappymob.com" target="_blank" rel="noopener"><img src="/images/snappymob.png" class="img-fluid"></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-6">
        <div class="card border-transparent">
          <div class="card-body">
            <a href="https://werebits.com" target="_blank" rel="noopener"><img src="/images/werebits.png" class="img-fluid"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-3 mb-3 pt-3">
      <h1 class="text-dark">Media Partners</h1>
    </div>
      <div class="row mt-5 justify-content-center">
        <div class="col-md-4 col-6">
          <div class="card border-transparent">
            <div class="card-body">
              <a href="http://radio.mmu.edu.my" target="_blank" rel="noopener"><img src="/images/radiommu.png" class="img-fluid"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- sponsor us -->
  <div class="bg-grey">
    <div class="container pb-4">
      <div class="mt-3">
        <h1 class="text-dark pt-5">Sponsor Us</h1>
      </div>
      <p class="text-dark">
        Since BarCamp Cyberjaya is free for everyone, we need your help to make it possible. We have come a long way, but we still need your support. Your generous contribution will help us extend our mission to empower students and young professionals through technology.<br><br> 

        BarCamp Cyberjaya is an opportunity to showcase your company’s products and services, attract young talents and increase market share.
      </p>
      <div class="row justify-content-center mt-4">
        <div class="col-md-4 col-sm-12">
          <button type="button" class="btn btn-lg btn-block bg-blue border-transparent text-white btn-download">
            <a href="/pdf/sponsorshipproposal" download> Sponsorship Proposal</a></button>
        </div>
      </div>
      <div class="row">
          <div class="col-12">
              <p class="text-center text-dark mt-4">Have any inquiries? Drop us any email to <a href="mailto:itsoc.mmu@gmail.com">itsoc.mmu@gmail.com</a></p>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
