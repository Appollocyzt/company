@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <div class="container">
 <a href="{{ route('home') }}"><input type="submit" class="btn btn-default btn-lg" value="Go back"></a>
   <div class="col-md-10">
      <h3>All Posts <small class="text-muted">List view</small></h3>
    </div>

 <div class="row">
			<div class="col-md-6">

				<table class="table table-bordered">

  					<thead>
  						<th>Name</th>	
              <th>Image</th>
              <th>Action</th>
  					</thead>

  					<tbody>
  						@foreach($posts as $post)

  							<tr>
  								<td>{{ $post->title}}</td>
  								<td><img src="{{ asset('images/'.$post->image) }}" height="260" width="260"></td>
                  <td><a href="{{ route('destroy',$post->id) }}" class="btn btn-success">Delete</a></td>
  							</tr>

  						@endforeach
  						
  					</tbody>

				</table>
</div>
</div>
</div>
@endsection