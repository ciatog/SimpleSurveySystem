adminApp.factory("SurveyService", function ($http, $q) {
    return {
        update: function(model) {
            return $http({
                method: "POST",
                url: "/admin/survey",
                data: model
            });
        }
    };
});
