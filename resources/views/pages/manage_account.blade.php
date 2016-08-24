@extends('template.index')
@section('content')
<div class="row">
	<div class="box">
		<div class="box-header">
			<div class="col-xs-9 col-md-6">
				<h2>{{"Manage Account" | uppercase}}</h2>
			</div>
			<div class="col-xs-9 col-md-6">
				<a class="btn btn-success" href="add_account">Add</a>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="box-content">
			<table class="table table-hover">
				<thead>
					<th>{{"No" | uppercase}}</th>
					<th>{{"Name" | uppercase}}</th>
					<th>{{"Start Date" | uppercase}}</th>
					<th>{{"Edit" | uppercase}}</th>
				</thead>
				<tbody ng-controller="AccountController as emp">
					<tr ng-repeat="account in emp.accounts">
						<td>{{account.id}}</td>
						<td>{{account.name}}</td>
						<td>{{account.start_date}}</td>
						<td>Edit</td>
					</tr>
				</tbody>
			</table>
			<div class="paging row">
				<div class="col-xs-9 col-md-6 page-info">
					<p>
						<b>Show 1 to 5 of 20 entries</b>
					</p>
				</div>
				<div class="col-xs-9 col-md-6 page-number">
					<ul class="pagination">
						<li><a href="#">1</a></li>
						<li class="active"><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@stop