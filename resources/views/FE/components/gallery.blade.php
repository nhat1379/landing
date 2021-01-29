@if (count($galleries))
    <section class="p-0">
        <div class="container-fluid">
            <div class="row image-gallery" id="my-gallery">

                @foreach ($galleries as $k => $gallery)
                    @php
                      $link = $gallery->is_example ? $gallery->image : asset('storage/' . $gallery->image);
                    @endphp

                    <div class="col-md-2">
                        <figure class="gallery-item @if($k %2 != 0) mt-50 @endif">
                            <div class="gallery-icon landscape">
                                <a href="{{ $link }}">
                                    <img src="{{ $link }}" class="" alt="">
                                </a>
                            </div>
                        </figure>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


    <style>
        @media only screen and (min-width: 600px) {
            .mt-50 {
                margin-top: 40px;
            }
        }
        #my-gallery .gallery-icon {
            position: relative;
            padding-bottom: 125%;
            background: #cccccc59;
            transition: 0.2s;
            overflow: hidden;
            cursor: pointer
        }
        #my-gallery .gallery-icon:hover {
            filter: brightness(0.3)
        }
        #my-gallery .gallery-icon a {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
        }
    </style>
@endif
