@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <!-- CONTENT -->
            @if(count($muscles) > 0)
                @foreach($muscles as $muscle)
                    <div class="card p-1 m-4" style="width: 18rem;">
                        <img src="images/{{$muscle->first_img_name}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$muscle->name}}</h5>
                            <p class="card-text">{{$muscle->short_desc}}</p>

                            <a href="/muscle/{{$muscle->id}}" class="btn btn-primary">Exercise</a>
                        </div>
                    </div>
            @endforeach
        @endif

        <!-- CONTENT -->
        </div>
    </div>
    <!-- footer -->
    <footer class="bg-dark text-light">
        <hr class="border-top-my3 bg-light">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-md-4">
                    <hr class="border-top-my3 bg-light">
                    <h5><img src="images/logo.png" style="height:30px ;width :30px ;margin-right: 5px;"
                             alt=""> Training Guider</h5>
                    <hr class="border-top-my3 bg-light">
                    <p>Tel: 333-333-333</p>
                    <Address>Riyadh, Saudi Arabia</Address>
                    <p> Fax: 444-444-444</p>
                </div>
                <!-- 2 -->
                <div class="col-md-4">
                    <hr class="border-top-my3 bg-light">
                    <h5>Developed by : </h5>
                    <hr class="border-top-my3 bg-light">
                    <p>Abdullah Almansour - 437100037</p>
                    <p>Sulaiman Aljadaan - 439101749</p>
                </div>
                <!-- 3 -->
                <div class="col-md-4">
                    <hr class="border-top-my3 bg-light">
                    <h5> Vision:</h5>
                    <hr class="border-top-my3 bg-light">
                    <p>Health is first</p>
                    <p>Make Exercise easier</p>
                    <p>Free to use </p>
                </div>
            </div>
        </div>
    </footer>
@endsection
