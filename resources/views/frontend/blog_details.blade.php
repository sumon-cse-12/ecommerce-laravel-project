@extends('frontend.layouts.app')
@section('main-content')

<section class="section-9 pt-4">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
            <div class="blog-categories">
                Blog category
                <hr>
                <div class="blog-categories-list">
                    <div>
                        <a href="#">Hair Oil</a>
                    </div>
                    <div>
                        <a href="#">Baby Oil</a>
                    </div>
                    <div>
                        <a href="#">Body Oil</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="blog-details-sec-wrapper">
                <div class="blog-image-sec">
                    <img src="{{asset('uploads/'.$blog->image)}}" class="img-fluid" alt="">
                </div>
                <hr>
                <div class="blog-detials-content-sec">
                    <div class="blog-published-sec d-flex">
                        <div class="blog-published-by">
                            <i class="fas fa-user"></i>  Admin
                        </div>
                        <div class="blog-published-date mx-5">
                            <i class="fas fa-calendar-alt"></i> {{isset($blog->created_at)?$blog->created_at:''}}
                        </div>
                    </div>
                    <div class="blog-title">
                        @php
                            $title = strip_tags($blog->title);
                        @endphp
                        {{$title}}
                    </div>
                    <div class="blog-des-sec">
                        @php
                            $description = strip_tags($blog->description);
                        @endphp
                        {{ $description}}
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</section>
@endsection
@section('extra-js')
@endsection