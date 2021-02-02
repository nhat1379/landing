@extends('BE.layouts.master')

@section('content')

<section class="wrapper">
    <div class="row">
        
        <div class="wrapper">
            @foreach ($items as $item)
                <div class="col-md-3">
                    <div class="db-box">
                        <a href="{{ route($item['url']) }}">
                            <div class="box-label" style="background: {{ $item['color'] }}">
                                <div>{{ $item['label'] }}</div>
                                <i class="{{ $item['icon'] }}"></i> 
                            </div>
    
                            <div class="box-content">
                                <h1 class="box-count">{{ $item['count'] }}</h1>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>
</section>

<script>
    $('.box-count').each(function () {
        var $this = $(this);
        $({ Counter: 0 }).animate({ 
                Counter: $this.text() 
            }, {
                duration: 2000,
                easing: 'swing',
                step: function () {
                    $this.text(Math.ceil(this.Counter));
                }
            }
        );
    });
</script>

<style>
    .db-box {
        background: white;
        max-width: 250px;
        margin: auto;
        box-shadow: 5px 5px 0 0 #d1d1d1;
        transition: 0.2s;
    }
    .db-box:hover {
        transform: translate(5px, 5px);
        box-shadow: none;
    }
    .db-box:hover i{
        transform: scale(2) translate(-3px, 20px);
        opacity: 0.2;
        color: black;
    }
    .db-box i {
        transition: 0.2s;
    }
    .db-box .box-label {
        padding: 5px 10px;
        text-align: center;
        color: white;
        display: flex;
        justify-content: space-between;
        text-transform: uppercase;
        align-items: center;
        font-size: 16px;
    }
    .db-box .box-content {
        padding: 20px;
        text-align: center;
    }
    .db-box .box-content .box-count {
        font-size: 5em;
    }
</style>

@endsection