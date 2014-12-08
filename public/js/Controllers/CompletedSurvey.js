adminApp.controller("CompletedSurvey", function ($rootScope, survey, surveyQuestions) {
    var self = this;

    self.data = survey;

    self.map = { center: { latitude: survey.lat, longitude: survey.lng }, zoom: 14 };
    self.marker = {
        id: survey.id,
        coords: { latitude: survey.lat, longitude: survey.lng },
        options: {
            title: survey.email,
            labelContent: survey.email + "<br/>" + survey.name + "<br/>" + survey.zip_code,
            labelClass: "alert alert-info"
        }
    };

    self.questionsAndAnswers = _.map(surveyQuestions, function (surveyQuestion) {
        if (surveyQuestion.title != "") {
            return {
                question: surveyQuestion.title,
                answer: survey["question_" + surveyQuestion.id + "_answer"]
            };
        }
    });

    self.hasValidQuestionsAndAnswers = function () {
        return self.questionsAndAnswers.length > 0;
    };

    $rootScope.currentItem = "completedSurveys";
});
