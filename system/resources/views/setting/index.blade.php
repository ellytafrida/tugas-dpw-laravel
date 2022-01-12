@extends ('template.base')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 mt-5" style="margin-top: 50px; margin-left: 100px;">
			<div class="card card-default">
				<div class="card-header" style="margin-bottom: 40px; background-color: #008080;">
					<h3 style="color: #ffffff;">Ganti Password</h3>
				</div>
				<div class="card-body">
					<form action="{{url('setting')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label"> Current Password </label>
							<input type="password" name="sekarang" class="form-control">
						</div>
						<hr>
						<div class="form-group">
							<label for="" class="control-label"> New Password </label>
							<input type="password" name="baru" class="form-control">
						</div>
						<div class="form-group">
							<label for="" class="control-label"> Confirm New Password </label>
							<input type="password" name="konfirmasi" class="form-control">
						</div>
						<div class="form-group">
							<button class="btn btn-info" style="background-color: #008080;"><i class="fa fa-save"></i> Simpan </button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection