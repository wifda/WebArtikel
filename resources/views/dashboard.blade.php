@extends('admin/admin')
@section('konten')
	<div class="container-fluid">
		<div class="card">
			<div class="card-header bg-light"><h3><b>YourArticles!</b></h3></div>
			<div class="card-body">
				<div class="row"> 
					@foreach($artikel as $ar)
					<div class="col-lg-4 col-6">
						<div class="card mb-3" style="max-width: 90rem;">
							<div class="card-body " style="text-align:center;">	
								<h4>{{ $ar->ARTIKEL_TITLE }}</h4>
								<img style="width: 200px" src="{{ URL::to('/data_file/'.$ar->artikelToGambar->GAMBAR_NAMA) }}" class="img-responsive" alt="{{$ar->artikelToGambar->GAMBAR_NAMA}}">
								<h5>{{ $ar->ARTIKEL_KUTIPAN }}</h5>
								<p>{{ $ar->ARTIKEL_KONTEN }}</p>
							</div>
							<div class="card-footer bg-info" style="text-align:center;">
								<a href="#" style="color: white">Show more  <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
	
@endsection