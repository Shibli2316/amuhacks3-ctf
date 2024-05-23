<?php
include 'header.php';
?>

<div style="text-align: center; margin-top: 80px;">

    <p style="margin-bottom: 20px;">Download and Decode:</p>
    <form action="resources/firsttaskhashes/hash1.txt" method="get">
        
        <button style="background-color: DodgerBlue; border: none; color: white; padding: 12px 30px; cursor: pointer; font-size: 20px; border-radius: 150%;" onmouseover="this.style.backgroundColor='RoyalBlue'" onmouseout="this.style.backgroundColor='DodgerBlue'"><i class="fa fa-download"></i> Download</button>
    </form>
</div>


<div style="margin-top: 150px; text-align: center;">
<!-- <video src="resources/video6170198404535160478.mp4" autoplay>
video
</video> -->
    
<video autoplay loop muted>
        <source src="resources/video6170198404535160478.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    
</div>



<?php
include 'footer.php';
?>