<?php
include 'header.php';
?>
<div style="margin-top: 50px; text-align: end; margin-left: 30px;">
    <img
        src="resources/hr.jpg"
        alt=""
        id="myImage"
        class="hidden"
    />
    
</div>
<div style="margin: 200px 100px 200px 100px">

      <p>Help Saviour!</p>
      <br />
      <p>
        Listen, Saviour... I need your help, I've turned myself invisible again
        and this time I can't change back!
      </p>
      <br />
      <p>
        I need you to *BURRRP*....Saviour, logon to my computer and find the
        last three secret ingredients to finish my invisible-reverse potion.
        <br />The only problem is, I have no idea what the *BURRRRRRRRP*,
        password was! Help Saviour, Help!
      </p>
    </div>

    <button class="float-button">Let us start</button>
    <script>
      const button = document.querySelector(".float-button");

      function getRandomNumber(max) {
        return Math.floor(Math.random() * (max + 1));
      }

      function moveButton() {
        const windowWidth = window.innerWidth;
        const windowHeight = window.innerHeight;
        const buttonWidth = button.offsetWidth;
        const buttonHeight = button.offsetHeight;

        let newLeft = getRandomNumber(windowWidth - buttonWidth - 20);
        let newTop = getRandomNumber(windowHeight - buttonHeight - 20);

        if (newLeft < 0) {
          newLeft = 0;
        }
        if (newTop < 0) {
          newTop = 0;
        }

        button.style.transition = "left 0.1s out, top 0.1s out";
        button.style.left = `${newLeft}px`;
        button.style.top = `${newTop}px`;
      }

      button.addEventListener("mousemove", moveButton);

      button.addEventListener("click", function () {
        alert("Good start, further challenge awaits!");
        window.location.href = "rules.php";
      });
      moveButton();



      function displayImage() {
  document.getElementById('myImage').classList.remove('hidden');
  setTimeout(() => {
    document.getElementById('myImage').style.opacity = 1;
  }, 50); // Adding a small delay for the transition to work properly
}

// Call the displayImage function after 2 seconds
setTimeout(displayImage, 4000);
    </script>


<?php
include 'footer.php';
?>