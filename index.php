<!DOCTYPE html>
<html>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <body>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-3" ng-app="myApp" ng-controller="customersCtrl"> 
                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <div class="modal-header col-xs-12">
                                    <span ng-click="close();" class="close">&times;</span>
                                    <div class="col-xs-3">
                                        <img class="img-responsive center-block" ng-src="{{selectedTeam.src}}"/>
                                    </div>
                                    <div class="col-xs-9">
                                        <h2>{{selectedTeam.name}}</h2>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3><b>Player</b></h3>
                                        </div>
                                        <div class="col-md-6">
                                            <h3><b>Shirt Number</b></h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <hr/>
                                    </div>
                                    <div class="row" ng-repeat="x in team">
                                        <div class="col-md-6 panel no-radius"><p class="lead">{{ x.name }}</p></div>    
                                        <div class="col-md-6 panel no-radius"><p class="lead">{{ x.shirt_number }}</p></div>                
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 col-sm-offset-1">
                            <form>
                                <div class="form-group">
                                    <div class="input-group no-radius">
                                        <div class="input-group-addon no-radius"><i class="fa fa-search"></i></div>
                                        <input type="text" class="form-control no-radius" placeholder="Search for da squad :)" ng-model="searchTeam">
                                    </div>      
                                </div>
                            </form>
                        </div>
                        <table id="table" class="text-center">
                            <thead>
                                <tr>
                                    <th>
                                        <a href="#" ng-click="sortType = 'position'; sortReverse = !sortReverse">
                                            # 
                                            <span ng-show="sortType == 'position' && !sortReverse" class="fa fa-caret-down"></span>
                                            <span ng-show="sortType == 'position' && sortReverse" class="fa fa-caret-up"></span>
                                        </a>
                                    </th>
                                    <th>

                                    </th>
                                    <th>
                                        <a href="#" ng-click="sortType = 'team.name'; sortReverse = !sortReverse">
                                            Team
                                            <span ng-show="sortType == 'team.name' && !sortReverse" class="fa fa-caret-down"></span>
                                            <span ng-show="sortType == 'team.name' && sortReverse" class="fa fa-caret-up"></span>
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" ng-click="sortType = 'overall_played'; sortReverse = !sortReverse">
                                            MP 
                                            <span ng-show="sortType == 'overall_played' && !sortReverse" class="fa fa-caret-down"></span>
                                            <span ng-show="sortType == 'overall_played' && sortReverse" class="fa fa-caret-up"></span>
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" ng-click="sortType = 'overall_win'; sortReverse = !sortReverse">
                                            Won 
                                            <span ng-show="sortType == 'overall_win' && !sortReverse" class="fa fa-caret-down"></span>
                                            <span ng-show="sortType == 'overall_win' && sortReverse" class="fa fa-caret-up"></span>
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" ng-click="sortType = 'overall_draw'; sortReverse = !sortReverse">
                                            Draws 
                                            <span ng-show="sortType == 'overall_draw' && !sortReverse" class="fa fa-caret-down"></span>
                                            <span ng-show="sortType == 'overall_draw' && sortReverse" class="fa fa-caret-up"></span>
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" ng-click="sortType = 'overall_loose'; sortReverse = !sortReverse">
                                            Lost 
                                            <span ng-show="sortType == 'overall_loose' && !sortReverse" class="fa fa-caret-down"></span>
                                            <span ng-show="sortType == 'overall_loose' && sortReverse" class="fa fa-caret-up"></span>
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" ng-click="sortType = 'overall_goals_scored'; sortReverse = !sortReverse">
                                            Goals 
                                            <span ng-show="sortType == 'overall_goals_scored' && !sortReverse" class="fa fa-caret-down"></span>
                                            <span ng-show="sortType == 'overall_goals_scored' && sortReverse" class="fa fa-caret-up"></span>
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" ng-click="sortType = 'goal_difference'; sortReverse = !sortReverse">
                                            Difference 
                                            <span ng-show="sortType == 'goal_difference' && !sortReverse" class="fa fa-caret-down"></span>
                                            <span ng-show="sortType == 'goal_difference' && sortReverse" class="fa fa-caret-up"></span>
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" ng-click="sortType = 'points'; sortReverse = !sortReverse">
                                            Points 
                                            <span ng-show="sortType == 'points' && !sortReverse" class="fa fa-caret-down"></span>
                                            <span ng-show="sortType == 'points' && sortReverse" class="fa fa-caret-up"></span>
                                        </a>
                                    </th>
                                    <th>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="x in records | orderBy:sortType:sortReverse | filter:searchTeam">
                                    <td>{{ x.position }}</td>    
                                    <td><img src="{{ x.team.logo }}" width="28px" height="28px" class="img-resposnive center-block" /></td>
                                    <td>{{ x.team.name }}</td>                
                                    <td>{{ x.overall_played }}</td>
                                    <td>{{ x.overall_win }}</td>
                                    <td>{{ x.overall_draw }}</td>
                                    <td>{{ x.overall_loose }}</td>
                                    <td>{{ x.overall_goals_scored }}</td>
                                    <td>{{ x.goal_difference }}</td>
                                    <td>{{ x.points }}</td>
                                    <td><button class="btn btn-xs btn-info round" ng-click="teamTask(x.team_id); selectedTeam.src = x.team.logo; selectedTeam.name = x.team.name;">&plusmn;</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>    
            </div>
        </section>

        <script>

            var app = angular.module('myApp', []);
            var modal = document.getElementById('myModal');
            var span = document.getElementsByClassName("close")[0];

            app.controller('customersCtrl', function($scope, $http) {
                $scope.sortType = 'position';
                $scope.sortReverse = false;
                $scope.searchTeam = '';

                $http.get("https://api.soccerama.pro/v1.2/standings/season/1144?api_token=HOLCAStI6Z0OfdoPbjdSg5b41Q17w2W5P4WuoIBdC66Z54kUEvGWPIe33UYC")
                    .then(function (response) {
                    $scope.records = response.data.data[0].standings.data;
                    console.log($scope.records);

                    $scope.teamTask = function(team_id){
                        $http.get("https://api.soccerama.pro/v1.2/players/team/"+team_id+"?api_token=HOLCAStI6Z0OfdoPbjdSg5b41Q17w2W5P4WuoIBdC66Z54kUEvGWPIe33UYC")
                            .then(function (team) {
                            $scope.team = team.data.data;
                        });
                        modal.style.display = "block";
                    };

                    $scope.close = function(){
                        modal.style.display = "none";
                    };

                    $scope.selectedTeam = {};

                });    
            });

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

            span.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>


        <style>
            .round{
                background-color: rgba(255, 255, 255, 0);
                border: none;
                color: #222;
                border-radius: 0px;
                color: #222;
                font-size: 16px;
                font-weight: bolder;
            }

            .no-radius{
                border-radius: 0px;
            }

            #table{
                border: 1px solid #eee;
                padding-left: 10px !important;
                padding-right: 10px !important;
                padding-bottom: 15px !important;
                padding-top: 15px !important;


            }
            table, th , td {
                border-bottom: 1px solid #eee;
                border-collapse: collapse;
                padding: 10px;
            }
            th{
                color: #555;
            }
            table tr {
                background-color: #ffffff;
            }
            table tbody tr:hover {
                background-color: #f5f5f5;
            }

            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                padding-top: 100px; /* Location of the box */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */

            }

            .modal-content {
                position: relative;
                background-color: #fefefe;
                margin: auto;
                padding: 0;
                border: 1px solid #888;
                width: 80%;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
                -webkit-animation-name: animatetop;
                -webkit-animation-duration: 0.4s;
                animation-name: animatetop;
                animation-duration: 0.4s;
                border-radius: 0px;

            }

            @-webkit-keyframes animatetop {
                from {top:-300px; opacity:0} 
                to {top:0; opacity:1}
            }

            @keyframes animatetop {
                from {top:-300px; opacity:0}
                to {top:0; opacity:1}
            }

            .close {
                color: #222;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }

            .modal-header {
                border-bottom: solid 1px #eee;
                color: #222;
                padding-top: 16px;
                padding-bottom: 16px;
            }

            .modal-body {padding: 2px 16px;}

            .modal-footer {
                padding: 2px 16px;
                border-top: solid 1px #eee;
                color: #222;
            }

            .panel{
                min-height: 72px;
            }
        </style>

    </body>
</html>
