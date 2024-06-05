@extends('layouts.app')
@section('content')

<div class="about-section">
    <h1>About</h1>
    <br>
    <p>Sunshine Shoes Care adalah pilihan utama bagi para pecinta sepatu yang peduli terhadap penampilan dan
        perawatan sepatu mereka. Sebagai pemimpin dalam industri perawatan sepatu, kami menghadirkan rangkaian
        produk berkualitas tinggi yang dirancang khusus untuk menjaga kebersihan, keharuman, dan keindahan sepatu Anda.
        Kami memahami bahwa setiap pasangan sepatu adalah investasi, bukan hanya sebagai penunjang penampilan, tetapi
        juga sebagai cerminan dari kepribadian dan gaya hidup Anda. Itulah mengapa kami berkomitmen untuk menyediakan
        solusi terbaik untuk memastikan bahwa sepatu Anda selalu tampak dan terasa seperti baru, setiap saat.</p>
  </div>

  <h2 style="text-align:center">Our Team</h2>
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="{{ Vite::asset('/resources/images/shoe-parfume.png') }}" alt="" style="width:100%">
        <br>
        <div class="container">
          <h2>Jane Doe</h2>
          <p class="title">CEO & Founder</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="{{ Vite::asset('/resources/images/shoe-parfume.png') }}" alt="" style="width:100%">
        <br>
        <div class="container">
          <h2>Mike Ross</h2>
          <p class="title">Art Director</p>
        </div>
      </div>
    </div>

    <div class="column">
        <div class="card">
          <img src="{{ Vite::asset('/resources/images/shoe-parfume.png') }}" alt="" style="width:100%">
          <br>
          <div class="container">
            <h2>Mike Ross</h2>
            <p class="title">Art Director</p>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <img src="{{ Vite::asset('/resources/images/shoe-parfume.png') }}" alt="" style="width:100%">
          <br>
          <div class="container">
            <h2>Mike Ross</h2>
            <p class="title">Art Director</p>
          </div>
        </div>
      </div>

    <div class="column">
      <div class="card">
        <img src="{{ Vite::asset('/resources/images/shoe-parfume.png') }}" alt="" style="width:100%">
        <br>
        <div class="container">
          <h2>John Doe</h2>
          <p class="title">Designer</p>
        </div>
      </div>
    </div>
  </div>

  <br><br>

<section class="home-testimonial">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center testimonial-pos">
            <div class="col-md-12 pt-4 d-flex justify-content-center">
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <h2>Testimoni</h2>
            </div>
        </div>
        <section class="home-testimonial-bottom">
            <div class="container testimonial-inner">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4 style-3">
                        <div class="tour-item ">
                            <div class="tour-desc bg-white">
                                <div class="tour-text color-grey-3 text-center">&ldquo;At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.&rdquo;</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/6625914/pexels-photo-6625914.jpeg" alt=""></div>
                                <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                <div class="link-position d-flex justify-content-center">Student</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 style-3">
                        <div class="tour-item ">
                            <div class="tour-desc bg-white">
                                <div class="tour-text color-grey-3 text-center">&ldquo;At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.&rdquo;</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                <div class="link-position d-flex justify-content-center">Student</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 style-3">
                        <div class="tour-item ">
                            <div class="tour-desc bg-white">
                                <div class="tour-text color-grey-3 text-center">&ldquo;At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.&rdquo;</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/4946604/pexels-photo-4946604.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                <div class="link-position d-flex justify-content-center">Student</div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
</section>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
</div>
@endsection
