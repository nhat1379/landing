@extends('FE.layouts.master')

@section('content')

<div id="content" class="site-content">
    <div class="page-header dtable text-center header-transparent pheader-about">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">About Us</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">About Us</li>
                </ul>    
            </div>
        </div>
    </div>
</div>

<section class="about-company">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 align-self-center text-center mb-5 mb-lg-0">
                <div class="about-img">
                    <img src="https://via.placeholder.com/623x570.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 align-self-center">
                <div class="about-detail">
                    <div class="ot-heading is-dots">
                        <span>[ about company ]</span>
                        <h2 class="main-heading">Best Interior Solutions</h2>
                    </div>
                    <p>The basic philosophy of our studio is to create individual, aesthetically stunning solutions for our customers by lightning-fast development of projects employing unique styles and architecture. Even if you don’t have a ready sketch of what you want – we will help you to get the result you dreamed of.</p>
                    <div class="ot-button">
                        <a href="portfolio-masonry.html" class="octf-btn octf-btn-dark border-hover-dark">View Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection