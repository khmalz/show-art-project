@extends('layouts.main')

@section('content')
<div class="container py-5">
   <div class="row">

       <div class="col-lg-3">
           <h1 class="h2 pb-4">Categories</h1>
           <ul class="list-unstyled templatemo-accordion">
               <li class="pb-3">
                   <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="{{ url("#") }}">
                       Gender
                       <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                   </a>
                   <ul class="collapse show list-unstyled pl-3">
                       <li><a class="text-decoration-none" href="{{ url("#") }}">Men</a></li>
                       <li><a class="text-decoration-none" href="{{ url("#") }}">Women</a></li>
                   </ul>
               </li>
               <li class="pb-3">
                   <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="{{ url("#") }}">
                       Sale
                       <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                   </a>
                   <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                       <li><a class="text-decoration-none" href="{{ url("#") }}">Sport</a></li>
                       <li><a class="text-decoration-none" href="{{ url("#") }}">Luxury</a></li>
                   </ul>
               </li>
               <li class="pb-3">
                   <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="{{ url("#") }}">
                       Product
                       <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                   </a>
                   <ul id="collapseThree" class="collapse list-unstyled pl-3">
                       <li><a class="text-decoration-none" href="{{ url("#") }}">Bag</a></li>
                       <li><a class="text-decoration-none" href="{{ url("#") }}">Sweather</a></li>
                       <li><a class="text-decoration-none" href="{{ url("#") }}">Sunglass</a></li>
                   </ul>
               </li>
           </ul>
       </div>

       <div class="col-lg-9">
           <div class="row">
               <div class="col-md-6">
                   <ul class="list-inline shop-top-menu pb-3 pt-1">
                       <li class="list-inline-item">
                           <a class="h3 text-dark text-decoration-none mr-3" href="{{ url("#") }}">All</a>
                       </li>
                       <li class="list-inline-item">
                           <a class="h3 text-dark text-decoration-none mr-3" href="{{ url("#") }}">Men's</a>
                       </li>
                       <li class="list-inline-item">
                           <a class="h3 text-dark text-decoration-none" href="{{ url("#") }}">Women's</a>
                       </li>
                   </ul>
               </div>
               <div class="col-md-6 pb-4">
                   <div class="d-flex">
                       <select class="form-control">
                           <option>Featured</option>
                           <option>A to Z</option>
                           <option>Item</option>
                       </select>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-md-4">
                   <div class="card mb-4 product-wap rounded-0">
                       <div class="card rounded-0">
                           <img class="card-img rounded-0 img-fluid" src="{{ asset("/assets/img/shop_01.jpg") }}">
                           <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                               <ul class="list-unstyled">
                                   <li><a class="btn btn-success text-white" href="{{ url("shop-single.html") }}"><i class="far fa-heart"></i></a></li>
                                   <li><a class="btn btn-success text-white mt-2" href="{{ url("shop-single.html") }}"><i class="far fa-eye"></i></a></li>
                                   <li><a class="btn btn-success text-white mt-2" href="{{ url("shop-single.html") }}"><i class="fas fa-cart-plus"></i></a></li>
                               </ul>
                           </div>
                       </div>
                       <div class="card-body">
                           <a href="{{ url("shop-single.html") }}" class="h3 text-decoration-none">Oupidatat non</a>
                           <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                               <li>M/L/X/XL</li>
                               <li class="pt-2">
                                   <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                               </li>
                           </ul>
                           <ul class="list-unstyled d-flex justify-content-center mb-1">
                               <li>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-muted fa fa-star"></i>
                                   <i class="text-muted fa fa-star"></i>
                               </li>
                           </ul>
                           <p class="text-center mb-0">$250.00</p>
                       </div>
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="card mb-4 product-wap rounded-0">
                       <div class="card rounded-0">
                           <img class="card-img rounded-0 img-fluid" src="{{ asset("/assets/img/shop_02.jpg") }}">
                           <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                               <ul class="list-unstyled">
                                   <li><a class="btn btn-success text-white" href="{{ url("shop-single.html") }}"><i class="far fa-heart"></i></a></li>
                                   <li><a class="btn btn-success text-white mt-2" href="{{ url("shop-single.html") }}"><i class="far fa-eye"></i></a></li>
                                   <li><a class="btn btn-success text-white mt-2" href="{{ url("shop-single.html") }}"><i class="fas fa-cart-plus"></i></a></li>
                               </ul>
                           </div>
                       </div>
                       <div class="card-body">
                           <a href="{{ url("shop-single.html") }}" class="h3 text-decoration-none">Oupidatat non</a>
                           <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                               <li>M/L/X/XL</li>
                               <li class="pt-2">
                                   <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                               </li>
                           </ul>
                           <ul class="list-unstyled d-flex justify-content-center mb-1">
                               <li>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-muted fa fa-star"></i>
                                   <i class="text-muted fa fa-star"></i>
                               </li>
                           </ul>
                           <p class="text-center mb-0">$250.00</p>
                       </div>
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="card mb-4 product-wap rounded-0">
                       <div class="card rounded-0">
                           <img class="card-img rounded-0 img-fluid" src="{{ asset("/assets/img/shop_03.jpg") }}">
                           <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                               <ul class="list-unstyled">
                                   <li><a class="btn btn-success text-white" href="{{ url("shop-single.html") }}"><i class="far fa-heart"></i></a></li>
                                   <li><a class="btn btn-success text-white mt-2" href="{{ url("shop-single.html") }}"><i class="far fa-eye"></i></a></li>
                                   <li><a class="btn btn-success text-white mt-2" href="{{ url("shop-single.html") }}"><i class="fas fa-cart-plus"></i></a></li>
                               </ul>
                           </div>
                       </div>
                       <div class="card-body">
                           <a href="{{ url("shop-single.html") }}" class="h3 text-decoration-none">Oupidatat non</a>
                           <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                               <li>M/L/X/XL</li>
                               <li class="pt-2">
                                   <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                               </li>
                           </ul>
                           <ul class="list-unstyled d-flex justify-content-center mb-1">
                               <li>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-muted fa fa-star"></i>
                                   <i class="text-muted fa fa-star"></i>
                               </li>
                           </ul>
                           <p class="text-center mb-0">$250.00</p>
                       </div>
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="card mb-4 product-wap rounded-0">
                       <div class="card rounded-0">
                           <img class="card-img rounded-0 img-fluid" src="{{ asset("/assets/img/shop_04.jpg") }}">
                           <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                               <ul class="list-unstyled">
                                   <li><a class="btn btn-success text-white" href="{{ url("shop-single.html") }}"><i class="far fa-heart"></i></a></li>
                                   <li><a class="btn btn-success text-white mt-2" href="{{ url("shop-single.html") }}"><i class="far fa-eye"></i></a></li>
                                   <li><a class="btn btn-success text-white mt-2" href="{{ url("shop-single.html") }}"><i class="fas fa-cart-plus"></i></a></li>
                               </ul>
                           </div>
                       </div>
                       <div class="card-body">
                           <a href="{{ url("shop-single.html") }}" class="h3 text-decoration-none">Oupidatat non</a>
                           <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                               <li>M/L/X/XL</li>
                               <li class="pt-2">
                                   <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                               </li>
                           </ul>
                           <ul class="list-unstyled d-flex justify-content-center mb-1">
                               <li>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-muted fa fa-star"></i>
                                   <i class="text-muted fa fa-star"></i>
                               </li>
                           </ul>
                           <p class="text-center mb-0">$250.00</p>
                       </div>
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="card mb-4 product-wap rounded-0">
                       <div class="card rounded-0">
                           <img class="card-img rounded-0 img-fluid" src="{{ asset("/assets/img/shop_05.jpg") }}">
                           <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                               <ul class="list-unstyled">
                                   <li><a class="btn btn-success text-white" href="{{ url("shop-single.html") }}"><i class="far fa-heart"></i></a></li>
                                   <li><a class="btn btn-success text-white mt-2" href="{{ url("shop-single.html") }}"><i class="far fa-eye"></i></a></li>
                                   <li><a class="btn btn-success text-white mt-2" href="{{ url("shop-single.html") }}"><i class="fas fa-cart-plus"></i></a></li>
                               </ul>
                           </div>
                       </div>
                       <div class="card-body">
                           <a href="{{ url("shop-single.html") }}" class="h3 text-decoration-none">Oupidatat non</a>
                           <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                               <li>M/L/X/XL</li>
                               <li class="pt-2">
                                   <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                               </li>
                           </ul>
                           <ul class="list-unstyled d-flex justify-content-center mb-1">
                               <li>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-muted fa fa-star"></i>
                                   <i class="text-muted fa fa-star"></i>
                               </li>
                           </ul>
                           <p class="text-center mb-0">$250.00</p>
                       </div>
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="card mb-4 product-wap rounded-0">
                       <div class="card rounded-0">
                           <img class="card-img rounded-0 img-fluid" src="{{ asset("/assets/img/shop_06.jpg") }}">
                           <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                               <ul class="list-unstyled">
                                   <li><a class="btn btn-success text-white" href="{{ url("shop-single.html") }}"><i class="far fa-heart"></i></a></li>
                                   <li><a class="btn btn-success text-white mt-2" href="{{ url("shop-single.html") }}"><i class="far fa-eye"></i></a></li>
                                   <li><a class="btn btn-success text-white mt-2" href="{{ url("shop-single.html") }}"><i class="fas fa-cart-plus"></i></a></li>
                               </ul>
                           </div>
                       </div>
                       <div class="card-body">
                           <a href="{{ url("shop-single.html") }}" class="h3 text-decoration-none">Oupidatat non</a>
                           <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                               <li>M/L/X/XL</li>
                               <li class="pt-2">
                                   <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                               </li>
                           </ul>
                           <ul class="list-unstyled d-flex justify-content-center mb-1">
                               <li>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-muted fa fa-star"></i>
                                   <i class="text-muted fa fa-star"></i>
                               </li>
                           </ul>
                           <p class="text-center mb-0">$250.00</p>
                       </div>
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="card mb-4 product-wap rounded-0">
                       <div class="card rounded-0">
                           <img class="card-img rounded-0 img-fluid" src="{{ asset("/assets/img/shop_07.jpg") }}">
                           <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                               <ul class="list-unstyled">
                                   <li><a class="btn btn-success text-white" href="{{ url("shop-single.html") }}"><i class="far fa-heart"></i></a></li>
                                   <li><a class="btn btn-success text-white mt-2" href="{{ url("shop-single.html") }}"><i class="far fa-eye"></i></a></li>
                                   <li><a class="btn btn-success text-white mt-2" href="{{ url("shop-single.html") }}"><i class="fas fa-cart-plus"></i></a></li>
                               </ul>
                           </div>
                       </div>
                       <div class="card-body">
                           <a href="{{ url("shop-single.html") }}" class="h3 text-decoration-none">Oupidatat non</a>
                           <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                               <li>M/L/X/XL</li>
                               <li class="pt-2">
                                   <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                               </li>
                           </ul>
                           <ul class="list-unstyled d-flex justify-content-center mb-1">
                               <li>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-muted fa fa-star"></i>
                                   <i class="text-muted fa fa-star"></i>
                               </li>
                           </ul>
                           <p class="text-center mb-0">$250.00</p>
                       </div>
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="card mb-4 product-wap rounded-0">
                       <div class="card rounded-0">
                           <img class="card-img rounded-0 img-fluid" src="{{ asset("/assets/img/shop_08.jpg") }}">
                           <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                               <ul class="list-unstyled">
                                   <li><a class="btn btn-success text-white" href="{{ url("shop-single.html") }}"><i class="far fa-heart"></i></a></li>
                                   <li><a class="btn btn-success text-white mt-2" href="{{ url("shop-single.html") }}"><i class="far fa-eye"></i></a></li>
                                   <li><a class="btn btn-success text-white mt-2" href="{{ url("shop-single.html") }}"><i class="fas fa-cart-plus"></i></a></li>
                               </ul>
                           </div>
                       </div>
                       <div class="card-body">
                           <a href="{{ url("shop-single.html") }}" class="h3 text-decoration-none">Oupidatat non</a>
                           <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                               <li>M/L/X/XL</li>
                               <li class="pt-2">
                                   <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                               </li>
                           </ul>
                           <ul class="list-unstyled d-flex justify-content-center mb-1">
                               <li>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-muted fa fa-star"></i>
                                   <i class="text-muted fa fa-star"></i>
                               </li>
                           </ul>
                           <p class="text-center mb-0">$250.00</p>
                       </div>
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="card mb-4 product-wap rounded-0">
                       <div class="card rounded-0">
                           <img class="card-img rounded-0 img-fluid" src="{{ asset("/assets/img/shop_09.jpg") }}">
                           <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                               <ul class="list-unstyled">
                                   <li><a class="btn btn-success text-white" href="{{ url("shop-single.html") }}"><i class="far fa-heart"></i></a></li>
                                   <li><a class="btn btn-success text-white mt-2" href="{{ url("shop-single.html") }}"><i class="far fa-eye"></i></a></li>
                                   <li><a class="btn btn-success text-white mt-2" href="{{ url("shop-single.html") }}"><i class="fas fa-cart-plus"></i></a></li>
                               </ul>
                           </div>
                       </div>
                       <div class="card-body">
                           <a href="{{ url("shop-single.html") }}" class="h3 text-decoration-none">Oupidatat non</a>
                           <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                               <li>M/L/X/XL</li>
                               <li class="pt-2">
                                   <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                   <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                               </li>
                           </ul>
                           <ul class="list-unstyled d-flex justify-content-center mb-1">
                               <li>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-warning fa fa-star"></i>
                                   <i class="text-muted fa fa-star"></i>
                                   <i class="text-muted fa fa-star"></i>
                               </li>
                           </ul>
                           <p class="text-center mb-0">$250.00</p>
                       </div>
                   </div>
               </div>
           </div>
           <div div="row">
               <ul class="pagination pagination-lg justify-content-end">
                   <li class="page-item disabled">
                       <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="{{ url("#") }}" tabindex="-1">1</a>
                   </li>
                   <li class="page-item">
                       <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="{{ url("#") }}">2</a>
                   </li>
                   <li class="page-item">
                       <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="{{ url("#") }}">3</a>
                   </li>
               </ul>
           </div>
       </div>

   </div>
</div>
@endsection