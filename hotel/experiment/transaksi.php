<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Example</title>
    <style>
        /* Styling for the overlay background */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
        }

        /* Styling for the popup box */
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Styling for the close button */
        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<!-- Link to open the popup -->
<a href="#" onclick="openPopup()">Open Popup</a>

<!-- Overlay background -->
<div class="overlay" id="overlay" onclick="closePopup()"></div>

<!-- Popup box -->
<div class="popup" id="popup">
    <span class="close" onclick="closePopup()">&times;</span>
    <h2>Hello, this is a popup!</h2>
    <p>This is some content inside the popup.</p>
</div>

<!-- JavaScript to handle popup functionality -->
<script>
    function openPopup() {
        // Display the overlay and popup
        document.getElementById('overlay').style.display = 'block';
        document.getElementById('popup').style.display = 'block';
    }

    function closePopup() {
        // Hide the overlay and popup
        document.getElementById('overlay').style.display = 'none';
        document.getElementById('popup').style.display = 'none';
    }
</script>

</body>
</html>
