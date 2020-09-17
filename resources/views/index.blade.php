@extends('layout.app')

@section('content')
    <main id="main">

      <section class="section1">
        <div class="container">
          <div class="card shadow card1" >
            <div class="card-body">
              <!-- subtitle -->
              <div class="form-inline">
                <span> step1</span>
                &nbsp;&nbsp;&nbsp;
                <h5><strong> Introduction to PHP </strong></h5>
              </div>

              <!-- images -->
              <div class="container my-5">
                <!-- fist row -->
                <div class="row">
                  <div class="col-md-4">
                    <a href="{{url('/php#phpsection1')}}">
                      <img src="{{asset('images/download.jpg')}}" width="200" height="150">
                      <p> 1. テスト </p>
                    </a>
                  </div>

                  <div class="col-md-4">
                    <a href="{{url('/php#phpsection2')}}">
                      <img src="{{asset('images/download (2).jpg')}}" width="200" height="150">
                      <p> 2. テスト </p>
                    </a>
                  </div>

                  <div class="col-md-4">
                    <a href="{{url('/php#phpsection3')}}">
                      <img src="{{asset('images/download (1).jpg')}}" width="200" height="150">
                      <p> 3. テスト </p>
                    </a>
                  </div>
                </div>              
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section2">
        <div class="container">
          <div class="card shadow card2">
            <div class="card-body">
              <!-- subtitle -->
              <div class="form-inline">
                <span> step2</span>
                &nbsp;&nbsp;&nbsp;
                <h5><strong> Introduction to Laravel </strong></h5>
              </div>

              <!-- images -->
              <div class="container my-5">
                <!-- fist row -->
                <div class="row">
                  <div class="col-md-4">
                    <a href="{{url('/laravel#laravelsection1')}}">
                      <img src="{{asset('images/download.jpg')}}" width="200" height="150">
                      <p> 1. テスト </p>
                    </a>
                  </div>

                  <div class="col-md-4">
                    <a href="{{url('/laravel#laravelsection2')}}">
                      <img src="{{asset('images/download.png')}}" width="200" height="150">
                      <p> 2. テスト </p>
                    </a>
                  </div>

                  <div class="col-md-4">
                    <a href="{{url('/laravel#laravelsection3')}}">
                      <img src="{{asset('images/download (1).jpg')}}" width="200" height="150">
                      <p> 3. テスト </p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section3">
        <div class="container">
          <div class="card shadow card3">
            <div class="card-body">
              <!-- subtitle -->
              <div class="form-inline">
                <span> step3</span>
                &nbsp;&nbsp;&nbsp;
                <h5><strong> Introduction to AWS </strong></h5>
              </div>

              <!-- images -->
              <div class="container my-5">
                <!-- fist row -->
                <div class="row">
                  <div class="col-md-4">
                    <a href="{{url('/aws#awssection1')}}">
                      <img src="{{asset('images/download.jpg')}}" width="200" height="150">
                      <p> 1. テスト </p>
                    </a>
                  </div>

                  <div class="col-md-4">
                    <a href="{{url('/aws#awssection2')}}">
                      <img src="{{asset('images/download.png')}}" width="200" height="150">
                      <p> 2. テスト </p>
                    </a>
                  </div>

                  <div class="col-md-4">
                    <a href="{{url('/aws#awssection3')}}">
                      <img src="{{asset('images/download (1).jpg')}}" width="200" height="150">
                      <p> 3. テスト </p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="container page">
        <a href="{{url('/php')}}" class="btn float-right">Next <span class="badge badge-dark" ></span>
        </a>
      </div>
    </main>
@endsection
