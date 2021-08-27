<head>
<title>How to Implement OTP SMS Mobile Verification in PHP with TextLocal</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>

	<div class="container">
		<div class="error"></div>
		<form id="frm-mobile-verification">
			<div class="form-heading">OTP Verification</div>

			<div class="form-row">
				<input type="number" id="otp" class="form-input"
					placeholder="Enter OTP">
			</div>

			<input type="button" class="btnSubmit" value="OTP"
				onClick="enter()">
		</form>
	</div>

    <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="verification.js"></script>
</body>

