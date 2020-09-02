@extends('layouts.master')

@section('content')

 <!-- Sidebar + Content -->
 <div class="container margin-top">
            <div class="row">
                <div class="col-md-4">
                <div class="row">
                
                @include('partials.product-sidebar')
                </div>
                
                </div>

                <div class="col-md-7">
                    <div class="widget">
                        <h3> All Profucts </h3>
                        <div class="row">

                        @foreach ($products as $product)
                            <div class="col-md-3">
                                <div class="card">

                                @foreach ($product->images as $image)


                                @endforeach

                                    <img src="{{ asset ('public/img/1.png')}}" class="card-img-top feature-img" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$product->title}}</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Buy</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                
                </div>
            </div>
        </div>

    </div>

                @include('partials.scripts')
</body>
</html>

@endsection