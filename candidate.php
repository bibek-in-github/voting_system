<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>candidate select </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="candidate.css">
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </label>

    
        <ul>
            <li><button><a href="adminlogin.php">Log Out  </a></button></li>

        </ul><br><br>
    </nav>
    <div class="main">
    <div class="form">
<h2>Add candidate Here </h2>

            <form action="can.php " method="Post" enctype="multipart/form-data">
                 <input type="name" name="name" placeholder="Candidate name" required="required"><br><br>
                <input type="number" name="Age" min="18" title="candidate should be 18 or above" placeholder=" Age"required="required" ><br><br>

                </td>
                </tr>
                <tr>
                    <td>Upload candidate Photo</td>
                    <td><input type="file" name="photo" id="fileField" required="required" /></td>
                </tr>
                <br>
                    <button id="btn">Add</button>
                    
        </div>
    </div>
</div>
</body>

</html>