<!DOCTYPE html>
<html>
<head>
	<title>Royal Girls Academy</title>
</head>
<body>
	<form method="post" action="do_new_student.php" class="register-student-form">
		<input type="text" name="firstname" placeholder="First Name">
		<input type="text" name="middle_name" placeholder="Middle Name">
		<input type="text" name="lastname" placeholder="Last Name">
		<input type="text" name="parent_id" placeholder="Parent ID">
		<input type="text" name="class_id" placeholder="Class ID">
		<input type="text" name="class_section_id" placeholder="Class Section ID">
		<input type="text" name="b_day" placeholder="Birth Day">
		<input type="text" name="gender" placeholder="Gender">
		<input type="text" name="password" placeholder="Student Password">
		<input type="text" name="email" placeholder="Email">
		<input type="text" name="dormitory_id" placeholder="Dormitory ID">
		<input type="file" name="photo" placeholder="Student Photo">
		<button>Submit</button>
	</form>

	<script type="text/javascript" src="../plugins/jQuery/jquery-2.2.3.min.js"></script>

	<script type="text/javascript">
		$("body").on("submit", ".register-student-form", function () {
			var url = $(this).attr("action")
			var formData = new FormData($(this)[0])

			$.ajax({
	                    url: url,
	                    type: 'POST',
	                    data: formData,
	                    async: true,
	                    error: function () {

					    },
	                    success: function (data) {
	                    	alert("Student Registered")
	                    	console.log(data)
	                    },
	                    cache: false,
	                    contentType: false,
	                    processData: false
	                })
			return false
		})
	</script>

</body>
</html>