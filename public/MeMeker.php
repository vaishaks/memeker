<!doctype html>

<!-- ==========================================================================
Use your HTML and CSS swagger to mix and match elements to make a webpage featuring a meme to conquer all internet memes. You might wonder what is a meme? Well a meme refers to an internet phenomena: think viral videos, web celebs, fuzzy animals… So let your inner squirrel, serious cat, Brony or Ryan Gosling “Hey girl,” shine. 
============================================================================ -->

<!--
Let's get started.

1) READ THROUGH THE COMMENTS. This is a comment. Everything inside of this tag for HTML or '/*' for CSS, is not processed as code, but as text comments about the code. For this project the comments will give you instructions, hints and guides to completing the project, so skim down through the comments to get an understanding of what you are being asked to do.

2) GET ORIENTED IN THE CODE. HTML is made up of tags that look like this <p> </p>. The tags tell you something about the information contained between them. Click on the tags in the code on this side of the editor to get a description of what each tag is for.

-->


<html>
  <head>
    <meta charset="utf-8">

<!-- 
Start by changing the <title> element to a witty one for your webpage. Typically, the title will show up at the top of your browser window and will be searchable in search engines like Google. In Thimble, the title shows up in the tab above the pane on the right side of the editor.
-->
    <title>MeMeker</title>
  </head>
  <body>
    
    <div id="meme">
<!--
Now change out the image below with an image of your choice. Images are defined in HTML with the <img> tag. <img> is one of the few weird tags that you don't have to close. Every <img> tag has a src attribute where you include the URL to the image you want to use. To change the image below, replace the content within the quotes with a url of another image. If you are looking for images a good place to start is http://search.creativecommons.org/. Here you can find images that are available under the Creative Commons license. To get the URL of an image, right click or CTRL-click and select "Copy Image Address", or within Flickr, select Share, the copy the image URL.
 -->      
 	<?php
		$url = $_POST['url'];
		echo "<img src = $url>";
	?>

<!-- 
The following text is styled with an <h1> tag, where "h" stands for header and "1" means most important, followed by h2, h3, etc. It is used to build an outline or hierarchy into your page. Think about changing the text in the <h1> tag to something that will really grab your readers' attention.
-->
	<?php
		$top_caption = $_POST['top_caption'];
      	echo "<h1>$top_caption</h1>"
    ?>       
<!--
Now that you are a master of header tags, give your meme a sub-header by editing the text of the <h2> tag below. 
-->
	<?php
		$bottom_caption = $_POST['bottom_caption'];
      	echo "<h1>$bottom_caption</h1>"
    ?>    
    </div>
    
    
    <style>
/*
You've played with HTML, now try tinkering with the look of your page. To do so we will use CSS, which stands for Cascading Style Sheets,and lets you add a touch of style to your pages. All of the stuff within the <style> tags is CSS. You can look for the name of the corresponding HTML tag to change how it is styled. For example, to change the style of <h1>, look for "h1" below.
*/

      body {
        background-color: red;
      }
      
/*
Try tinkering with the different kinds of style attributes. Maybe you want to change the formatting of the page by upping the size of the margins, or perhaps you are more interested in reducing the font size. Be playful and remember that things can easily be undone or redone by pressing the undo and redo buttons on the top of the editor.
*/
      
      #content {
        margin: 0px auto;
      }
      
      #meme {
        position: relative;
        margin: 0px auto;
      }
      
      #meme, img {
        width: 560px;
      }

      h1, h2 {
        position: relative;
        z-index: 100;
        text-align: center;
        margin: 0 auto;
        text-shadow: 5px 5px 0px #000000;
        filter: dropshadow(color=#000000, offx=5, offy=5);
      }
      
/*
Finally, let's fine tune your meme. Change the position of the headings by adjusting the numbers in "padding-top" attribute. Here they are listed as px- which stands for pixels. Make incremental changes to see how the headings move. You can also change the colors, fonts, etc.
*/     
      
      h1 {
        color: white;
        font-family: Impact;
        font-size: 68px;
        padding-top: 20px;
      }
      
      h2 {
        color: white;
        font-family: Impact;
        font-size: 50px;
        padding-top: 220px;
      }
      
      img {
        border: 10px solid #000;
        margin: 20px auto;
        position: absolute;
      }
    </style>
<!--========================================================================= And with that, you've created your meme! Watch out Internet! Here are a few things you learned while building your meme: how to set the title of a webpage (<title> tag), work with images (<img> tag), organize your text with headers (<h1>, <h2>, etc.) and start to get down and dirty in CSS to change the look and feel of your page. Good Webmaking my friend! 
============================================================================ -->
  </body>

<!-- 
Credits: The image of the Crasher Squirrel was taken by Melissa Brandts and was published as part of the "Daily Dozen" by National Geographic and has become a legit internet meme. Check out more Daily Dozen photos here: http://ngm.nationalgeographic.com/your-shot/daily-dozen
 --> 
</html> 