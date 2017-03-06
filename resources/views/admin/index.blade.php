@extends('layout/layout')

@section('content')
    <div class="col-sm-3 sidenav">
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Employees</a></li>
            <li><a href="#">Menu 2</a></li>
            <li><a href="#">Menu 3</a></li>
        </ul>
    </div>
    <div class="col-sm-9 text-left">
        <h2>Employees Table</h2>
        <table class="table table-bordered text-center" ng-controller="employees">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Hire Date</th>
                    <th>Birth Date</th>
                    <th>Gender</th>
                    <th>Update/Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="employee in employees">
                    <!-- Display employee data -->
                    <td ng-if="editrecord != employee.id">@{{ employee.first_name }}</td>
                    <td ng-if="editrecord != employee.id">@{{ employee.last_name }}</td>
                    <td ng-if="editrecord != employee.id">@{{ employee.hire_date }}</td>
                    <td ng-if="editrecord != employee.id">@{{ employee.birth_date }}</td>
                    <td ng-if="editrecord != employee.id">@{{ employee.gender }}</td>
                    <td ng-if="editrecord != employee.id">
                        <input type="button" class="btn btn-default" ng-click="edit(employee.id)" value="Edit">
                        <input type="button" class="btn btn-danger" ng-click="delete(employee.id)" value="Delete">
                    </td>

                    <!-- Edit employee -->
                    <td ng-if="editrecord == employee.id">
                        <input type="text" ng-model="singleEmployee.first_name" value="@{{ singleEmployee.first_name }}" class="form form-control">
                    </td>
                    <td ng-if="editrecord == employee.id">
                        <input type="text" ng-model="singleEmployee.last_name" value="@{{ singleEmployee.last_name }}" class="form form-control">
                    </td>
                    <td ng-if="editrecord == employee.id">
                        <input type="date" ng-model="singleEmployee.hire_date" value="@{{ singleEmployee.hire_date }}" class="form form-control">
                    </td>
                    <td ng-if="editrecord == employee.id">
                        <input type="date" ng-model="singleEmployee.birth_date" value="@{{ singleEmployee.birth_date }}" class="form form-control">
                    </td>
                    <td ng-if="editrecord == employee.id">
                        <input type="radio" ng-model="singleEmployee.gender" value="M" ng-if="singleEmployee.gender == 'M'" checked>
                        <input type="radio" ng-model="singleEmployee.gender" value="M" ng-if="singleEmployee.gender != 'M'">M
                        <input type="radio" ng-model="singleEmployee.gender" value="F" ng-if="singleEmployee.gender == 'F'" checked>
                        <input type="radio" ng-model="singleEmployee.gender" value="F" ng-if="singleEmployee.gender != 'F'">F
                    </td>
                    <td ng-if="editrecord == employee.id">
                        <input type="button" class="btn btn-success" ng-click="save(employee.id)" value="Save">
                        <input type="button" class="btn btn-default" ng-click="edit(0)" value="Cancel">
                    </td>
                </tr>
                <tr>
                    <td colspan="6" ng-if="insertrecord == 0">
                        <input type="button" value="New Employee" class="btn btn-default" ng-click="insertstatus(1)">
                    </td>
                    <td ng-if="insertrecord != 0">
                        <input type="text" ng-model="newEmployee.first_name" class="form form-control">
                    </td>
                    <td ng-if="insertrecord != 0">
                        <input type="text" ng-model="newEmployee.last_name" class="form form-control">
                    </td>
                    <td ng-if="insertrecord != 0">
                        <input type="date" ng-model="newEmployee.hire_date" class="form form-control">
                    </td>
                    <td ng-if="insertrecord != 0">
                        <input type="date" ng-model="newEmployee.birth_date" class="form form-control">
                    </td>
                    <td ng-if="insertrecord != 0">
                        <input type="radio" ng-model="newEmployee.gender" value="M" >M
                        <input type="radio" ng-model="newEmployee.gender" value="F" >F
                    </td>
                    <td ng-if="insertrecord != 0">
                        <input type="button" class="btn btn-success" ng-click="insert()" value="Insert">
                        <input type="button" class="btn btn-default" ng-click="insertstatus(0)" value="Cancel">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection