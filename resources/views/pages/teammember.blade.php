@extends('layouts.pages')

@section('content')

@php $team = $details[0]; @endphp

<div class="team__detail-page pt-5">
    <!-- <span class="line-1"></span>
    <span class="line-2"></span>
    <span class="line-3"></span> -->


    <!-- Team area start -->
    <section class="team__detail mt-5">
      <div class="container line mt-130 pb-140">
        <div class="line-3"></div>
        <div class="row">
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8 offset-lg-0 offset-md-2">
            <div class="team__member-img">
              <img src="{{ asset('assets/imgs/team/'.$team->img) }}" alt="{{ $team->name }}">
            </div>
          </div>
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
            <div class="sec-title-wrapper pt-120">
              <h2 class="team__member-name-7 animation__char_come">{{  $team->name}}</h2>
              <h3 class="team__member-role-7 animation__char_come">{{  $team->designation}}</h3>
              <p>{!!  $team->content !!}</p>
            </div>
            <div class="team__member-social">
              <h4 class="work-title">Follow :</h4>
              <ul>
                <li><a href="{{ $team->linkedin }}" target="_blank"><span><i class="fa-brands fa-linkedin"></i></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Team area end -->

@endsection