@extends('layouts.main')

@section('content')
<section id="content">
	<section id="cartoon">
		<span class="current-series">CURRENT SERIES</span>
	</section>
	<div class="container">
		<div class="row align-items-start gy-3">
            @foreach($comics as $index => $comic)
                <div class="col-2">  
                    <div id="card">
                        <a href="{{ url("/comics/$index")}}"><img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" /></a>
		                <figcaption>{{$comic['title']}}</figcaption> 
	                </div>
                </div>
            @endforeach
		</div>
	</div>
</section>
@endsection

@section('title')Comics @endsection