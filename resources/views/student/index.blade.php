<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>
<body>



	<div class="wrap-table ">
        <a class="btn btn-sm btn-info" href="{{ route('student.create') }}">Add new student</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Student</h2>
                @include('validation')
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Username</th>
							<th>Age</th>
							<th>time</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
                    @foreach($all_data as $d)
						<tr>
							<td>1</td>
							<td>{{ $d->name }}</td>
							<td>{{ $d->email }}</td>
							<td>{{ $d->cell }}</td>
							<td>{{ $d->username }}</td>
							<td>{{ $d->age }}</td>
							<td>{{ date("F j, Y, g:i a") }}</td>
							<td><img src="assets/media/img/{{ $d->photo }}" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="{{ route('student.show',$d->id) }}">View</a>
								<a class="btn btn-sm btn-warning" href="{{ route('student.edit',$d->id) }}">Edit</a>
                                <form style="display: inline;" action="{{ route('student.delete',$d->id) }}" method="POST" >
                                    @csrf
                                    @method('DELETE')
                                    <button  class="btn btn-sm btn-danger">Delete</button>
                                </form>
							</td>
						</tr>

                    @endforeach

					</tbody>
				</table>
			</div>
		</div>
	</div>








	<!-- JS FILES  -->
	<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
