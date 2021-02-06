@extends('layouts.backend.app')

@section('content')
<div class="content">							
  <div class="row">
		<div class="col-lg-12">
			@if(session()->has('msg'))
				<div class="alert alert-success alert-dismissible fade show">
				   {{session()->get('msg')}}

				   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
				</div>
			@endif
			<div class="card-header card-header-border-bottom">
				<a href=" {{route('category.create')}}" class="btn btn-info float-right">Add Category</a>
				<h2>Category List</h2>
			</div>
			<br>
		    <table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Category Name</th>
						<th scope="col">Description</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					@if($categories)
						@foreach($categories as $i=>$category)
							<tr style="color:#000">
								<td scope="row">{{ $i + 1 }}</td>
								<td>{{$category->name}}</td>
								<td>{{$category->description}}</td>
								<td>
									<a href="{{route('category.edit',$category->id)}}" class="btn btn-info">Edit</a> ||
								    Delete
								</td>
							</tr>
						@endforeach
					@endif
				</tbody>
		    </table>
		</div>
	</div>
</div>
		
@endsection
          


       