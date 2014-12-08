adminApp.controller("CompletedSurveys", function ($rootScope, completedSurveys) {
    var self = this;

    self.list = completedSurveys;

    $rootScope.currentItem = "completedSurveys";
});
