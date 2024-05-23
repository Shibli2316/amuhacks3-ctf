<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      .navbar {
        display: flex;
        justify-content: space-between; /* Align items to the start and end of the flex container */
        align-items: center; /* Center items vertically */
        padding: 10px; /* Add some padding for spacing */
        background-color: black;
      }

      .top-left {
        order: -1; /* Move this image to the left */
      }

      .top-right {
        order: 1; /* Move this image to the right */
      }

      .navbar2 {
        display: flex;
        justify-content: center; /* Center items horizontally */
        align-items: center; /* Center items vertically */
        height: 60px; /* Set a fixed height for the navbar */
        background-color: black; /* background-color: #333; Add a background color */
      }

      .center {
        max-width: 100%; /* Ensure the image does not exceed the width of the navbar */
      }
      .float-button {
        position: absolute;
        bottom: 40px;
        right: 40px;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: #007bff;
        color: #fff;
        text-align: center;
        font-size: 16px;
        box-shadow: 2px 2px 3px #999;
        cursor: pointer;
      }
      footer {
            text-align: center;
            background-color: #f2f2f2;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .float-button {
        position: absolute;
        bottom: 40px;
        right: 40px;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: #007bff;
        color: #fff;
        text-align: center;
        font-size: 16px;
        box-shadow: 2px 2px 3px #999;
        cursor: pointer;
      }

      #myImage {
  opacity: 0; /* Initially hide the image */
  max-width: 100%;
  max-height: 100%;
  transition: opacity 1s ease-in; /* Transition for opacity with ease-in effect */
}

.hidden {
  display: none;
}
    </style>
  </head>
  <body>
    <div class="navbar">
      <img src="resources/GdscLogo.png" class="top-left" height="20" />
      <img src="resources/AmuLogo.png" class="center" height="40" />
      <img src="resources/CssLogo.png" class="top-right" height="50" />
    </div>

    <div class="navbar2">
      <img src="resources/ah3.png" class="center" height="100" />
    </div>

    
