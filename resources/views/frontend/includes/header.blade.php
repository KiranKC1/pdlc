<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Smart Glass Nepal</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Fav-->
    <link rel="shortcut icon" href="../../favicon.ico">

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat%3A700">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto%3A700%2C300">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Raleway%3A400%2C800%2C500">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/bootstrap.min.css')}}">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('assets/vendor/icon-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/icon-etlinefont/style.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/unify.css')}}">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{asset('assets/vendor/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/revolution-slider/revolution/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/revolution-slider/revolution/css/navigation.css')}}">
    <link rel="stylesheet" href="{{asset('assets/revolution/css/style.css')}}">
  </head>

@if ($errors->any())
<div class="container">
  <div class="row">
    <div>
      <div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger alert-dismissible fade show" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out; z-index: 1031; bottom: 20px; right: 10px; animation-iteration-count: 1;">
        <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="h5">
          <i class="fa fa-minus-circle"></i>
          Oh snap!
        </h4> 
        @foreach ($errors->all() as $error)
        <p>{!! $error !!}</p>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endif
@if (Session::has('success'))
<div class="container">
    <div class="row">
      <div>
        <div data-notify="container" class="col-xs-11 col-sm-4 alert alert-success alert-dismissible fade show" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out; z-index: 1031; bottom: 20px; right: 10px; animation-iteration-count: 1;">
          <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          <h4 class="h5">
            <i class="fa fa-check-circle"></i>
            Success
          </h4>
          <p>{{Session::get('success')}}</p>              
        </div>
      </div>
    </div>
</div>
@endif