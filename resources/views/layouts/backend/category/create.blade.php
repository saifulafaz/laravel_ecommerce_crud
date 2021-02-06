@extends('layouts.backend.app')

@section('content')
<div class="content">	
  <div class="row">
		<div class="col-md-12">
			<div class="card-header card-header-border-bottom">
				<a class="btn btn-info float-right" href="{{ url('category') }}">Category List</a>
				<h2>Add New Category</h2>
			</div>
			<div class="card-body border">
				<form class="pl-5 pr-5" method="POST" action="{{route('category.store')}}">
					@csrf
					<div class="form-row">
							<div class="col-md-12">
							<label for="name">Category name</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="category name">
						</div>
						<div class="col-md-12 mt-4">
							<label for="name">Description</label>
							<textarea class="form-control" name="description"></textarea> 
						</div>
						
						
					</div>
					<br>
					<button class="btn btn-primary" type="submit">Save</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
          


       