=== 3D Stack FX ===
Contributors: flashxml
Tags: images, photos, widget, post, plugin, posts, sidebar, 3d, stack, free, flash, as3, thumb, image, tooltip, effect, animation, effects, text, reflection, thumbs, xml, photo, lightbox, slideshow, scrollbar, scroll, slide
Requires at least: 2.8.0
Tested up to: 2.9.2
Stable tag: trunk

== Description ==

One of the most advanced 3D Stack on the web. Completely XML customizable, without using Flash. And it's free!

= Main features =

You can integrate it in any website for free without even using Flash. It's using the Papervision3D engine and it has multiple camera rotations and views with reflection effect. There is a configurable plane rotation and view of the first (head) and last (tail) images. You can use the optional slideshow function with unlimited number of many formats of images (JPG, GIF, PNG, BMP) of different widths and heights. It has many tooltip customizations and the scrollbar is skinnable.

== Installation ==

Make sure your Wordpress version is equal or greater than 2.8 and your hosting provider is using PHP5.

1. Upload the `3d-stack-fx` directory along with all its files to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. In the post editor use the following tag to embed the 3D Stack: `[3d-stack-fx][/3d-stack-fx]`. Or add `<?php stackfx_echo_embed_code(); ?>` in your templates
4. Go to [FlashXML.net](http://www.flashxml.net/ "Free Flash Components") and [customize your 3D Stack](http://www.flashxml.net/3d-stack.html "3D Stack") using the Live Demo. Generate the `settings.xml` text and use it to overwrite `3d-stack-fx/component/settings.xml`
5. To use your own images, upload them to the `3d-stack-fx/component/images` directory and update the `3d-stack-fx/component/images.xml` file accordingly

= No Flash support text =

To support visitors without Adobe Flash, you can provide alternative textual content. From the post editor, add the text between `[3d-stack-fx]` and `[/3d-stack-fx]`. From the PHP files of your theme, add the text as *the first argument* of the `stackfx_echo_embed_code()` function call.

= Additional settings file =

To embed the 3D Stack more than once, you will need another settings file and (probably) another set of images. Let's assume your new file is called **settings2.xml**. From the post editor, use the following code: `[3d-stack-fx settings="settings2.xml"][/3d-stack-fx]`. From the PHP files of your theme, add the file name as *the second argument* of the `stackfx_echo_embed_code()` function call. If you use a separate set of images, don't forget to create a new XML file for that and update the `imagesXML` value in the settings file.

== Screenshots ==

1. The Live Demo on [FlashXML.net](http://www.flashxml.net/3d-stack.html "3D Stack") is the utility that helps easily customize your 3D Stack to fit all of your needs.