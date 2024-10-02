<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my little oak sapling</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            height: 100vh; /* Full height */
            display: flex;
            align-items: center; /* Center vertically */
            position: relative; /* Position for absolute elements */
        }
        .message {
            position: absolute; /* Position the message */
            left: 300px; /* Distance from the left edge */
            top: 50%; /* Center vertically */
            transform: translateY(-50%); /* Adjust vertical center */
            font-size: 250px; /* Larger font size */
            color: black; /* Change text color as desired */
            font-family: 'Dancing Script', cursive; /* Cursive font from Google Fonts */
        }
        .image-container {
            margin-left: auto; /* Push the image to the right */
        }
    </style>
</head>
<body>
    <div class="message">I miss you</div>
    <div class="image-container">
        <img src="{{ asset('images/a.jpg') }}" alt="Oak Sapling" style="max-width: 100%; height: auto;">
    </div>
</body>
</html>
