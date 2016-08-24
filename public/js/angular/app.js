(function(){
	var app = angular.module('home',[]);

	app.controller('AccountController',['$http',function($http){
		var emp = this;
		emp.accounts = [];

		$http.get('listusers').success(function(data){
			emp.accounts = data;
		});
	}]);

	app.controller('SubmitController',['$http',function($http){
		this.newAccount={};

		var data = {
			name:'name',
			date:'08/01/2016'
		}

		this.addAccount= function(){
			// $http.post(
			// 	'adduser',
			// 	data,
			// 	function(data){
			// 	console.log(data);
			// })

		$http({
            method: 'POST',
            url: 'adduser',
            data: data
        }).success(function(response) {
            console.log(response);
            // location.reload();
        }).error(function(response) {
            console.log(response);
            // alert('This is embarassing. An error has occured. Please check the log for details');
        });

			this.newAccount = {};
		};
	}]);

})();