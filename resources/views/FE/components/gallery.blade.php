@if (count($galleries))
    <section class="p-0">
        <div class="container-fluid">
            <div class="row">
                <div class="image-gallery">
                    <div id="gallery-2" class="gallery gallery-columns-5 s2">
                        @foreach ($galleries as $k => $gallery)
                            @if ($k > 4) @break @endif

                            <figure class="gallery-item @if($k % 2 != 0) mt-30 @endif">
                                <div class="gallery-icon portrait">
                                    <a href="{{ asset('storage/' . $gallery->image) }}">
                                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="">
                                        <span class="overlay"><i class="ot-flaticon-add"></i></span>
                                    </a>
                                </div>
                            </figure>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
       
    </style>
@endif


