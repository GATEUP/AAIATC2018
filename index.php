<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
	<title>Find your AAI ATC 2018 Marks | Gateup.in</title>
    <!-- http://www.webgeekly.com/tutorials/jquery/how-to-switch-css-files-on-the-fly-using-jquery/ -->
    <link id="dynamic-css" rel="stylesheet" type="text/css" href="gatestyles-dark.css">
</head>
<body>
<div id="my-header">
<table style="width: 100%;">
	<tr>
		<td id="input-prompt" style="width: 50%; text-align: center;" align="center">
			<div align="center">
				<h1>For AAI ATC 2018.</h1>
				<h1>Instructions:</h1>
				<nav>
				    <li>Login on <a target="_blank" href="http://appsgate.iisc.ernet.in/">(this page).</a></li>
				    <span>»</span>
				    <li>Click on <img src="view-response-button.png" alt="view-response-button.png"></li>
				    <span>»</span>
				    <li>Copy the URL from the address bar</li>
				    <span>»</span>
				    <li>Paste it in the box below</li>
				</nav>
				<br />
				<input type="url" class="has-tooltip" id="text-url" value = "" placeholder="Enter your responses URL here..." onpaste="setTimeout( function(){submitURL();}, 100);" />
				<br />
				<p class="notification">Answers are verified using <a href="http://www.gate.iisc.ernet.in/?page_id=1139" target="_blank">Official keys.</a></p>
				<a href="#" id="form-submit" onclick="submitURL()">Submit</a>
			</div>
		</td>
		<td style="width: 50%;" align="center">
			<table id="table-results" class="table-results">
				<!-- <tr><td></td><td></td><td></td><td></td></tr> -->
				<tr><th>Set</th><td id="set">-</td><th colspan="2"><a id="rank-link" href="VisualizeMarks.php">(Click here for Rank)</a></th></tr>

				<tr class="table-top-header"><th></th><th>1 mark</th><th>2 mark</th><th>Total</th></tr>
				<tr>
					<th>Attempted</th>
					<td id="attempted-1-mark">-</td>
					<td id="attempted-2-mark">-</td>
					<td id="attempted-total">-</td>
				</tr>
				<tr>
					<th>Correct</th>
					<td id="correct-1-mark">-</td>
					<td id="correct-2-mark">-</td>
					<td id="correct-total">-</td>
				</tr>

				<tr class="table-top-header"><th></th><th>+ve</th><th>-ve</th><th>Total</th></tr>
				<tr>
					<th>Marks </th>
					<td id="marks-positive">-</td>
					<td id="marks-negative">-</td>
					<td id="marks-total">-</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</div>


<div id="settings-box-container">
    <div id="settings-box">
        <table>
        <tr>
            <td>
                <!-- <h1 id="settings-box-heading">Settings</h1> -->
                <h2>Theme</h2>
                <span>
                    <input type="radio" name="theme" class="radio" id="theme-dark" checked onclick="set_theme()">
                    <label for="theme-dark">Dark</label>
                </span><br/>
                <span>
                    <input type="radio" name="theme" class="radio" id="theme-light" onclick="set_theme()">
                    <label for="theme-light">Light</label>
                </span>
            </td>
            <td><div id="collapse-button" onclick="toggle_settings_box()"></div></td>
        </tr>
        </table>
    </div>
</div>

<div id="responses"></div>
<div align="center" class="credits">
    <div class="tabular"><p>Code:<br/><a href="https://github.com/GATEUP/AAIATC2018">[Github]</a></p></div>
    <div class="tabular"><p>Author: Aditya Agrawal <br/><a href="https://www.facebook.com/profile.php?id=1644835049">[Facebook]</a> <a href="mailto:agar.pragy@gmail.com">[email]</a></p></div>
  
</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="process.js"></script>
	<script src="keys.js"></script>
	<script>
		do_initialize();
	</script>
</body>
</html>
