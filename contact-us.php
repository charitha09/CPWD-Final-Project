<?php
    require 'includes/config.php'; 

    include 'includes/header.php';
        
    include 'includes/cover.php';
    
    include 'includes/parth.php';
?>
<div class="margin-set">
    <div id="left-bucket">
        <div id="left-bucket-details">
            <h2>CONTACT US</h2>
            <p>Contact us for more informations on prices, discounts, touristic areas or complaints</p>
            <form method="POST" name="contact-form" action="contact-us.php">
                <div class="input-label"><div class="form-label"><label for="name" >NAME</label></div>
                    <input type="text" placeholder="Enter Your Name" id="name" class="form-input"></div>
                <div class="input-label"><div class="form-label"><label for="l_name">LAST NAME</label></div>
                    <input type="text" placeholder="Enter Your Last Name" id="l_name" class="form-input"></div>
                <div class="input-label"><div class="form-label"><label for="email">EMAIL</label></div>
                    <input type="email" placeholder="Enter Your e-mail" id="email" class="form-input"></div>
                <div class="input-label"><div class="form-label"><label for="tel">PHONE</label></div>
                    <input type="tel" placeholder="Enter Your Phone number" id="tel" class="form-input"></div>
                <div class="form-label form-last-label"><label for="msg">MESSAGE</label></div>
                <textarea id="msg" class="form-last-input form-input" placeholder="Enter Your Message here"></textarea> 
                <button type="submit" value="Submit">SEND</button>
                <button type="reset" value="Reset">RESET</button>                
            </form>
        </div>        
    </div>
    <div id="right-bucket">
        <div class="right-bucket-sub">
            <h2>ADDRESS</h2>
            <a>No,Address,01,Sri Lanka.</a>
        </div>
        <div class="right-bucket-sub">
            <h2>TELEPHONE</h2>
            <a href="tel:number:+941112345678">+941112345678</a>
        </div> 
        <div class="right-bucket-sub">
            <h2>FAX</h2>
            <a href="tel:number:+941112345678">+941112345678</a>
        </div>  
        <div class="right-bucket-sub">
            <h2>E-MAIL</h2>
            <a href="mailto:+941112345678">myvacation@mail.com</a>
        </div>  
    </div>
</div>
<?php
    include 'includes/footer.php';
    
    include 'includes/endtag.php';

    
    
    
?>