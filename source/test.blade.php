@extends('_layouts.master')

@section('body')

<link rel="stylesheet" href="/assets/sf5/core/css/core.css">
<link rel="stylesheet" href="/assets/sf5/core/css/utility.full.css">

<!--testing alert-->
<link rel="stylesheet" href="/assets/sf5/component/icons/css/icons.css">
<link rel="stylesheet" href="/assets/sf5/component/alerts/css/alerts.css">
<script src="/assets/sf5/component/alerts/js/alerts.js"></script>


<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class = "sf-alert sf-alert--standart">
              <div class = "sf-alert-icon">
                <i class="sf-icon">error</i>
              </div>
              <div class = "sf-alert-content">
                  <p>
                      <span class="sf-alert-content--title">We’ve just released a new feature</span>
                      
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur, ipsum similique veniam.
                  </p>
              
              <p class = "sf-alert-content--footer">
                <a href="#">Learn more</a>
                <a href="#">View changes  <i class="sf-icon sf-icon-medium">arrow_forward</i> </a>
              </p>
              </div>
              
              <div class = "sf-alert-close">
                <button>
                  <i class="sf-icon sf-icon-solid">close</i>      
                  </button>
              </div>
          </div>
</section>
@endsection
