
<!DOCTYPE html>
	<html>

	<head>
		<title>Address Book</title>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	</head>

	<body>

		<header>
			Address Book
		</header>

		<script>

			var Sam = {
				firstName: "Sam";
				lastName: "Sanchez";
				address: "7777 Nice Street";
			}

			function search() {
				var content = document.getElementbyId("result");
				content.insertAdjacentHTML();
			}

		</script>

		<div>
			<b>Last Name:</b> <input type="text" name="firstName" value=""/><br>
			<button onclick="search()">Search</button>
		</div>

		<p id = "result"></p>

	</body>		
</html>	