<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
        <div ng-app="Demo">

            <div id="DemoController" ng-cloak ng-controller="DemoController" ng-init="init()">

                <table style="width: 100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name <input ng-model="search.name"></th>
                        <th>Surname <input ng-model="search.surname"><br></th>
                        <th>Phone Number <input ng-model="search.phone_number"></th>
                        <th><button ng-click="sortBy('created_at')">Date Added</button></th>
                        <th>Address <input ng-model="search.address"></th>
                        <th>Last review</th>
                        <th><button ng-click="sortBy('reviews_count')">Reviews count</button></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr ng-repeat="user in users | orderBy:propertyName:reverse | filter:search">
                        <td>@{{ user.id }}</td>
                        <td>@{{ user.name }}</td>
                        <td>@{{ user.surname }}</td>
                        <td>@{{ user.phone_number }}</td>
                        <td>@{{ user.created_at | date }}</td>
                        <td>@{{ user.address }}</td>
                        <td>@{{ user.last_review  }}</td>
                        <td>@{{ user.reviews_count }}</td>
                    </tr>
                    </tbody>
                </table>

            </div>

        </div>
        <script type="text/javascript" src="{{ asset('/js/angularjs/angular.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/angular/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/angular/services/DemoService.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/angular/controllers/DemoController.js') }}"></script>
    </body>
</html>
