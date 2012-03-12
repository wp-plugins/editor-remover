=== Editor Remove ===
Contributors: downloadtaky
Donate link: <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=AYCGU964GADGL" title="I like coffe!">Offer me a coffe</a>
Tags: posts,editor,custom fields
Requires at least: 3.3.1
Tested up to: 3.3.1
Stable tag: 0.1

It disable default Post Editor and let users like Authors and Editors (not Admin) to write posts only using custom fields.

== Description ==

It disable Post editor for Non Administrators and let you create posts only using Custom Fields (remember to configure them first!)
It uses: if ( ! current_user_can( 'install_plugins' ) )

Actually there is no Admin Panel for this plugin if you would like to change minimum permission or role you'll have to change it manually via FTP

== Installation ==

1. Upload `editoremover.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Buy me a coffe :P

== Frequently Asked Questions ==

= Where is the admin panel? =

There is no admin panel (actually)

= How can I change minimum role? =

Use your FTP client and go to: `/wp-content/plugins/editoremover` directory, open `editoremover.php` and modify this line: 
	`if ( ! current_user_can( 'install_plugins' ) )` with the appropriate role based on this page of the codex:
	`http://codex.wordpress.org/Roles_and_Capabilities`

== Changelog ==

= 0.1 =
* New Baby is Born

== Feature Request ==

Any feature request? Drop me a line: marco@maisdesign.it

This plugin is based on a conversation here:
<a href="http://wordpress.stackexchange.com/questions/45113/how-to-disable-edit-post-and-allow-only-custom-field/45158#45158">Wordpress.Stackexchange</a>