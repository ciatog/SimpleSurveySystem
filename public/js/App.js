var adminApp = angular.module("admin", ["ngRoute", "ui.bootstrap", "uiGmapgoogle-maps"]);

adminApp.config(function ($locationProvider, $routeProvider) {
    $routeProvider.
        when("/survey", {
            templateUrl: "/templates/Survey.html",
            controller: "Survey",
            controllerAs: "survey",
        }).
        when("/completed-surveys", {
            templateUrl: "/templates/CompletedSurveys.html",
            controller: "CompletedSurveys",
            controllerAs: "completedSurveys",
        }).
        when("/completed-surveys/:id", {
            templateUrl: "/templates/CompletedSurvey.html",
            controller: "CompletedSurvey",
            controllerAs: "completedSurvey",
            resolve: {
                survey: function ($route, completedSurveys) {
                    return _.find(completedSurveys, function (survey) {
                        return survey.id == $route.current.params.id;
                    });
                }
            }
        }).
        otherwise({
            redirectTo: "/completed-surveys"
        });
});
