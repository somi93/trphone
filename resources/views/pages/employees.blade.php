@extends('layout/layout')

@section('content')
    <div class="col-sm-12 text-left" ng-controller="employees">
        <h2>
            <ul class="nav nav-pills nav-stacked">
                <li><span>Employees Table</span></li>
                <li class="active"><button class="btn btn-default" ng-click="getEmployees()">Apply Data to Table</button></li>
            </ul>
        </h2>
        <table class="table table-bordered text-center">
            <thead>
            <tr>
                <th>Manager Full Name</th>
                <th>Manager department start date</th>
                <th>Department Name</th>
                <th>Employee Full name</th>
                <th>Employee Title</th>
                <th>Employee salary</th>
                <th>Employee department start date</th>
            </tr>
            </thead>
            <tbody>
            <tr ng-repeat="employee in employeejson">
                <!-- Display employee data -->
                <td>@{{ employee.manager_first_name+" "+employee.manager_last_name }}</td>
                <td>@{{ employee.manager_hire_date }}</td>
                <td>@{{ employee.name }}</td>
                <td>@{{ employee.first_name+" "+employee.last_name }}</td>
                <td>@{{ employee.hire_date }}</td>
                <td>@{{ employee.birth_date }}</td>
                <td>@{{ employee.gender }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection