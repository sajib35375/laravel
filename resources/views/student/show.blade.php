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
        <a class="btn btn-info btn-sm" href="{{ route('student.index') }}">Back</a>
		<div class="card shadow">
			<div class="card-body">
                <img style="max-width: 100%;" src="{{ url('') }}/assets/media/img/{{ $single_data->photo }}" alt="">
                <table style="text-align: center;" class="table table-striped">
                    <tr>
                        <td>Name</td>
                        <td>{{ $single_data->name }}</td>
                    </tr><tr>
                        <td>Email</td>
                        <td>{{ $single_data->email }}</td>
                    </tr><tr>
                        <td>Cell</td>
                        <td>{{ $single_data->cell }}</td>
                    </tr><tr>
                        <td>Age</td>
                        <td>{{ $single_data->age }}</td>
                    </tr><tr>
                        <td>Username</td>
                        <td>{{ $single_data->username }}</td>
                    </tr>
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
