@extends('admin.layout.index')
@section('content')
	<div id="content" class="span10">
		<ul class="breadcrumb">
			<li>
				<i class="icon-home"></i>
				<a href="#">Home</a>
				<i class="icon-angle-right"></i>
			</li>
			<li><a href="#">Bill</a></li>
		</ul>
		<div class="row-fluid sortable">
			<div class="box span12">
				<div class="box-header" data-original-title>
					<h2><i class="halflings-icon white user"></i><span class="break"></span>Bill</h2>
					<div class="box-icon">
						<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
						<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
						<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
					</div>
				</div>
				<div class="box-content">
					<table class="table table-striped table-bordered bootstrap-datatable datatable">
					  <thead>
						  <tr>
						  	  <th>ID Bill</th>
							  <th>Tên Khách Hàng</th>
							  <th>Tài Khoản</th>
							  <th>Email</th>
							  <th>Số Điện Thoại</th>
							  <th>Số Tiền</th>
							  <th>Hoạt Động</th>
						  </tr>
					  </thead>
					  <tbody>
					  	@foreach($bill as $tl)

						<tr>
							<td>{{$tl->id}}</td>
							<td>{{$tl->name}}</td>

							<td>
								@foreach($user as $tlu)
								@if($tlu->id==$tl->user_id)
								{{$tlu->name}}
								@endif
								@endforeach
							</td>

							<td>{{$tl->email}}</td>
							<td>{{$tl->phone}}</td>
							<td>{{$tl->payments}}</td>
							<td class="center">
								<a href="{{url('/admin/booking/listorder')}}/{{$tl->id}}" class="btn btn-success">List Order</a>
							</td>
						</tr>


						@endforeach
					  </tbody>
				  </table>
				</div>
			</div>

		</div>
	</div>
@endsection
