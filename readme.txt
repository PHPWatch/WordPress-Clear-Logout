=== Clear Logout ===
Contributors: ayeshrajans
Tags: password, security, logout, authentication
Requires at least: 5.1
Tested up to: 5.4
Stable tag: 1.0
Requires PHP: 5.6
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A tiny WordPress plugin to clear all browser data related to the site upon logout (With `Clear-Site-Data` header).

== Description ==

This plugin ensures that when users of your web site (including site administrators), the browsers are instructed to clear all residue such as cookies and caches to enhance the security.

[`Clear-Site-Data` HTTP header](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Clear-Site-Data) is sent when a user logs out, which supported browsers will react by removing all existing cookies, cache, and other storage. It will **not** remove saved passwords, permissions, adblocker rules, and other data that are supposed to be permanent.

This plugin prevents possible security vulnerabilities such as clicking the "Back" button in the browser after logging out revealing the pages that should not have been accessible after logging out. Furthermore, this cleans the browser cache, which prevents accessing authenticated media assets (such as purchased images) from the browser cache of a victim.

== Installation ==

1. Upload the downloaded plugin directory to `/wp-content/plugins/` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin from the 'Plugins' screen in WordPress.
3. You are all set! There is nothing to configure. When users logout, the `Clear-Site-Data` header will be sent automatically.


== Frequently Asked Questions ==

= Will this plugin remove saved passwords? =

No. This will clear all cookies associated with your WordPress site, but not the permanent data such as passwords, permissions, etc.

= Which browsers support `Clear-Site-Data` header? =

All mainstream browsers do. Google Chrome 61+, Firefox 63+, and their current mobile browsers. As of now, Microsoft Edge (non-Chrome versions) does NOT support this header.

= Why does the WordPress core does not set this header by itself? =

`Clear-Site-Data` header is a relatively new header. I will be working with WordPress core team to get this into core. Until then, we have this plugin.

== Changelog ==

= 1.0 =
* Initial release.
