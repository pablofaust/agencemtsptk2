JUST FOLLOW THESE INSTRUCTIONS TO BE ABLE TO MODIFY THE CONTENT OF YOUR PORTAFOLKY !

To modify the general appearance of Portafolky, see the instructions localized in commentaries on css/style.css.

Reading this uggly document would give you a headache, so if you want the instructions in the form of easy step-by-step videos, just ask for it at pabfaust@gmail.com ! They're waiting for you, I just didn't wanted to


HOW TO MODIFY THE TITLE OF THE SITE :

1) go to assets/header.php

2) what's inbetween "<title>" and "</title>" is the title of the site : change it



HOW TO MODIFY THE MENU :


- Change the title of your portafolio :

1) open assets/menu.php

2) localize, at the very beginning of the document, this piece of code : 

	<a class="navbar-brand" href="<?php echo $url ?>">
	<h1>Portafolky</h1></a>

3) what's inbetween "<h1>"" and "</h1>" is the title : just enter what you want !


- Change the name of the links :

1) localize this piece of code :

	<li>
		<a href="<?php echo $url ?>category1">Photography</a>
	</li>
	<li>
		<a href="<?php echo $url ?>category2">Music</a>
	</li>
	<li>
		<a href="<?php echo $url ?>category3">Videos</a>
	</li>
	<li>
		<a href="<?php echo $url ?>about">About</a>
	</li>
	<li>
		<a href="<?php echo $url ?>contact">Contact</a>
	</li>

2) Just modify "Photography", "Music", "Videos", "About" or "Contact"



HOW TO MODIFY THE HOMEPAGE :


- Change numbers of slide :

1) each slide is composed by this piece of code : 

	<div class="slide">
		<a href="<?php echo $url ?>project1">
			<div style="background-image:url(<?php echo $url ?>home/img/cover1.png)" class="cover"></div>
		</a>
		<span class="helper"></span>
	</div>

2) to add a new slide, just copy this piece of code and paste it after the last slide (or wherever you want inbetween the slides)

3) to delete a slide, just copy the corresponding piece of code and delete it


- Change the picture of the slide : 

1) use tinypng.com to compress the size of the file you are going to use (makes your site load faster)

2) once compressed, put the file in home/img

3) localize this part of the slide's code : (<?php echo $url ?>home/img/cover1.png)

4) change "cover1.png" into the name of your file (should be .jpg or .png)


- Change the links of the slides :

1) in the piece of code corresponding to your slide, localize : 

	<a href="<?php echo $url ?>project1">

2) for now, the slides are all pointing out to the same project : just change "project1" to the project you wish


- Change the interval between each slide (THIS WILL ALSO AFFECT THE INTERVAL OF THE PROJECT'S SLIDER) :

1) open js/code.js

2) localize :

slide.intervalo = setInterval(function () { 
		slide.fade(true, slide.imgGal);
	}, 3500);

3) "3500" means 2,5 seconds : just put the interval you wish



HOW TO MODIFY THE MOSAICS :

To modify the mosaic of the first category, open category1/blocks.php. To modify the mosaic of the second category, open category2/blocks.php. To modify the mosaic of the third category, open category3/blocks.php.


- Change the number of blocks :

1) each block is composed by this piece of code if it's a PICTURE :

	<a href="<?php echo $url ?>project1">
		<div class="col-sm-4 column">
			<div class="image-block" style="background-image: url('<?php echo $url ?>category1/img/photo1.jpg')"></div>
		</div>
	</a>

or by this piece of code if it's a MEDIA (music or video) :

	<div class="col-sm-4 column">
		<div class="media-block">
			<iframe width="100%" height="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/118115098&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
		</div>
	</div>

2) to delete a block, copy the corresponding piece of code and delete it ; to add a block, copy the corresponding piece of code and paste it after the other blocks (or inbetween blocks) ; there can be as many blocks as you want


- Change the PICTURE of a block :

1) use tinypng.com to compress the size of the file you are going to use (makes you site load faster)

2) once compressed, put the file in category1/img, category2/img or category3/img in function of the category you're modifying

3) copy the piece of code corresponding to a picture block (see above)

4) just modify the "category1/img/photo1.png" to the location of the new picture (which will be "category1/img/...", category2/img/... or category3/img/... in function of the category you're modifying)


- Change the link to which a picture points out :

1) in the piece of code of a picture block (see above), the part after "a href=" is the link

2) just modify "project1" to the name of the project you want the picture to point out


- Change the content of a block of/to a YOUTUBE video :

1) grab the piece of code for a MEDIA block (see above)

2) inbetween "<div class="media-block"> and "</div>", paste this piece of code :

	<iframe width="100%" height="100%" src="https://www.youtube.com/embed/NW8AnRexUpo" frameborder="0" allowfullscreen color="white"></iframe>

3) go get the link of your Youtube video and paste it in the code right after "src=", inbetween the "" (where there's the link of another video for now) ; your link should look like this : https://www.youtube.com/watch?v=W7N5Oq9fl68

4) in the link, get ridd of "watch?v=", and instead put "embed/" ; your link should now look like this : https://www.youtube.com/embed/W7N5Oq9fl68


- Change the content of a block of/to a VIMEO video :

1) copy the piece of code for a MEDIA block (see above)

2) inbetween "<div class="media-block"> and "</div>", paste this piece of code :

	<iframe width="100%" height="100%" src="https://player.vimeo.com/video/128126914" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

3) go get the reference number of your Vimeo video (the numbers at the end of the video's URL), and paste them instead of the numbers in the piece of code, after "src="https://player.vimeo.com/video/"


- Change the content of a block of/to a SOUNDCLOUND sound (bit more complicated):

1) copy the piece of code for a MEDIA block (see above)

2) go and look for your sound on Soundclound, go to the "Share" option below the track, then the "Embed" section and copy the code they give you

3) paste that code inbetween "<div class="media-block"> and "</div>"

4) don't forget to change the "iframe" width and height to 100%



HOW TO MODIFY THE ABOUT SECTION :


- Change the background image :

1) use tinypng.com to compress the picture you're going to use

2) put the picture you're going to use into about/img (should be .jpg or .png)

3) open about/body.php

4) localize this piece of code : "$url ?>about/img/background.png"

5) change the name of the picture ("background.png" here) to yours, right after "about/img/"


- Change the content :

1) open about/about-content.php

2) the content is what's localized inbetween "<p>" and "</p>" : write your text there

3) put the text you want to be bold inbetween "<strong>" and "</strong>"

4) use "<a href="mailto:..."> with your mail adress instead of the "..." to point out to your mail adress, and don't forget to close the link with "</a>"

5) use "<br>" each time you want to start a new line of text



HOW TO MODIFY THE CONTACT SECTION :


- Change the background image :

1) use tinypng.com to compress the picture you're going to use

2) put the picture you're going to use into contact/img (should be .jpg or .png)

3) open contact/body.php

4) localize this piece of code : "$url ?>contact/img/background.png"

5) change the name of the picture ("background.png" here) to yours, right after "contact/img/"


- Change the content :

1) open contact/contact-content.php

2) the title is localized inbetween "<h2>" and "</h2>" : change it

3) to change the mail adress, localize this piece of code :

	<a href="mailto:pabfaust@gmail.com" target="_top"><h3><strong>pabfaust@gmail.com</strong></h3></a>

4) you can see that my mail adress (pabfaust@gmail.com) appears twice : change it to yours

5) use the space inbetween "<h4>" and "</h4>"" to add complementary information (phone number, adress, etc.), skeeping lines with "<br>"


- Add social icons :

1) open contact/contact-content.php

2) the piece of code for a social icons looks like this : 

	<a href="https://www.facebook.com/pabfaust" target="_blank"><i class="fa fa-facebook-official fa-2x"></i></a> 

3) change "fa-facebook", right after "i class="fa", to the icon of your choice :
	
	BEHANCE = fa-behance
	DRIBBBLE = fa-dribbble
	DROPBOX = fa-dropbox
	FACEBOOK = fa-facebook
	FOURSQUARE = fa-foursquare
	GITHUB = fa-git
	GOOGLE+ = fa-google-plus
	INSTAGRAM = fa-instagram
	LINKEDIN = fa-linkedin
	MEDIUM = fa-medium
	PINTEREST = fa-pinterest
	SOUNDCLOUD = fa-soundcloud
	TUMBLR = fa-tumblr
	TWITTER = fa-twitter
	VINE = fa-vine
	YOUTUBE = fa-youtube
	(Find more icons at : http://fortawesome.github.io/Font-Awesome/icons)

4) change the social icon's link by pasting your link right after the "a href=", inbetween the ""



HOW TO ADD AND MODIFY PROJECTS


- Create a project : 

1) copy the "project1" folder, paste it and rename to "project2" (or whatever "projectx")

2) each time you do this, don't forget to go to projectx/index.php and change every "project1" you find to the new "projectx"

- Change numbers of slide :

1) each slide is composed by this piece of code : 

	<div class="slide">
			<div style="background-image:url(<?php echo $url ?>project1/img/slide1.png)" class="cover"></div>
		<span class="helper"></span>
	</div>

2) to add a new slide, just copy this piece of code and paste it after the last slide (or wherever you want inbetween slides)

3) to delete a slide, just copy the corresponding piece of code and delete it


- Change the picture of the slide : 

1) use tinypng.com to compress the size of the file you are going to use (this makes you site load faster)

2) once compressed, put the picture in project1/img (or the projectx/img corresponding to the project youc created and want to modify)

3) localize this part of the slide's code : (<?php echo $url ?>project1/img/slide1.png)

4) change "slide1.png" into the name of your picture (should be .jpg or .png)


- Change the interval between each slide (THIS WILL ALSO AFFECT THE INTERVAL OF THE HOMEPAGE'S SLIDER) :

1) open js/code.js

2) localize :

slide.intervalo = setInterval(function () { 
		slide.fade(true, slide.imgGal);
	}, 2500);

3) "3500" means 2,5 seconds : just put the interval you wish




















# lerealigraphe1
# lerealigraphe1
# agencemtsptk2
