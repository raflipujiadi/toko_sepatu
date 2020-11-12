<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo ($_SESSION['level']) ?></title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- Bulma Version 0.8.x-->
	
    <link rel="stylesheet" href="../../assets/css/bulma/bulma.min.css">
    <link rel="stylesheet" href="../../assets/css/bulma/admin.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bulma.min.css">
	<script type="text/javascript">
		$(document).ready(function() {
    $('#example').DataTable();
} );
	</script>
</head>

<body>