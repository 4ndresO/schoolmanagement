@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
			 

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Parent List</h3>
	<a href="{{ route('parent.registration.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Parent</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>  
				<th>Name</th> 
				<th>ID NO</th>
				<th>Mobile</th>
				<th>Gender</th>
				<th>Join Date</th>
				@if(Auth::user()->role == "Admin")
				<th>Code</th>
				 @endif
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $parent )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $parent->name }}</td>	
				<td> {{ $parent->id_no }}</td>	
				<td> {{ $parent->mobile }}</td>	
				<td> {{ $parent>gender }}</td>	
				<td> {{ $parent->join_date }}</td>	
				<td> {{ $parent->salary }}</td>
				@if(Auth::user()->role == "Admin")	
				<td> {{ $parent->code }}</td>	
				 @endif			 
				<td>
<a href="{{ route('parent.registration.edit',$parent->id) }}" class="btn btn-info">Edit</a>
<a target="_blank" href="{{ route('parent.registration.details',$parent->id) }}" class="btn btn-danger">Details</a>

				</td>
				 
			</tr>
			@endforeach
							 
						</tbody>
						<tfoot>
							 
						</tfoot>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			       
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>





@endsection
