@extends('layout.layout')
@section('content')

<div class="container-fluid">
  {{-- home page image --}}
  <div class="row mt-5 ">
    <div class="col-lg-2 text-center">
      <h6>9819709827</h6>

      <nav class="nav flex-column">
        <a class="nav-link text-decoration-none active" href="#"><i class="fab fa-facebook-f "></i></a>
        <a class="nav-link text-decoration-none" href="#"><i class="fab fa-instagram"></i></a>
        <a class="nav-link text-decoration-none" href="#"><i class="fab fa-youtube "></i></a>
        <a class="nav-link text-decoration-none" href="#"><i class="fab fa-tripadvisor"></i></a>
      </nav>
    </div>
    <div class="offset-lg-1 col-lg-8 wallpaper">

      <div class="intro">
        <h6 class="text-secondary">&nbsp; - New Baneswor,Kathmandu,Nepal</h6>
        <h2 class="font-weight-bold text-header-color p-2">
          <p>Welcome to BlueVivid <br>the Best Vacation in Kathmandu </p>
        </h2>
      </div>
      <div class="wall shadow">
        <div class="form">
          {!!Form::open()!!}
          <div class="row">
            <div class="col form-group ">
              {{Form::label('checkIn','Check In:-')}}
              {{Form::text('checkIn','',['class'=>'form-control','placeholder'=>'Check-In-Date'])}}
            </div>
            <div class="col form-group ">
              {{Form::label('checkOut','Check Out:-')}}
              {{Form::text('checkIn','',['class'=>'form-control','placeholder'=>'Check-Out-Date'])}}
            </div>
            <div class="col form-group ">
              {{Form::label('body','Guests')}}
              {{Form::text('guests','',['class'=>'form-control','placeholder'=>'Guests'])}}
            </div>
            <div class="col">
              <br>
              {{Form::submit('SEARCH',['class'=>'btn btn-info details'])}}
            </div>
          </div>
          {!!Form::close()!!}
        </div>
      </div>
      <div class="wall">
        <img src="{{asset('images/hotel.jpg')}}" class="img-fluid">
      </div>

    </div>


  </div>
  {{-- About and image --}}
  <br><br><br>
  <div class="row">
    <div class="offset-lg-1 col-lg-4 text-justify">
      <h6 class="text-secondary">New Baneswor,Kathmandu</h6><br>
      <h3 class="font-weight-bold about text-header-color">About BlueVivid
        <p><i class="fas fa-caret-up"></i><i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i></p>
      </h3>


      <p class="text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique temporibus animi
        magnam error assumenda!
        Libero, modi. Eaque, iste. Illum fuga quisquam aspernatur unde commodi, sint et quasi deleniti soluta illo
        perferendis repellendus, cum provident quae consequuntur</p>
      <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem aperiam accusantium
        facilis nesciunt. Dolores
        facere aperiam ratione! Non, temporibus quasi perspiciatis repellat esse quos quidem omnis laudantium distinctio
        quis, unde voluptate necessitatibus eum! Libero nisi nostrum laboriosam laudantium numquam in! corporis tempora
        veritatis dolorem sed assumenda?
        Reprehenderit debitis, eveniet molestiae hic modi in consectetur?</p>
      <p><a href="" class="btn btn-info details">VIEW DETAILS</a></p>
    </div>
    <div class="col-lg-5 about-info">
      <div class="about-image about-img">
        <img src="{{asset('images/about.jpg')}}" class="img-fluid">
      </div>
      <div class="about-image about-image-shadow">

      </div>
    </div>
  </div>

  {{-- Rooms of hotel --}}
  <div class="row rooms">
    <div class="col-lg-12">

      <div class="row">
        <div class="col-lg-12 text-center title">
          <h6 class="text-secondary">High-end resort accommodations</h6>
          <h3 class="font-weight-bold text-header-color">Our Rooms<p><i class="fas fa-caret-up"></i><i
                class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i></p>
          </h3>
        </div>
      </div>
      <div class="row">
        <div class="offset-lg-1 col-lg-10 bg-white">
          <div class="row">
            <div class="col-lg-6 room-info">
              <div class="room-image img">
                <img src="{{asset('images/rooms.jpg')}}" class="img-fluid">
              </div>
              <div class="room-image room-image-shadow">

              </div>
            </div>
            <div class="offset-lg-1 col-lg-5">
              <div class="room-type">
                <p><a href="" class="title-hover h3">Suite Royal Level</a><br>
                  <i class="fas fa-caret-up"></i><i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i>
                </p>
                <p class="text-secondary">
                  Royal Level Suites are very spacious and equipped with modern furniture, feature a king size bed, a
                  sofa, living room, whirlpool bathtub and balcony.
                </p>
                <p class="text-secondary">Prices start at: <b>$110</b> per night</p>
                <p> <a href="" class="btn btn-info details">VIEW DETAILS</a></p>
              </div>
            </div>
          </div>
        </div>

      </div>
      <br><br><br><br><br>
      <div class="row">
        <div class="offset-lg-1 col-lg-10 bg-white">
          <div class="row">
            <div class="col-lg-6 room-info">
              <div class="room-image img">
                <img src="{{asset('images/rooms.jpg')}}" class="img-fluid">
              </div>
              <div class="room-image room-image-shadow">

              </div>
            </div>
            <div class="offset-lg-1 col-lg-5">
              <div class="room-type">
                <p><a href="" class="title-hover h3">Superior Ocean Front</a><br>
                  <i class="fas fa-caret-up"></i><i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i></p>
                <p class="text-secondary">
                  Superior Ocean Front rooms come with direct views over the ocean and are equipped with 2 beds or 1
                  king size bed, a sofa, air conditioning, alarm clock and a safety deposit box.
                </p>
                <p class="text-secondary">Prices start at:<b> $70</b> per night</p>
                <p> <a href="" class="btn btn-info details">VIEW DETAILS</a></p>
              </div>
            </div>
          </div>
        </div>

      </div>
      <br><br><br><br><br>
      <div class="row">
        <div class="offset-lg-1 col-lg-10 bg-white">
          <div class="row">
            <div class="col-lg-6 room-info">
              <div class="room-image img">
                <img src="{{asset('images/rooms.jpg')}}" class="img-fluid">
              </div>
              <div class="room-image room-image-shadow">

              </div>
            </div>
            <div class="offset-lg-1 col-lg-5">
              <div class="room-type">
                <p><a href="" class="title-hover h3">Classic Double Room</a><br>
                  <i class="fas fa-caret-up"></i><i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i></p>
                <p class="text-secondary">
                  With modern style and furniture, the room is equipped with 2 double beds or one king size bed, mini
                  bar, sofa and terrace or balcony where you can enjoy the beautiful views.
                </p>
                <p class="text-secondary">Prices start at:<b> $40</b> per night</p>
                <p> <a href="" class="btn btn-info details">VIEW DETAILS</a></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>

  {{-- Facility --}}


  <div class="row">
    <div class="col-lg-12">

      <div class="row">
        <div class="offset-lg-1 col-lg-11 text-left title">
          <h6 class="text-secondary">— Everything for your unforgettable stay!</h6>
          <h3 class="font-weight-bold text-header-color">BlueVivid Amenities</h3>
        </div>
      </div>
      <div class="row ">
        <div class="offset-lg-1 col-lg-10 bg-white facility-slide">
          <div class="row">
            <div class="col-lg-6 facility">
              <div class="facility-box facility-image">
                <img src="{{asset('images/rooms.jpg')}}" class="img-fluid">
              </div>
              <div class="facility-box facility-box-shadow">

              </div>
            </div>
            <div class="offset-lg-1 col-lg-5">
              <div class="room-type">
                <p><a href="" class="title-hover h3">Suite Royal Level</a></p>
                <p class="text-secondary">
                  Royal Level Suites are very spacious and equipped with modern furniture, feature a king size bed, a
                  sofa, living room, whirlpool bathtub and balcony.
                </p>
                <p class="text-secondary">Prices start at: <b>$110</b> per night</p>
                <div class="underline-hover">
                  <p><a href="" class="read-more ">READ MORE</a></p>
                  <div class="read-more-underline"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  {{-- recent news --}}

  <div class="row recent">
    <div class="col-lg-12">

      <div class="row">
        <div class="col-lg-12 text-center title">
          <h6 class="text-secondary">Recent news from our blog</h6>
          <h3 class="font-weight-bold text-header-color">Recent News <p>
              <i class="fas fa-caret-up"></i><i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i></p>
          </h3>
        </div>
      </div>
      <div class="row">
        <div class="offset-lg-1 col-lg-10 bg-white recent-head">
          <div class="row">
            <div class="col-lg-5 news-info">
              <div class="news-image news-recent-image">
                <img src="{{asset('images/rooms.jpg')}}" class="img-fluid">
              </div>
              <div class="news-image news-image-shadow">

              </div>
            </div>
            <div class="offset-lg-1 col-lg-6">
              <div class="news-type">
                <p><a href="" class="title-hover h3">September in Kathmandu</a></p>
                <p class="text-secondary">
                  September is a great time with a soft weather and lots of new activities. Moreover, we decrease our
                  rates for rooms in a hotel for September, so you can enjoy the place and the price! Contact our team
                  and we will direct you.
                </p>
                <div class="underline-hover">
                  <p><a href="" class="read-more">CONTINUE READING</a></p>
                  <div class="underline"></div>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
      <br><br><br><br>
      <div class="row">
        <div class="offset-lg-1 col-lg-10 bg-white recent-head">
          <div class="row">
            <div class="col-lg-5 news-info">
              <div class="news-image news-recent-image">
                <img src="{{asset('images/rooms.jpg')}}" class="img-fluid">
              </div>
              <div class="news-image news-image-shadow">

              </div>
            </div>
            <div class="offset-lg-1 col-lg-6">
              <div class="room-type">
                <p><a href="" class="title-hover h3">Get a Fresh Spa and Breakfast Package</a></p>
                <p class="text-secondary">
                  Looking for some fresh packages in Ciestra hotel? We have some special propositions you will be happy
                  to take. Get a package at the discounted price, and have it whatever you want – on a private island,
                  or at home.
                </p>
                <div class="underline-hover">
                  <p><a href="" class="read-more">CONTINUE READING</a></p>
                  <div class="underline"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <br><br><br><br>
      <div class="row">
        <div class="offset-lg-1 col-lg-10 bg-white recent-head">
          <div class="row">
            <div class="col-lg-5 news-info">
              <div class="news-image news-recent-image">
                <img src="{{asset('images/rooms.jpg')}}" class="img-fluid">
              </div>
              <div class="news-image news-image-shadow">

              </div>
            </div>
            <div class="offset-lg-1 col-lg-6">
              <div class="room-type">
                <p><a href="" class="title-hover h3">Live Music Concerts at BlueVivid</a></p>
                <p class="text-secondary">
                  Enjoy live musical performances daily at the Cold wave bar at Ciestra hotel. Each week we invite new
                  bands to the Bandshell beach and and Jimmy’ Curgyr band – to the beach Restaurant at our Beach Resort!
                </p>

                <div class="underline-hover">
                  <p><a href="" class="read-more">CONTINUE READING</a></p>
                  <div class="underline"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
  {{-- testimonial --}}
  <div class="row bg-white testimonial">
    <div class="col-lg-12">
      <div class="row">
        <div class="col-lg-12 text-center title">
          <h6 class="text-secondary">What our guests say</h6>
          <h3 class="font-weight-bold text-header-color">Testimonials <p>
              <i class="fas fa-caret-up"></i><i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i></p>
          </h3>
        </div>
      </div>
      <div class="row">
        <div class="offset-lg-1 col-lg-11">

          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <i class="fas fa-arrow-left"></i>

            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <i class="fas fa-arrow-right"></i>

            </a>

            <ol class="carousel-indicators">

              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"><i
                  class="far fa-circle"></i></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"><i class="far fa-circle"></i></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"><i class="far fa-circle"></i></li>

            </ol>

            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="offset-lg-1 col-lg-5 testimonial-slide">
                    <div class="testimonial-slide-text testimonial-text">
                      <span class="quote"> <i class="fas fa-quote-left"></i></span>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, tenetur corporis atque tempore
                        neque
                        quasi dolorum velit dignissimos hic autem?</p>
                    </div>
                    <div class="testimonial-slide-text testimonial-slide-text-shadow">

                      <span class="testimonial-name">— Jenifer Valles</span>

                    </div>
                  </div>
                  <div class="col-lg-5 testimonial-slide">
                    <div class="testimonial-slide-text testimonial-text">
                      <span class="quote"> <i class="fas fa-quote-left"></i></span>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere sapiente libero beatae,
                        numquam
                        voluptate earum nulla consequuntur eum illum mollitia.</p>
                    </div>
                    <div class="testimonial-slide-text testimonial-slide-text-shadow">
                      <span class="testimonial-name">— Jenifer Valles</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="offset-lg-1 col-lg-5 testimonial-slide">
                    <div class="testimonial-slide-text testimonial-text">
                      <span class="quote"> <i class="fas fa-quote-left"></i></span>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, tenetur corporis atque tempore
                        neque
                        quasi dolorum velit dignissimos hic autem?</p>
                    </div>
                    <div class="testimonial-slide-text testimonial-slide-text-shadow"><span class="testimonial-name">—
                        Jenifer Valles</span></div>
                  </div>
                  <div class="col-lg-5 testimonial-slide">
                    <div class="testimonial-slide-text testimonial-text">
                      <span class="quote"> <i class="fas fa-quote-left"></i></span>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere sapiente libero beatae,
                        numquam
                        voluptate earum nulla consequuntur eum illum mollitia.</p>
                    </div>
                    <div class="testimonial-slide-text testimonial-slide-text-shadow"><span class="testimonial-name">—
                        Jenifer Valles</span></div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="offset-lg-1 col-lg-5 testimonial-slide">
                    <div class="testimonial-slide-text testimonial-text">
                      <span class="quote"> <i class="fas fa-quote-left"></i></span>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, tenetur corporis atque tempore
                        neque
                        quasi dolorum velit dignissimos hic autem?</p>
                    </div>
                    <div class="testimonial-slide-text testimonial-slide-text-shadow"><span class="testimonial-name">—
                        Jenifer Valles</span></div>
                  </div>
                  <div class="col-lg-5 testimonial-slide">
                    <div class="testimonial-slide-text testimonial-text">
                      <span class="quote"> <i class="fas fa-quote-left"></i></span>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere sapiente libero beatae,
                        numquam
                        voluptate earum nulla consequuntur eum illum mollitia.</p>
                    </div>
                    <div class="testimonial-slide-text testimonial-slide-text-shadow"><span
                        class="testimonial-name">—Jenifer Valles</span></div>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="offset-lg-1 col-lg-10">
      <div class="row">
        <div class="offset-lg-1 col-lg-10 text-left title">
          <h6 class="text-secondary">— Check our landscapes</h6>
          <h3 class="font-weight-bold text-header-color">BlueVivid Instagram Feed <a href=""
              class="btn btn-info details float-right">FOLLOW US</a></h3>
        </div>

      </div>
      <div class="row insta">
        <div class="col-lg-2">
          <img src="{{asset('images/car.jpg')}}" class="img-fluid">
        </div>
        <div class="col-lg-2">
          <img src="{{asset('images/bed.jpg')}}" class="img-fluid">
        </div>
        <div class="col-lg-2">
          <img src="{{asset('images/pool.jpg')}}" class="img-fluid">
        </div>
        <div class="col-lg-2">
          <img src="{{asset('images/car.jpg')}}" class="img-fluid">
        </div>
        <div class="col-lg-2">
          <img src="{{asset('images/bed.jpg')}}" class="img-fluid">
        </div>
        <div class="col-lg-2">
          <img src="{{asset('images/car.jpg')}}" class="img-fluid">
        </div>
      </div>

    </div>
  </div>
  {{-- close --}}
</div>
@endsection