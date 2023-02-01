@extends('layouts.app')

@section('content')
    @if($muscle)
        @foreach($muscle as $m)
            <div class="container">
                <div class="row justify-content-center">
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="image">
                                    <img src="../../images/{{$m->second_img_name}}" class="card-img-top"
                                         alt="{{$m->name}} image">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="video">
                                    <iframe src="{{ url($m->video_url) }}" width="560"
                                            height="315" frameborder="0" allowfullscreen></iframe>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="video">
                                              
                                            <h5>Number Of Set:</h5>
                                            <!-- action="{{ route('userExercises.store') }}" -->
                                            <form action="{{ route('userExercises.store') }}" method="post"
                                                  enctype="multipart/form-data">
                                            @csrf <!-- add csrf field on your form -->
                                                <svg onclick="plus()" xmlns="http://www.w3.org/2000/svg" width="30"
                                                     height="30" fill="currentColor" class="bi bi-plus-square-fill"
                                                     viewBox="0 0 16 16">
                                                    <path
                                                        d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                                                </svg>
                                                <input class="btn" id="count" type="text"
                                                       style="border: #1a202c 1px solid; width: 50px; height: 30px">
                                                <input id="times" type="hidden" name="times">
                                                <input type="hidden" value="{{$m->id}}" name="muscle_id">
                                                <svg onclick="mins()" xmlns="http://www.w3.org/2000/svg" width="30"
                                                     height="30" fill="currentColor" class="bi bi-dash-square-fill"
                                                     viewBox="0 0 16 16">
                                                    <path
                                                        d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 7.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1z"/>
                                                </svg>
                                                <input type="hidden" name="_csrf" value="{{ csrf_token() }}"/>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <h1>{{$m->name}}:</h1>
                                <p style="font-size: 20px">{{$m->long_desc}} </p>
                            </div>
                        </div>
                    </section>
                    <h2 style="margin-top: 80px">Change Muscle:</h2>
                    <div class="container-fluid" style="margin-bottom: 100px">
                        <div class="row flex-row flex-nowrap navbar-nav-scroll bg-dark p-3">
                            @if(count($muscles) > 0)
                                @foreach($muscles as $muscle)
                                    @if(!($muscle->id == $m->id))
                                        <div class="col-3">
                                            <div class="card card-block border-primary mb-3" style="max-width: 14rem; margin: 0">
                                                <div class="card-header"
                                                     style="font-weight: bold">{{$muscle->name}}</div>
                                                <div class="card-body text-secondary">
                                                    <p class="card-text">{{$muscle->short_desc}}</p>
                                                    <a href="/muscle/{{$muscle->id}}"
                                                       class="btn btn-primary">Exercise</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <script>
                        function plus() {
                            let value = document.getElementById("count").value
                            value++
                            document.getElementById("count").value = value
                            document.getElementById("times").value = value
                        }

                        function mins() {
                            let value = document.getElementById("count").value
                            if (value > 0)
                                value--
                            
                            document.getElementById("count").value = value
                            document.getElementById("times").value = value
                        }


                    </script>
        @endforeach
    @endif
@endsection
