@extends('template.index')
@section('content')
<div class="row">
	<div class="box">
		<div class="box-header">
			<div class="col-xs-9 col-md-6">
				<h2>{{"Add Account" | uppercase}}</h2>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="box-form">
			<form name="add_acc_form" ng-controller="SubmitController as subCtl"
			ng-submit="subCtl.addAccount()">
				<div class="form-group">
					<label for="name">Name</label>
					<input id="name" class="form-control" type="text" ng-model="subCtl.newAccount.name">
				</div>
				<div class="form-group">
					<label for="join-date">Join Date</label>
					<input id="join-date" class="form-control" type="text" ng-model="subCtl.newAccount.date">
				</div>
				<% csrf_field() %>
				<div class="form-group">
					<button class="btn btn-success" type="submit">Add</button>
					<button class="btn btn-error" type="reset">Clear</button>
				</div>
			</form>
		</div>
	</div>
</div>
@stop