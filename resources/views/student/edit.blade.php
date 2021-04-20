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



	<div class="wrap ">
        <a class="btn btn-info" href="{{ route('student.index') }}">Back</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>Edit Student</h2>
                @include('validation')
				<form action="{{ route('student.update',$single_data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" value="{{ $single_data->name }}" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" value="{{ $single_data->email }}" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" value="{{ $single_data->cell }}" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="username" class="form-control" value="{{ $single_data->username }}" type="text">
					</div>
                    <div class="form-group">
						<label for="">Age</label>
						<input name="age" class="form-control" value="{{ $single_data->age }}" type="text">
					</div>
                    <div class="form-group">
                        <img style="max-width: 100%;" src="{{ url('') }}/assets/media/img/{{ $single_data->photo }}" alt="">
						<label for="">Photo</label>
                        <input name="old_photo" class="form-control" value="{{ $single_data->photo }}" type="hidden">
						<input name="new_photo" class="form-control-file" type="file">
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Update">
					</div>
				</form>
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
