<header id="header" class="py-3">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<img src="{{ asset('img/dc-logo.png') }}" alt="" />
				</div>
				<div class="col-6 d-flex align-items-center">
					<ul class="mb-0">
						@foreach ($links as $link)	
							<li><a href="{{ route($link['route']) }}">{{$link['text']}}</a></li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</header>