<?php
include 'header.php';
?>

<div class="login-container" style="width: 300px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); margin-top: 80px;">
    <h2>Login</h2>
    <form id="loginForm">
        <input type="text" id="username" name="username" placeholder="Username" style="width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"><br>
        <input type="password" id="password" name="password" placeholder="Password" style="width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"><br>
        <button type="button" style="width: 100%; background-color: #4caf50; color: white; padding: 14px 20px; margin: 8px 0; border: none; border-radius: 4px; cursor: pointer;" onclick="login()">Login</button>
        <!-- <button type="button" onclick="login()">Login</button> -->
    </form>
</div>

<div id="failureModal" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close" onclick="closeFailureModal()">&times;</span>
        <img src="resources/nas.jpg" alt="Failure Image">
    </div>
</div>

<script>




    function login() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        if (password === "myself") {
            window.location.href = "sequence.php"; // Redirect to sequence.php
        } else {
            var failureModal = document.getElementById("failureModal");
            failureModal.style.display = "block"; // Display the failure modal
            // alert('Ee lo beta nas kat lo');
        }
    }

    function closeFailureModal() {
        var failureModal = document.getElementById("failureModal");
        failureModal.style.display = "none"; // Close the failure modal
    }
</script>




<?php
include 'footer.php';
?>