@extends('layouts.main')

@section('content')
<section id="comic" class="mb-4">
		    <section id="cartoon">
		    </section>
            <div class="blue-line position-relative">
                <img class="shadow-lg" src="{{$comic['thumb']}}" alt="">
            </div>
		    <div class="container">
			    <div class="row align-items-start">
				    <div class="col-8 pe-4">
                        <h2 class="pb-4 pt-5 mb-0">{{$comic['title']}}</h2>
                        <div class="buy shadow-lg row gy-2 mb-4">
                            <div class="col-9 mt-0 py-2 d-flex justify-content-between border-end">
                                <span>U.S. Price <span class="text-white">{{$comic['price']}}</span></span>
                                <span>AVAILABLE</span>
                            </div>
                            <div class="col-3 mt-0"><span class="text-white">Check avalability</span></div>
                        </div>
                        <p class="ps-0">{{$comic['description']}}</p>
                    </div>
				    <div class="col-4 h-100">
                        <h6 class="pt-4 mt-2  text-end">ADVERTISMENT</h6>
                        <img class="shadow-lg" src="{{ asset('img/adv.jpg') }}" alt="">
                    </div>
			    </div>
		    </div>
	    </section>
@endsection

@section('title')Comic @endsection