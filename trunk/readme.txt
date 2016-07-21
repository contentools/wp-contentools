=== WP Contentools ===
Contributors: Infra Contentools
Donate link: https://github.com/contentools/wp-contentools
Tags: Content Marketing, Contentools
Requires at least: 4+
Tested up to: 4+
Stable tag: 4+
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Contentools is a content marketing automation platform to centralize, streamline and manage content creation.
http://go.contentools.com/
== Description ==

This plugin enables the integration between the Contentools Platform and Wordpress.

Current Features:

1. Allow X-Frame-Options
When you access the WP-admin page we add the field `X-Frame-Options` with value `http://go.contentools.com/` in header.
This allows your wp-admin page be accessed inside Contentools Platform

2. Set WP Contentools enabled plugin
It adds "WP-Contentools" flag on HTTP headers with value "true".

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the Settings->Plugin Name screen to configure the plugin
4. (Make your instructions match the desired user flow for activating and installing your plugin. Include any steps that might be needed for explanatory purposes)

== Frequently Asked Questions ==

Nothing yet

== Upgrade Notice ==

Nothing yet

== Screenshots ==

`/assets/screenshot-1.png`

== Changelog ==

= 1.0 =
* Add support to allow X-Frame-Options
* Add "WP-Contentools" flag on HTTP headers
