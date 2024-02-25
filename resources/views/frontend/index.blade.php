@extends('frontend.layouts.app')
@section('main-content')
<section class="section-1">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- <img src="images/carousel-1.jpg" class="d-block w-100" alt=""> -->

                <picture>
                    <source media="(max-width: 799px)" srcset="{{asset('frontend/images/carousel-1-m.jpg')}}" />
                    <source media="(min-width: 800px)" srcset="{{asset('frontend/images/carousel-1.jpg')}}" />
                    <img src="{{asset('frontend/images/carousel-1.jpg')}}" alt="" />
                </picture>

                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3">
                        <h1 class="display-4 text-white mb-3">Kids Fashion</h1>
                        <p class="mx-md-5 px-5">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                        <a class="btn btn-outline-light py-2 px-4 mt-3" href="#">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                
                <picture>
                    <source media="(max-width: 799px)" srcset="{{asset('frontend/images/carousel-2-m.jpg')}}" />
                    <source media="(min-width: 800px)" srcset="{{asset('frontend/images/carousel-2.jpg')}}" />
                    <img src="{{asset('frontend/images/carousel-2.jpg')}}" alt="" />
                </picture>

                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3">
                        <h1 class="display-4 text-white mb-3">Womens Fashion</h1>
                        <p class="mx-md-5 px-5">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                        <a class="btn btn-outline-light py-2 px-4 mt-3" href="#">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <!-- <img src="images/carousel-3.jpg" class="d-block w-100" alt=""> -->

                <picture>
                    <source media="(max-width: 799px)" srcset="{{asset('frontend/images/carousel-3-m.jpg')}}" />
                    <source media="(min-width: 800px)" srcset="{{asset('frontend/images/carousel-3.jpg')}}" />
                    <img src="{{asset('frontend/images/carousel-2.jpg')}}" alt="" />
                </picture>

                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3">
                        <h1 class="display-4 text-white mb-3">Shop Online at Flat 70% off on Branded Clothes</h1>
                        <p class="mx-md-5 px-5">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                        <a class="btn btn-outline-light py-2 px-4 mt-3" href="#">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section class="section-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="box shadow-lg">
                    <div class="fa icon fa-check text-primary m-0 mr-3"></div>
                    <h2 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>                    
            </div>
            <div class="col-lg-3 ">
                <div class="box shadow-lg">
                    <div class="fa icon fa-shipping-fast text-primary m-0 mr-3"></div>
                    <h2 class="font-weight-semi-bold m-0">Free Shipping</h2>
                </div>                    
            </div>
            <div class="col-lg-3">
                <div class="box shadow-lg">
                    <div class="fa icon fa-exchange-alt text-primary m-0 mr-3"></div>
                    <h2 class="font-weight-semi-bold m-0">14-Day Return</h2>
                </div>                    
            </div>
            <div class="col-lg-3 ">
                <div class="box shadow-lg">
                    <div class="fa icon fa-phone-volume text-primary m-0 mr-3"></div>
                    <h2 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>                    
            </div>
        </div>
    </div>
</section>
<section class="section-3">
    <div class="container">
        <div class="section-title">
            <h2>Categories</h2>
        </div>           
        <div class="row pb-3">

            @if (isset($categories) && $categories)
                @foreach ($categories as $category)
                <div class="col-lg-3">
                    <a href="{{route('front.shop',$category->slug)}}">
                        <div class="cat-card">
                            <div class="left">
                                <img src="{{asset('uploads/'.$category->image)}}" alt="" class="img-fluid">
                            </div>
                            <div class="right">
                                <div class="cat-data">
                                    <h2>{{isset($category) && $category->name?$category->name:''}}</h2>
                                    <p>100 Products</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            @endif
       
        </div>
    </div>
</section>

<section class="section-4 pt-5">
    <div class="container">
        <div class="section-title">
            <h2>Featured Products</h2>
        </div>    
        <div class="row pb-3">
            @if (isset($feature_products) && $feature_products)
            @foreach ($feature_products as $feature_product)
            <div class="col-md-3">
                <div class="product-card-sec">
                        <div class="product-image-sec">
                            @if(isset($feature_product->image) && $feature_product->image)
                            @php
                                $images = json_decode($feature_product->image);
                                $singleImage = $images[0];
                            @endphp
                           
                            <a href="{{route('front.product',[$feature_product->slug])}}" class="product-img"><img class="img-fluid product-img zoom-effect" src="{{asset('uploads/'.$singleImage->image)}}" alt=""></a>
                            @endif
                            <div class="add-to-cart-section d-none">
                                <div class="add-to-cart-sec">
                                    <a class="" href="javascript:void(0);" onclick="addToCart({{$feature_product->id}});">
                                        <i class="fa fa-shopping-cart"></i> Add To Cart
                                    </a>
                                </div>
                               </div>
                        </div>
                        <div class="product-content-sec">
                            <div class="product-title-sec">
                                {{isset($feature_product) && $feature_product->name?$feature_product->name:''}}
                            </div>
                            <div class="product-price-sec">
                                {{isset($feature_product) && $feature_product->discount_price?$feature_product->discount_price:''}}
                            </div>
                            <span class="h6 text-underline"><del>{{isset($feature_product) && $feature_product->regular_price?$feature_product->regular_price:''}}</del></span>
                            <div class="stock-section">
                                In Stock
                            </div>
                            <div class="buy-now-button">
                                <a href="#" class="buy-now-btn">Buy Now</a>
                            </div>
                       
                        </div>
                </div>                                               
            </div>      
            @endforeach
            @endif     
   
       
        </div>
    </div>
</section>

<section class="section-4 pt-5">
    <div class="container">
        <div class="section-title">
            <h2>Latest Produsts</h2>
        </div>    
        <div class="row pb-3">
            @if ($best_selling_products->isNotEmpty())
                @foreach ($best_selling_products as $best_selling_product)
                <div class="col-md-3">
                    <div class="product-card-sec">
                    <div class="product-image-sec">
              
                           @if (isset($best_selling_product) && $best_selling_product)
                           @php
                           $images = json_decode($best_selling_product->image);
                           $singleImage = $images[0];
                            @endphp
                           <a href="" class="product-img"><img class="img-fluid product-img zoom-effect" src="{{asset('uploads/'. $singleImage->image)}}" alt=""></a>
                           @endif
                                         
    
                            <div class="product-action d-none">
                                <a class="btn btn-dark" href="javascript:void(0);" onclick="addToCart({{$best_selling_product->id}});">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                              
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">{{isset($best_selling_product) && $best_selling_product->name?$best_selling_product->name:''}}</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>{{isset($best_selling_product) && $best_selling_product->discount_price?$best_selling_product->discount_price:''}}</strong></span>
                                <span class="h6 text-underline"><del>{{isset($best_selling_product) && $best_selling_product->regular_price?$best_selling_product->regular_price:''}}</del></span>
                            </div>
                        </div>                        
                    </div>   
                    <div class="product-content-sec">
                        <div class="product-title-sec">
                            {{isset($best_selling_product) && $best_selling_product->name?$best_selling_product->name:''}}
                        </div>
                        <div class="product-price-sec">
                            {{isset($best_selling_product) && $best_selling_product->discount_price?$best_selling_product->discount_price:''}}
                        </div>
                        <span class="h6 text-underline"><del>{{isset($best_selling_product) && $best_selling_product->regular_price?$best_selling_product->regular_price:''}}</del></span>
                        <div class="stock-section">
                            In Stock
                        </div>
                        <div class="buy-now-button">
                            <a href="#" class="buy-now-btn">Buy Now</a>
                        </div>
                   
                    </div>                                            
                </div>       
                </div>       
                @endforeach
            @endif
        
              
        </div>
    </div>
</section>
<section>
    <div class="blog-sec-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-title">
                        Our Blog
                    </div>
                </div>
            </div>
            <div class="row">
                @if (isset($blogs) && $blogs)
                    @foreach ($blogs as $blog)
                    <div class="col-md-4">
                        <div class="blog-card">
                            <a href="{{route('front.blog.details',['url'=>$blog->url])}}" class="blog-card-contnet">
                                <div class="blog-image">
                                    <img src="{{asset('uploads/1697477745_13.jpg')}}" class="blog-img zoom-effect" alt="">
                                </div>
                                <div class="blog-content">
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
                                            {{substr($title, 0, 40)}}
                                        </div>
                                        <div class="blog-des-sec">
                                            @php
                                                $description = strip_tags($blog->description);
                                            @endphp
                                            {{substr($description, 0, 70)}}
                                        </div>
                              
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                @endif
               
            </div>
        </div>
    </div>
</section>
@endsection