<?php

function bsp_new() {
 ?>
			
						<table class="form-table">
					
					<tr valign="top">
						<th colspan="2">
						
						<h3>
						<?php _e ("What's New?" , 'bbp-style-pack' ) ; ?>
						</h3>


<h4><span style="color:blue"><?php _e('Version 3.2.7', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("1. I've added the ability to limit or even hide the number of revisions shown on a topic or reply.  If either a user or a mod/admin edits a topic/reply then a revision is created.  If several edits take place this can lead to multiple lines.  Within the 'Topic/Reply Styling' tab I've added a new option 12 to allow for you to choose what is shown. You can show all, none or the last n (eg say the last one)." , 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("2. On the 'Create New Topic' button in the 'Forum Display' tab the styling was 'in-line' so could not be altered.  Now it has a class of 'bsp-new-topic' allowing advanced users to add their own styling.", 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("3. When using the alternate forum template, the 'forum' heading was not styling correctly, and I have corrected this.", 'bbp-style-pack'); ?>
</p>	

						

<h4><span style="color:blue"><?php _e('Version 3.2.6', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("I've added the ability to have a different date and time format on the forum/topic lists freshness to enable for instance a shorter format to improve the display.  See the Freshness Display tab for details.", 'bbp-style-pack'); ?>
</p>


						
<h4><span style="color:blue"><?php _e('Version 3.2.5', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("1. Following a request, I've added the ability to format the last post date in the 'Freshness Display' tab.  You can now put date or time first, and decide on the separator, so you can have '6:20pm on 5th August', '5th August at 6.20pm' '6.20pm : 6th August' or whatever you wish.", 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("2. I've also added a lock symbol for closed topics in a forum list.  To set this go to the 'Topics Index Styling' and you'll see a new option 14 and how it displays in the forum.  You can set its size to suit your forum styling.", 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("3. In the background I've improved how the plugin updates work as some people were losing style changes on updates.", 'bbp-style-pack'); ?>
</p>	

						
<h4><span style="color:blue"><?php _e('Version 3.2.4', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("I've added Forum ID's to the forum list in Dashboard>Forums.  This makes it very easy to find a forum ID to use in shortcodes and widgets", 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("I've also made a small addition to allow removal of space between the username and the role when displaying topics and replies.  Where users are either using images or adding other information removing this space can make the display look better.  See the Forum Roles tab for this new feature", 'bbp-style-pack'); ?>
</p>				
						
						
<h4><span style="color:blue"><?php _e('Version 3.2.3', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("The shortcode [[bsp-display-topic-index] has been improved to allow for diaplying topics with no replies, and allow for multiple pages if desired - see the 'Shortcodes' tab for details", 'bbp-style-pack'); ?>
</p>
						
<h4><span style="color:blue"><?php _e('Version 3.2.2', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("Minor correction to the way stylesheet is handled", 'bbp-style-pack'); ?>
</p>

<h4><span style="color:blue"><?php _e('Version 3.2.1', 'bbp-style-pack' ) ; ?></span></h4>
<p>
<?php _e("Minor correction to error in 3.2.0", 'bbp-style-pack'); ?>
</p>
	
 						
<h4><span style="color:blue"><?php _e('Version 3.2.0', 'bbp-style-pack' ) ; ?></span></h4>

<p>
<?php _e("Several new features in this release", 'bbp-style-pack'); ?>
</p>
<p>
<?php _e("1. First of  all this tab - to help when you upgrade to see what new can be done, or what has been fixed.", 'bbp-style-pack'); ?>
</p>
<p>
<?php _e('2. I have also added a tab called "Other bbpress plugins".  This lists other plugins by me, and some by other authors that you might want to use.', 'bbp-style-pack'); ?>
</p>
<p>
<?php _e('3. You will find another tab called "Plugin Information". If you contact me for suppport, I might ask you to let me know what is in this page, and it has a copy button so that you can send me your settings. This will help me see how you are using the Style Pack plugin, and if needed let me set up my test site with your settings to help you with a problem.', 'bbp-style-pack'); ?>
</p>
<p>
<?php _e('4. On the "Topic/Reply Form" tab, I have added 2 new items :  ', 'bbp-style-pack'); ?>
</p>
<p>
<?php _e('a. The first is to let you change the wording once "Submit" is pressed and add a spinner if you wish.  Without this, when a user presses submit, nothing seems to happen, and if the link is slow, the user can think that they have not pressed it.  You can change the wording to for instance "Submitting" and then the user knows that it is working.
', 'bbp-style-pack'); ?>
</p>
<p>
<?php _e('b. Also on this tab you can change the "Notify me of follow-up replies by email".  At present by default this is unticked, which means thay users have to tick it.  Often they forget to do this.  You can now select to have this turned on by default, so that it is ticked for them.  Of course they can then untick it if they they want emails on replies.' , 'bbp-style-pack'); ?>
</p>


 

 <?php
}
