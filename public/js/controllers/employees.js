app.controller('employees', function ($scope, $http, BASE_URL) {
    $scope.editrecord = 0;
    $scope.insertrecord = 0;

    $scope.newEmployee = {};

    //Fetch employees
    $http.get(BASE_URL + 'api/employees')
        .success(function (response) {
            $scope.employees = response;
        })

    //Fetch employes
    $scope.getEmployees = function () {
        $http.get(BASE_URL + 'api/employees')
            .success(function (response) {
                $scope.employeejson = response;
            })
    }
    //Delete employee
    $scope.delete = function (id) {
        $http.delete(BASE_URL + 'api/employees/' + id)
            .success(function (response) {
                window.location.reload();
            })
    }

    //Toggle edit
    $scope.edit = function (id) {
        $scope.editrecord = id;
        if(id != 0){
            $http.get(BASE_URL + 'api/employees?id=' + id)
                .success(function (response) {
                    $scope.singleEmployee = response;
                })
        }
    }

    //Save employee
    $scope.save = function (id) {
        $http({
            url: BASE_URL + 'api/employee/edit/' + id,
            method: 'POST',
            data: $.param($scope.singleEmployee),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function (response) {
            window.location.reload();
        })
    }

    //Toggle insert table
    $scope.insertstatus = function (number) {
        $scope.insertrecord = number;
    }

    //Insert employee
    $scope.insert = function () {
        $http({
            url: BASE_URL + 'api/employee/insert',
            method: 'POST',
            data: $.param($scope.newEmployee),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(function mySucces(response) {
            window.location.reload();
        }, function myError(response) {
            $scope.insertError = response.status;
        });
    }

})