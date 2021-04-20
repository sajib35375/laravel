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



	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Create Student</h2>
                @include('validation')

				<form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
                        @if($errors->any())
                            <p class="text-danger">{{ $errors->first('name') }}</p>
                        @endif
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
                        @if($errors->any())
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                        @endif
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
                        @if($errors->any())
                            <p class="text-danger">{{ $errors->first('cell') }}</p>
                        @endif
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="username" class="form-control" type="text">
                        @if($errors->any())
                            <p class="text-danger">{{ $errors->first('username') }}</p>
                        @endif
					</div>
                    <div class="form-group">
						<label for="">Age</label>
						<input name="age" class="form-control" type="text">
                        @if($errors->any())
                            <p class="text-danger">{{ $errors->first('age') }}</p>
                        @endif
					</div>
                    <div class="form-group">
						<label for="">Photo</label>
						<input name="photo" class="form-control-file" type="file">
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Create">
                        <a class="btn btn-warning" href="{{ route('student.index') }}">Back</a>
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
