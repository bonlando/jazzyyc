<?php
/*
Plugin Name: MemberPress Account Page Nav
Plugin URI: http://www.memberpress.com/
Description: Allows developers to add more nav menu links/pages to their members account page
Version: 1.0.0
Author: Caseproof, LLC
Author URI: http://caseproof.com/
Copyright: 2004-2013, Caseproof, LLC
*/

//COPY FROM THE LINE BELOW TO THE END, IF YOU PLAN TO PASTE THIS CODE INTO A THEME'S functions.php FILE OR INTO A PLUGIN LIKE My Custom Functions
//ADD A SUPPORT TAB TO THE NAV MENU
function mepr_add_some_tabs($user) {
  $support_active = (isset($_GET['action']) && $_GET['action'] == 'events')?'mepr-active-nav-tab':'';
  ?>
    <span class="mepr-nav-item events <?php echo $support_active; ?>">
      <a href="/account/registrations">Events</a>
    </span>
  <?php
}
add_action('mepr_account_nav', 'mepr_add_some_tabs');

//YOU CAN DELETE EVERYTHING BELOW THIS LINE -- IF YOU PLAN TO REDIRECT
//THE USER TO A DIFFERENT PAGE INSTEAD OF KEEPING THEM ON THE SAME PAGE
//ADD THE CONTENT FOR THE NEW SUPPORT TAB ABOVE
function mepr_add_tabs_content($action) {
  if($action == 'events'): //Update this 'events' to match what you put above (?action=events)
  ?>
   
   something

  <?php
  endif;
}
add_action('mepr_account_nav_content', 'mepr_add_tabs_content');