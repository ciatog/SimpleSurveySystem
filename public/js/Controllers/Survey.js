adminApp.controller("Survey", function ($rootScope, SurveyService, surveyQuestions) {
    var self = this;

    self.questions = surveyQuestions;

    self.submitQuestionUpdates = function () {
        SurveyService.update(self.questions).then(
            function () {
                alert("Questions updated successfully");
            },
            function (err) {
                alert("There was a problem saving your updates: " + err.data);
            }
        );
    };

    $rootScope.currentItem = "survey";
});
