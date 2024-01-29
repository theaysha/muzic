<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Basic styles for the navbar */
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #333; /* Background color for the navbar */
            overflow: hidden;
        }

        /* Style for each list item in the navbar */
        li {
            float: left;
        }

        /* Style for the links in the navbar */
        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Add underline effect on hover */
        li a:hover {
            border-bottom: 2px solid white; /* Underline color and thickness on hover */
        }
    </style>
    <title>Underlined Navbar Example</title>
</head>
<body>
    <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="#">PODCAST</a></li>
        <li><a href="#">PAGES</a></li>
        <li><a href="#">ABOUT US</a></li>
        <li><a href="#">CONTACTS</a></li>
    </ul>
</body>
</html>
