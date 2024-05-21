@include('layout.navbar')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lightgallery.min.css"
    integrity="sha512-F2E+YYE1gkt0T5TVajAslgDfTEUQKtlu4ralVq78ViNxhKXQLrgQLLie8u1tVdG2vWnB3ute4hcdbiBtvJQh0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lg-zoom.min.css"
    integrity="sha512-vIrTyLijDDcUJrQGs1jduUCSVa3+A2DaWpVfNyj4lmXkqURVQJ8LL62nebC388QV3P4yFBSt/ViDX8LRW0U6uw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lg-thumbnail.min.css"
    integrity="sha512-GRxDpj/bx6/I4y6h2LE5rbGaqRcbTu4dYhaTewlS8Nh9hm/akYprvOTZD7GR+FRCALiKfe8u1gjvWEEGEtoR6g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
   
   .nav-pills .nav-link {

    border-radius: 20px;
    padding: 1rem 1.5rem;

   }

.image-container {
    position: relative;
    width: 100%;
    padding-bottom: 100%;
    overflow: hidden;
    z-index: 1;
}

.image-container img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1;
}
 .image-container::after{

    position: absolute;
    content: "";
    display: block;
    height: 100%;
    opacity: 0;

    width: 100%;
    top: 0;
    left: 0;
    border-radius: 10px;
    transition: all 0.3s ease-in-out;
    background: linear-gradient(180deg, rgba(0, 108, 228, 0) 0%, rgba(0, 108, 228, 0.75) 150%);
    z-index: 1;
}
.image-container:hover::after{
opacity: 1;
}
    </style>

<div class="container my-4">
    <div class="d-flex justify-content-center" style="margin-bottom:2rem;">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            @foreach ($categories as $categorie => $items)
                <li class="nav-item" role="presentation">
                    <button class="nav-link @if ($loop->first) active @endif" id="pills-home-tab{{ $loop->index }}" data-bs-toggle="pill"
                        data-bs-target="#pills-home{{ $loop->index }}" type="button" role="tab" aria-controls="pills-home{{ $loop->index }}"
                        aria-selected="true">{{ $categorie }}</button>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="tab-content" id="pills-tabContent">
        @foreach ($categories as $categorie => $items)
            <div class="tab-pane fade @if ($loop->first) show active @endif" id="pills-home{{ $loop->index }}" role="tabpanel" aria-labelledby="pills-home-tab{{ $loop->index }}">
                <div class="row">
                    @foreach ($items as $item)
                        <div class="col-md-3 mb-4" data-src="{{asset('/storage/' .$item['image']) }}">
                            <a href="{{ asset('/storage/' .$item['image']) }}">
                                <div class="image-container">
                                    <img src="{{ asset('/storage/' .$item['image']) }}" class="img-fluid" alt="">
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js"
    integrity="sha512-jEJ0OA9fwz5wUn6rVfGhAXiiCSGrjYCwtQRUwI/wRGEuWRZxrnxoeDoNc+Pnhx8qwKVHs2BRQrVR9RE6T4UHBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/thumbnail/lg-thumbnail.min.js"
    integrity="sha512-VBbe8aA3uiK90EUKJnZ4iEs0lKXRhzaAXL8CIHWYReUwULzxkOSxlNixn41OLdX0R1KNP23/s76YPyeRhE6P+Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/zoom/lg-zoom.min.js"
    integrity="sha512-BLW2Jrofiqm6m7JhkQDIh2olT0EBI58+hIL/AXWvo8gOXKmsNlU6myJyEkTy6rOAAZjn0032FRk8sl9RgXPYIQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    Array.from(document.querySelectorAll('.tab-pane > .row'))
        .forEach(elment => {
            lightGallery(elment, {
                plugins: [lgZoom, lgThumbnail],
                speed: 500,

            });

        })
</script>
@include('layout.footer')
