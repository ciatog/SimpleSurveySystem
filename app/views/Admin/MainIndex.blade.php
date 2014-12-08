<!DOCTYPE html>
<html lang="en" ng-app="admin">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="SHORTCUT ICON" href="{$base_url}favicon.ico" type="image/x-icon" />

        <title>Simple Survey Sample</title>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />

        <link href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet" type="text/css" />

        <link href="{{ URL::asset('css/Admin.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#completed-surveys">Simple Survey Sample</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ URL::to('/survey') }}" target="_blank">View Survey Page</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li ng-class="{active: currentItem === 'survey'}"><a href="#survey">Edit Survey</a></li>
                        <li ng-class="{active: currentItem === 'completedSurveys'}"><a href="#completed-surveys">Completed Surveys</a></li>
                    </ul>
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <div class="col-md-12" ng-view ng-cloak></div>
                </div>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.3/angular.min.js" type="text/javascript"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.3/angular-route.min.js" type="text/javascript"></script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.12.0/ui-bootstrap.min.js" type="text/javascript"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.12.0/ui-bootstrap-tpls.min.js" type="text/javascript"></script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js" type="text/javascript"></script>

        <script src='//maps.googleapis.com/maps/api/js?sensor=false'></script>

        <script src="{{ URL::asset('bower_components/angular-google-maps/dist/angular-google-maps.min.js') }}"></script>

        <script src="{{ URL::asset('js/App.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/Services/SurveyService.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/Controllers/CompletedSurvey.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/Controllers/CompletedSurveys.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/Controllers/Survey.js') }}" type="text/javascript"></script>

        <script type="text/javascript">
            angular.module("admin").value("surveyQuestions", {{ $surveyQuestions }});
            angular.module("admin").value("completedSurveys", {{ $completedSurveys }});
        </script>
    </body>
</html>
