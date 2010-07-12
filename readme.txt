=== 3D Stack FX ===
Contributors: flashxml
Tags: images, photos, widget, post, plugin, posts, sidebar, 3d, stack, free, flash, as3, thumb, image, tooltip, effect, animation, effects, text, reflection, thumbs, xml, photo, lightbox, slideshow, scrollbar, scroll, slide
Requires at least: 2.8.0
Tested up to: 3.0
Stable tag: trunk

== Description ==

One of the most advanced 3D Stack on the web. Completely XML customizable, without using Flash. And it's free!

= Main features =

You can integrate it in any website for free without even using Flash. It's using the Papervision3D engine and it has multiple camera rotations and views with reflection effect. There is a configurable plane rotation and view of the first (head) and last (tail) images. You can use the optional slideshow function with unlimited number of many formats of images (JPG, GIF, PNG, BMP) of different widths and heights. It has many tooltip customizations and the scrollbar is skinnable.

== Installation ==

Make sure your Wordpress version is greater than 2.8 and your hosting provider is using PHP5.

1. [Download](http://www.flashxml.net/free/download/3d-stack.zip "3D Stack FX") or [purchase](http://www.flashxml.net/3d-stack.html#swmi-license "3D Stack FX") the 3D Stack FX Flash component
2. Create a new folder inside your `/wp-content/` directory called `flashxml/3d-stack-fx` and copy the content of the archive to this folder
3. Install [the plugin](http://downloads.wordpress.org/plugin/3d-stack-fx.zip "3D Stack FX Plugin") or upload the `3d-stack-fx` folder along with all its files to `/wp-content/plugins/` directory
4. Activate the plugin from the **Plugins** tab in **WordPress Dashboard**
5. Go to **3D Stack FX** from the **Settings** tab and update the path in case you used a different one
6. In the post editor use the following tag to embed the 3D Stack FX: `[3d-stack-fx][/3d-stack-fx]`. You could also add `<?php stackfx_echo_embed_code(); ?>` in the PHP file of your theme
7. Go to [FlashXML.net](http://www.flashxml.net/ "Free Flash Components") and [customize your 3D Stack FX](http://www.flashxml.net/3d-stack.html "3D Stack FX") using the Live Demo. Generate the `settings.xml` text and use it to overwrite `flashxml/stackfx/settings.xml`
8. To use your own images, upload them to the `flashxml/stackfx/images` folder and update the `flashxml/stackfx/images.xml` file accordingly

= Additional settings file =

To embed the 3D Stack FX more than once, you will need another settings file and (probably) another set of images. Let's assume your new file is called **settings2.xml**. From the post editor, use the following code: `[3d-stack-fx settings="settings2.xml"][/3d-stack-fx]`. From the PHP files of your theme, add the file name as *the first argument* of the `stackfx_echo_embed_code()` function call. If you use a separate set of images, don't forget to create a new XML file for that and update the value in the settings file.

= No Flash support text =

To support visitors without Adobe Flash, you can provide alternative textual content. From the post editor, add the text between `[3d-stack-fx]` and `[/3d-stack-fx]`. From the PHP files of your theme, add the text as *the second argument* of the `stackfx_echo_embed_code()` function call.

= If you have PHP4 =

To make it work if you're using PHP4, add the following code `[3d-stack-fx width="600" height="300"][/3d-stack-fx]` in the post editor. From the PHP files of your theme, add the width and height as *the third and fourth argument* of the `stackfx_echo_embed_code()` function call. Don't forget to provide your own width and height values, since 600 and 300 are just examples.

== Screenshots ==

1. The Live Demo on [FlashXML.net](http://www.flashxml.net/3d-stack.html "3D Stack FX") is the utility that helps easily customize your 3D Stack FX to fit all your needs.