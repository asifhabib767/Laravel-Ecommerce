@extends('layouts.master')

@section('content')

 <!-- Sidebar + Content -->
 <div class="container margin-top">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                            <div class="col-4">
                                @include('partials.product-sidebar')
                            </div>
                    </div>
                
                </div>

                <div class="col-md-8">
                    <div class="widget">
                        <h3> Featured Profucts </h3>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset ('public/img/1.png')}}" class="card-img-top feature-img" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Products</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Buy</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset ('public/img/1.png')}}" class="card-img-top feature-img" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Products</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Buy</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset ('public/img/1.png')}}" class="card-img-top feature-img" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Products</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Buy</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset ('public/img/1.png')}}" class="card-img-top feature-img" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Products</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Buy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</body>
</html>

@endsection