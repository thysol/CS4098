<?php
	header("Content-Type: application/json");
	if ($_GET["event"] == "GETLIST") {
		if ($_GET["login_name"] == "exists") {
			echo "{\"process_table\": {\"process\": [{\"action\": [{\"@state\": \"BLOCKED\", \"req_resource\": {\"@name\": \"working_dir\", \"@value\": \"{}\", \"@qualifier\": \"\"}, \"@name\": \"update_status_report\", \"script\":\"\\\"If all tests passed, you are finished; add this to your\\n    list of accomplishments for today.  If not, go back and fix any\\n    failures uncovered.\\\"\"}, {\"@state\": \"NONE\", \"req_resource\": {\"@name\": \"working_dir\", \"@value\": \"{}\", \"@qualifier\": \"\"}, \"@name\": \"complete_commit\", \"script\": \"\\\"You are finished.  Get a cup of coffee!\\\"\"}], \"@status\": \"2\", \"@pid\": \"0\", \"iteration\": {\"action\": [{\"@state\": \"BLOCKED\", \"req_resource\": {\"@name\": \"test_user\", \"@value\": \"{}\", \"@qualifier\": \"\"}, \"@name\": \"login_as_testuser\", \"script\": \"\\\"Login to test host as test_user.\\\"\"}, {\"@state\": \"NONE\", \"req_resource\": {\"@name\": \"working_dir\", \"@value\": \"{}\", \"@qualifier\": \"\"}, \"@name\": \"delete_old_workspace\", \"script\": \"\\\"Run `cvs release working_dir; rm -r working_dir.\\\"\"}, {\"@state\": \"AVAILABLE\", \"prov_resource\": {\"@name\": \"working_dir\", \"@value\": \"{}\", \"@qualifier\": \"\"}, \"@name\": \"checkout_workspace\", \"script\": \"\\\"Run `cvs checkout test_module'.\\\"\"}, {\"@state\": \"NONE\", \"req_resource\": {\"@name\": \"working_dir\", \"@value\": \"{}\", \"@qualifier\": \"\"}, \"@name\": \"run_tests\", \"script\": \"\\\"Run `make test' in `working_dir/src' directory.\\\"\"}]}, \"@model\": \"/home/michael/peos/models/test_commit.pml\"}, {\"action\": [{\"@state\": \"BLOCKED\", \"req_resource\": {\"@name\": \"working_dir\", \"@value\": \"{}\", \"@qualifier\": \"\"}, \"@name\": \"update_status_report\", \"script\": \"\\\"If all tests passed, you are finished; add this to your\\n    list of accomplishments for today.  If not, go back and fix any\\n    failures uncovered.\\\"\"}, {\"@state\": \"NONE\", \"req_resource\": {\"@name\": \"working_dir\", \"@value\": \"{}\", \"@qualifier\": \"\"}, \"@name\": \"complete_commit\", \"script\": \"\\\"You are finished.  Get a cup of coffee!\\\"\"}], \"@status\": \"2\", \"@pid\": \"1\", \"iteration\": {\"action\": [{\"@state\": \"BLOCKED\", \"req_resource\": {\"@name\": \"test_user\", \"@value\": \"{}\", \"@qualifier\": \"\"}, \"@name\": \"login_as_testuser\", \"script\": \"\\\"Login to test host as test_user.\\\"\"}, {\"@state\": \"NONE\", \"req_resource\": {\"@name\": \"working_dir\", \"@value\": \"{}\", \"@qualifier\": \"\"}, \"@name\": \"delete_old_workspace\", \"script\": \"\\\"Run `cvs release working_dir; rm -r working_dir.\\\"\"}, {\"@state\": \"AVAILABLE\", \"prov_resource\": {\"@name\": \"working_dir\", \"@value\": \"{}\", \"@qualifier\": \"\"}, \"@name\": \"checkout_workspace\", \"script\": \"\\\"Run `cvs checkout test_module'.\\\"\"}, {\"@state\": \"NONE\", \"req_resource\": {\"@name\": \"working_dir\", \"@value\": \"{}\", \"@qualifier\": \"\"}, \"@name\": \"run_tests\", \"script\": \"\\\"Run `make test' in `working_dir/src' directory.\\\"\"}]}, \"@model\": \"/home/michael/peos/models/test_commit.pml\"}, {\"action\": [{\"@state\": \"unknown syscall\", \"req_resource\": {\"@name\": \"working_dir\", \"@value\": \"{}\", \"@qualifier\": \"\"}, \"@name\": \"update_status_report\", \"script\": \"\\\"If all tests passed, you are finished; add this to your\\n    list of accomplishments for today.  If not, go back and fix any\\n    failures uncovered.\\\"\"}, {\"@state\": \"unknown syscall\", \"req_resource\": {\"@name\": \"working_dir\", \"@value\": \"{}\", \"@qualifier\": \"\"}, \"@name\": \"complete_commit\", \"script\": \"\\\"You are finished.  Get a cup of coffee!\\\"\"}], \"@status\": \"2\", \"@pid\": \"3\", \"iteration\": {\"action\": [{\"@state\": \"unknown syscall\", \"req_resource\": {\"@name\": \"test_user\", \"@value\": \"{}\", \"@qualifier\": \"\"}, \"@name\": \"login_as_testuser\", \"script\": \"\\\"Login to test host as test_user.\\\"\"}, {\"@state\": \"unknown syscall\", \"req_resource\": {\"@name\": \"working_dir\", \"@value\": \"{}\", \"@qualifier\": \"\"}, \"@name\": \"delete_old_workspace\", \"script\": \"\\\"Run `cvs release working_dir; rm -r working_dir.\\\"\"}, {\"@state\": \"unknown syscall\", \"prov_resource\": {\"@name\": \"working_dir\", \"@value\": \"{}\", \"@qualifier\": \"\"}, \"@name\": \"checkout_workspace\", \"script\": \"\\\"Run `cvs checkout test_module'.\\\"\"}, {\"@state\": \"unknown syscall\", \"req_resource\": {\"@name\": \"working_dir\", \"@value\": \"{}\", \"@qualifier\": \"\"}, \"@name\": \"run_tests\", \"script\": \"\\\"Run `make test' in `working_dir/src' directory.\\\"\"}]}, \"@model\": \"/root/peos-master/models/test_commit.pml\"}]}}";
		}
		else {
			echo '{"error" : "User does not exist", "error_code" : 1}';
		}
	} elseif($_GET["event"] == "CREATE") { 
		echo "API not implemented";
	}
	else { 
		$x = $_GET;
		if ($_GET["event"] == "START") {
			$x["new_state"] = "Started";
		}
		else if ($_GET["event"] == "FINISH") {
			$x["new_state"] = "Finished";
		}
		else if ($_GET["event"] == "SUSPEND") {
			$x["new_state"] = "Suspended";
		}
		else if ($_GET["event"] == "ABORT") {
			$x["new_state"] = "Aborted";
		}
		echo json_encode($x);
	}
?>