@include('layout.navbar')

    <!-- Body main wrapper start -->
    <main>
        <!-- breadcrumb area start -->
        <section class="bd-breadcrumb-area p-relative fix">
            <!-- breadcrumb background image -->
            <div class="bd-breadcrumb-bg" data-background="assets/images/bg/sport2.jpg"></div>
            <div class="bd-breadcrumb-wrapper p-relative">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="bd-breadcrumb d-flex align-items-center justify-content-center">
                                <div class="bd-breadcrumb-content text-center">
                                    <h1 class="bd-breadcrumb-title">Sport des montagnes</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a href="{{url('/')}}"><i class="icon-home"></i>Géoparc</a></span>
                                        <span>Sport des montagnes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <style>
            .product-image-wrapper img {
                height: 17em !important;
            }
        </style>
        <style>

        </style>
        <section style="  padding-top: 45px !important;
       padding-bottom: 0 !important;"
            class="bd-destinations-details-area section-space">
            <div class="container">
                <div class="row gy-24 justify-content-center">
                    <div class="col-xxl-12 col-xl-12 col-lg-10">
                        <div class="destinations-details-wrapper">
                            <div class="destinations-details mb-25">
                                <div class="destinations-details-content">
                                    {!! $sport->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- shop-area area start -->
        <section class="bd-shop-area section-space">
            <div class="container">
                <div class="row gy-24 justify-content-center">
                    <div class="col-xxl-12 col-xl-12 col-lg-12">

                        <div class="row gy-24">
                            @foreach ($sport->images as $image)
                                <div class="col-xxl-4 col-xl-4 col-lg4 col-md-4 col-sm-6">
                                    <div class="product-wrapper">
                                        <div class="product-image-wrapper image-hover-effect">
                                            <a href="#" class="product-image">
                                                <div class="product-image-one">
                                                    <img src="{{ asset("storage/$image") }}" alt="">
                                                </div>

                                            </a>

                                        </div>

                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- shop-area area end -->

    </main>
    <!-- Body main wrapper end -->

    @include('layout.footer')
