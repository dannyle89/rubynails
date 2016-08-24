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
		<div class="box-content">
			<form name="add_acc_form" ng-controller="SubmitController as subCtl"
			ng-submit="subCtl.addAccount()">
				<div class="col-xs-18 col-md-12">
					<input type="text" ng-model="subCtl.newAccount.name" placeholder="Full Name">
				</div>
				<div class="col-xs-18 col-md-12">
					<input type="text" ng-model="subCtl.newAccount.date" placeholder="In Date">
				</div>
				<% csrf_field() %>
				<div class="col-xs-18 col-md-12">
					<button class="btn btn-success" type="submit">Add</button>
					<button class="btn btn-error" type="reset">Clear</button>
				</div>
			</form>
		</div>
	</div>
</div>
@stop