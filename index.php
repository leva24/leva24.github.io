
<?php
include"header.php"?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title> AngelBerg Resort</title>
 <link rel="icon" href="images/favicon.png" type="image/jpg">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css" />
  <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
	
<body> 
	 
	<br/><br/><br/>
	  <div id="slider" style="width:1300px;height:290px; position:relative; left:0px;">
            <a href="http://www.menucool.com/javascript-image-slider" target="_blank">
                <img src="images/image.jpg" alt="" />
            </a>
            <img src="images/Two Bedroom Beach Villa Suite with Pool - Living Room.jpg" alt="Beautiful" />
            <img src="images/gallery_rooms2.jpg" />
            <img src="images/Oriental-Express-2.jpg" alt="fantastic" />
            <img src="images/Wedding-Pavillion-Renewal-of-Vows.jpg" />
			 <img src="images/goa-hotel-conference-room.jpg" alt="Amazing"/>
			 <img src="images/Lobby.jpg" alt="Amazing"/>
			 
			<br/></div><br/><br/>
	      
	<div id="content">
		<div class="inside" style="position:relative; left:300px;">
			<div id="sidebar">
				<div class="order1">
									</div>
			  <div class="block"  style="position:relative; left:-250px;">
					<h4 style="color:#FFF3F3; text-decoration:blink; font-size:16px;"><u>Resources</u></h4>
				  <div align="justify">
					<iframe width="440" height="300" src="https://www.youtube.com/embed/R83BlU5nnbs" frameborder="0" allowfullscreen></iframe><br />
			        </div>
                  
                    <div align="left" >
                    <br/>
                    <h4 style="color:#FFF3F3; text-decoration:blink; font-size:16px;"><u>Events</u></h4>
                    <br>
                     <br>
                      <br>
                       <br>
                    
                 <marquee direction="up" height="200px" width="300px">   
                
                    <?php
include "connection.php";

	$sql="select * from imp_event ";
	$sq=mysql_query($sql,$con);
     while($row=mysql_fetch_array($sq))
	 {
	 //echo '<div id="pic1" align="left" class="content">';
					 $id1=$row['eid'];
					 

echo'<ul>';
echo '<h2><li style="color:yellow;">Event : '.$row['ename'].'</li></h2>';

echo '<h3><li style="color:white;">Location : '.$row['loca'].'</li><h3>';

echo '<li style="color:white; "> '.$row['edetails'].'</li>';
echo '<h3><li style="color:white;">Date :'.$row['date'].'</li><h3>';
echo'</ul>';





			
			
	       
			 
			?>
			
			
            <br>
			
					
			<?php
					 }
					 
				
//echo'</div>';

?>


     
                    
                    
                    
               </marquee>     
                    
                    
                    </div>
                  


 

        <div class="me">  
        
        </div>	
					
				</div>
			</div>
			<div id="center" style="position:relative; left:-130px;">
				
			  <div class="block" style="">
					<h4 style="color:#FFF3F3; text-decoration:blink; font-size:16px;">Welcome to our hotel</h4>
                    <br/>
                    <br/>
                      <br/>
                    
                    
				<p align="justify" style="color:#F9F4F2; font-size:16px; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; "><strong>Welcome to KTDC</strong> <br /> The Kerala Tourism Development Corporation (KTDC) is a public sector undertaking that conducts and regulates the tourism activities in the Indian state of Kerala.   Its official slogan is "Official host to God's own country." It is one of the most profitable ventures of the Kerala government.KTDC owns more than 40 properties ranging from heritage five-star resorts to budget accommodation, managed under five brands in hotel category and 2 in non hotel hospitality categoryWith sprawling properties, combining modern and traditional architecture in breathtaking exotic islands, luxuriant game reserves, mist-laden hills, palm-fringed beaches and tranquil backwaters; each property under the KTDC Hotels and Resorts is a destination by itself.

Our properties ranging from Premium to Budget are designed to function as icons of Kerala heritage and to readily extend the warmth and excitement of traditional hospitality of Kerala. And an interesting fact is that all KTDC properties share one thing in common - they all assure our guests unique holiday experiences.

Resorts run by KTDC reflect the unique ambience of their location. With a wide range of services to choose from, our guests would not have a dull moment throughout their stay. In our efforts to provide the best to our guests, we make sure that they get what we have promised. And when it comes to sharing the essence of traditional lifestyle such as Ayurveda and Panchakarma, ours is among the best-equipped in Kerala. And for those who want to travel with us, our tour packages offer plenty of choices to make.
So, just let us know when you are coming to Kerala! A most warm welcome!
</p>
				</div>
				<div class="block">
					
				</div>
                
                
                
               
			
            </div>
             
                <div id="photogallery">
				<div class="photos">
					<img src="images/photogallery_title.gif" alt="" width="270" height="62" id="title" />
					<img src="images2/boat.jpg" alt="" width="158" height="100" />
					<span></span>
					<img src="images2/5743544053_ddaab6eef3_b.jpg" alt="" width="158" height="100" />
					<span></span>
					<img src="images2/925036779s.jpg" alt="" width="158" height="100" />
					<span></span>
					<img src="images2/kadhakali-login.jpg" alt="" width="158" height="100" />
					<span></span>
					<a href="gallery.php" id="all"><img src="images/all.gif" alt="" width="134" height="21" /></a>		 
				</div>
			</div>
           
				
			</div>
		</div>	
	</div>
	<?php
include"footer.php"?>
</body>
</html>

