<!DOCTYPE html>
<html>
    <head>
        <title>Sysmeh</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            ul {
                list-style: none;
            }
            li {

            }
        </style>
    </head >
    <body ng-app="myApp">
        <div class="container">
            <div class="content">
            <div class="title">
            <ul ng-controller="TodosController">
                <li ng-repeat="todo in todos"> {{ todo.body }} </li>
            </ul>
            </div>
            <p>
                <div ng-controller="DoubleController">
                  Two times <input ng-model="num"> equals {{ double(num) }}
                </div>
            </p>
        </div>
        [!! HTML::script('/vendor/bower_components/angular/angular.js') !!]
        [!! HTML::script('/js/app.js') !!]
    </body>
</html>