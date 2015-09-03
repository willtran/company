@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					<div class="list-group">
						@foreach( $aCompanies as $oCompany)
							<a href="#" onclick="alert('todo:drop down list of persons')" class="list-group-item">{{$oCompany->name}}</a>
						@endforeach
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
