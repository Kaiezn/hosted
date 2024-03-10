<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Successful</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background: #1a1a1a;
            flex-direction: column; /* Added to stack elements vertically */
        }

        .message-container {
            border: 2px solid #6c3483;
            padding: 20px;
            font-size: 20px;
            color: #fff;
            margin-bottom: 20px; /* Added space between message-container and button */
        }

        #back-button {
            background-color: #6c3483;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="message-container">
    <?php
    // Your PHP code to display the message goes here
    echo "You have successfully linked your email to our news and updates.<br>";
    echo "Please email me on gmail or reach out on my social media if you <br>want to commission me for schoolworks!"
    ?>
</div>

<button id="back-button" onclick="goBack()">Back</button>

<script>
    function goBack() {
        window.history.back();
    }
</script>

</body>
</html>
