<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
</head>
<body>
<form method="POST" action="api/user">
<label>Name</label></br>
<input type="text" name="name" id="name" value="" /></br>
<label>Email</label></br>
<input type="text" name="email" id="email" value="" required/></br>
<label>Status</label></br>
<input type="number" name="status" id="status" value="" required/></br>
<input type="submit" name="submit" id="submit" value="Submit"/>
</form>
</body>
</html>