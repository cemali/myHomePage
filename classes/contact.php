<?php 
include("../includes/header.php");
?>

<div class = "FB">
<a href = "http://www.facebook.com/login.php" class = "FB"> <img src = "../images/facebook.png" alt = "Facebook icon"> </a>
</div>
<div class = "TW">
<a class = "TW"> <img src = "../images/twitter.png" alt = "Twitter icon"> </a>
</div>
<div class = "GH">
<a class = "GH"> <img src = "../images/github.png" alt = "github icon"> </a>
</div>
<div class = "GP">
<a class = "GP"> <img src = "../images/google+.png" alt = "google icon"> </a>
</div>



<div class = "container">
  <header class = "codrops-header">


  </header>

    <!-- <aside>  -->
        <section>




            <div class="contact">
                <h1 id="worksite">Contact Information</h1>
                <hr>
                <form class="form" action="mail.php" method="POST">
                    <p class="name"></p>
                        <input type="text" name="name" id="name" required placeholder=" First and Last Name"/>
                        <label for="name">Name</label>
                    
                        <p class="email"></p>
                        <input type="email" name="email" id="email" required placeholder=" your email@example.com "/>
                        <label for="email">Email</label>
                        
                        <p class="phone">Phone</p> <input type="tel" name="phone">

                        <p>Request Phone Call:</p>
                        Yes:<input type="checkbox" value="Yes" name="call"><br />
                        No:<input type="checkbox" value="No" name="call"><br />

                    
                        <p class="web"></p>
                        <input type="text" name="web" id="web" placeholder=" www.example.com "/>
                        <label for="web">WebSite</label>
                        
                        <p>Priority</p>
                        <select name="priority" size="1">
                            <option value="Low">Low</option>
                            <option value="Normal">Normal</option>
                            <option value="High">High</option>
                            <option value="Emergency">Emergency</option>
                        </select>
                        <br />

                        <p>Type</p>
                        <select name="type" size="1">
                            <option value="update">Website Update</option>
                            <option value="change">Information Change</option>
                            <option value="addition">Information Addition</option>
                            <option value="broken">Links not Working</option>
                        </select>
                        <br />
                    
                        <p class="text"></p>
                        <textarea name="message" placeholder="Let Chat" rows="6" cols="25" ></textarea><br />
                    
                    <p class="submit">
                        <input type="submit" value="Send" /><input type="Reset" value="Clear">
                    </p>
                    
                    
                </form>


            </div>
        </section>
  <!--  </aside> -->

    
    
    
    
    
    

<?php
include("../includes/footer.php");
?>