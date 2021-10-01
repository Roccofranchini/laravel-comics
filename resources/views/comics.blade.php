@extends('layouts.main')

@section('content')
<section id="content">
	<section id="cartoon">
		<span class="current-series">CURRENT SERIES</span>
	</section>
	<div class="container">
		<div class="row">
            @foreach($comics as $comic)
                <div class="col-2">  
                    <div id="card">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" />
		                <figcaption>{{$comic['title']}}</figcaption> 
	                </div>
                </div>
            @endforeach
		</div>
	</div>
</section>
@endsection

@section('title')Comics @endsection