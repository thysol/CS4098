$(document).ready(function() {
    $(".expanded").hide();
    
});

var app;
if (app == null)
    app = angular.module('popupApp', ['ngRoute']);

app.controller('actionController', function($scope) {
			    
			    $scope.selectedPathway = -1;
			    //$scope.pathways[selectedPathway].action = [{"@state": "BLOCKED", "req_resource": {"@name": "working_dir", "@value": "{}", "@qualifier": ""}, "@name": "update_status_report", "script": "\"If all tests passed, you are finished; add this to your\n    list of accomplishments for today.  If not, go back and fix any\n    failures uncovered.\""}, {"@state": "NONE", "req_resource": {"@name": "working_dir", "@value": "{}", "@qualifier": ""}, "@name": "complete_commit", "script": "\"You are finished.  Get a cup of coffee!\""}];
				
				$scope.expand = function(){
					$(".expanded, .collapsed").toggle();
				};


			});
