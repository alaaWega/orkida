@extends('Front.layouts')
@section('title', $tag)
@section('meta')
<meta name="keywords" content="شركة اوركيدا, شركة اوركيدا لمكافحة الحشرات,شركات مكافحة حشرات بجدة ">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="description" content="شركة اوركيدا, شركة اوركيدا لمكافحة الحشرات,شركات مكافحة حشرات بجدة ">
@endsection
@section('content')
<!-- start content of page -->
<div class="wrapper_content">
    <section class="beardcamp">
        <div class="beardcamp_img">
            <img src="{{ asset('/assets/img/pest-library/Bg.png')}}">
            <div class="beardcamp_info">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="right_text mobile-text">
                                <h3 class="mb-0"> {{ __('home.menu.blog') }} </h3>
                                <nav aria-label="breadcrumb no-bg">
                                    <ol class="breadcrumb no-bg p-0 mb-0">
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('/') }}">{{ __('home.menu.index') }}</a>
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 text-center">
                            <!-- <div class="center_text">
                                <p> عن شركتنا </p>
                                <h4> اوركيدا لمكافحة الحشرات </h4>
                            </div> -->
                        </div>
                        <div class="col-lg-4 col-md-4 text-left">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-info blogs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <div class="bg-info mt-4 pest-library mobile search-blog">
                        <h6 class="title-wdight"> البحث في المدونة </h6>
                        <form action="{{ url(app()->getLocale() .'/blog') }}" method="get">
                            <!-- @csrf -->
                            <div class="form-group mb-0 ">
                                <div class="input-group-prepend ">
                                    <div class="input-group-text ">
                                        <button type="submit"><img src="{{ asset('/assets/img/blog/noun_Search_2680509.svg')}} "></button>
                                    </div>
                                </div>
                                <input type="text " required name="searchText" class="form-control " id=" " placeholder=" ">
                            </div>
                        </form>
                    </div>
                    <div class="articels-box articels-box-without-bg">
                        <div class="row">
                        @foreach($relatedArticles as $relatedArticle)
                            <div class="col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="image-area">
                                        <a href="{{ url(app()->getLocale() .'/blog/'.$relatedArticle->blog->slug )}}">
                                            <img class="card-img-top" src="{{ config("app.baseUrl").$relatedArticle->blog->image }}" alt=" {{ $relatedArticle->blog->image_alt }}">
                                            <div class="card-img-overlay">
                                                <p class="card-title-overlay">
                                                    <img src="{{ asset('/assets/img/pest-library/noun_Cockroach_323508.svg')}}"> {{ $relatedArticle->blog->getArticleType->category }}
                                                </p>
                                            </div>
                                        </a>
                                        <h3 class="card-title">
                                        {{ $relatedArticle->blog->name }}
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                        {!! charsLimit(strip_tags($relatedArticle->blog->description_ar), 240) !!} 
                                        </p>
                                        <span class="date"> {{ date('d-m-Y', strtotime($relatedArticle->blog->created_at)) }} </span>
                                        <a href="{{ url(app()->getLocale() .'/blog/'.$relatedArticle->blog->slug )}}" class="read-more">  {{ __('home.menu.readMore') }} <i class="fa fa-angle-left"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                        <div class="main-pagination d-flex justify-content-center">
                            <nav>
                            {{ $relatedArticles->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="bg-info mt-4 pest-library web">
                        <h6 class="title-wdight"> البحث في المدونة </h6>
                        <form action="{{ url(app()->getLocale() .'/blog') }}" method="get">
                            <!-- @csrf -->
                            <div class="form-group mb-0 ">
                                <div class="input-group-prepend ">
                                    <div class="input-group-text ">
                                    <button type="submit"> <img src="{{ asset('/assets/img/blog/noun_Search_2680509.svg')}} "></button>
                                    </div>
                                </div>
                                <input type="text " required name="searchText" class="form-control " id=" " placeholder=" ">
                            </div>
                        </form>
                    </div>
                    <div class="bg-info mt-4 pest-library ">
                        <h6 class="title-wdight"> الاقسام </h6>
                        <ul class="list ">
                            @foreach($articleTypes as $articleType)
                            <li>
                                <a href="{{ url(app()->getLocale() .'/categories/'.$articleType->slug) }}">
                                    <img src="{{ asset('/assets/img/blog/noun_Cockroach_323508.svg')}} "> {{ $articleType->category }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="bg-info mt-4 pest-library ">
                        <div class="social-meida ">
                            <h6> تواصل معنا </h6>
                            <ul>
                            <li class="facebook">
                                <a href="{{ $settings->facebook_url }}" title="facebook"><i class="fa fa-facebook-f"></i></a>
                            </li>
                            <li class="twitter">
                                <a href="{{ $settings->twitter_url }}" title="twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="instagram">
                                <a href="{{ $settings->instagram_url }}" title="instagram"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li class="youtube">
                                <a href="{{ $settings->youtube_url }}" title="youtube"><i class="fa fa-youtube"></i></a>
                            </li>
                            </ul>
                        </div>
                        <div class="dropdown-divider "></div>
                        <div class="newsPapper ">
                        @if (\Session::has('msg'))
                                    <div class="alert alert-success">
                                        <ul>
                                            <li>{!! \Session::get('msg') !!}</li>
                                        </ul>
                                    </div>
                                @endif
                            <form class="mt-4 " action="{{ url(app()->getLocale() .'/contact') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="label-name "> {{ __('home.contactUsSection.contactForm.name') }} </label>
                                <input type="text " required name="fname" class="form-control " placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label class="label-name"> {{ __('home.contactUsSection.contactForm.mobile') }} </label>
                                <input type="text " required name="phone" class="form-control" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label class="label-name"> {{ __('home.contactUsSection.contactForm.email') }} </label>
                                <input type="text" required name="email" class="form-control" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label class="label-name"> {{ __('home.orderService.selectService') }} </label>
                                <select name="topic" required class="form-control nice-select">
                                @foreach($pestControls as $pestControl)
                                    <option value="{{ getLocalizableColumn($pestControl, 'slug') }}">{{ getLocalizableColumn($pestControl, 'name') }}</option>
                                @endforeach
                                </select>
                            </div>
                                <div class="form-group ml-auto mr-auto mt-5 text-center">
                                    <button type="submit" class="btn btn-form-contact mt-4 w-100">ارسال</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="ads">
                        <img src="{{ asset('/assets/img/pest-library/img@2x.png')}}">
                        <div class="ads-info text-center">
                            <h1> {{ __('home.service.discount') }}  </h1>
                            <h2> {{ __('home.service.discountValue') }}  </h2>
                            <p> {{ __('home.service.onAllServices') }}  </p>
                            <p> {{ __('home.service.monthEnd') }}  </p>
                            <div class="text-center order">
                            <a href="{{ url(app()->getLocale() .'/contact-us') }}"> {{ __('home.orderService.order') }}  <i class="fa fa-shopping-cart mr-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="ads-newPapper">
                        <div class="title-news text-center">
                            <h1> {{ __('home.subscriptions.subscribeContact') }} </h1>
                            <div class="image">
                                <img class="mb-5" src="{{ asset('/assets/img/contact-us/icons/art.png')}}">
                            </div>
                            <form class="mt-5">
                                <div class="form-group">
                                    <label class="label-name color-dark"> {{ __('home.subscriptions.emailPlaceHolder') }} </label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="form-group m-auto text-center">
                                    <button type="submit" class="btn btn-form-contact mt-3 w-100">{{ __('home.subscriptions.subscribeBtn') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end content of page -->
@endSection