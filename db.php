<?php
/**
 * wp-tutorial-101 - DB File, used to get tutorials URIS, and such
 * @author Adrian S. (https://www.amsquared.co.uk/)
 * @version 1.0
 */

error_reporting(E_ALL ^ E_NOTICE);

/**
 * An array of tutorials,
 * array('tutorial_name', 'tutorial_uri', 'tutorial_img', 'tutorial_description')
 */
$Tutorials = array(
    array('The Dashboard', 'http://blip.tv/play/h697gsmjSAI.html?p=1', 'dashboard.jpg', 'The first tutorial in this series, will hlp you understand how the dashboard works, and how you can make customize it to fit your needs.'), // #1
    array('Creating A New Post', 'http://blip.tv/play/h697gsmkUgI.html?p=1', 'street-lighting-at-night-1421986-m.jpg', 'Learn how to create, save ans publish new posts along with an introduction into the WYSIWYG editor and visual/html variation.'), // #2
    array('Edit Existing Post', 'http://blip.tv/play/h697gsrsbAI.html?p=1', 'handwriting-505072-m.jpg', 'See how you can update and correct a post once it\'s published or before you publish it.'), // #3
    array('Using Categories and Tags', 'http://blip.tv/play/h697gsrseQI.html?p=1', 'decorative-cabbages-1432095-m.jpg', 'Learn how to filter and sort the content for your readers using categories and tags.'), // #4
    array('Creating and Editing Pages', 'http://blip.tv/play/h697gszlUgI.html?p=1', 'beauty-of-writing-287763-m.jpg', 'Beside posts, you can also use pages to publish content. Find out what are the advantages of using pages and how to manage them.'), // #5
    array('Adding Images', 'http://blip.tv/play/h697gszlVwI.html?p=1', 'photographers-231473-m.jpg', 'In this tutorial you\'ll find out how to upload and format an image inside a post or page.'), // #6
    array('Embedding Video', 'http://blip.tv/play/h697gs7OeAI.html?p=1', '8-ml-4-679427-m.jpg', 'Learn how to embed a video from youtube or other provider using the powerful embed shortcode.'), // #7
    array('Media Library', 'http://blip.tv/play/h697gs7OQwI.html?p=1', 'no-copyright-issues-487945-m.jpg', 'Files you upload to posts and pages, go into the media library. Find out the basics of this section and ways to manage the items you uploaded previously.'), // #8
    array('Managing Comments', 'http://blip.tv/play/h697gs_YMwI.html?p=1', 'gossip-girls-1-1066564-m.jpg', 'Some users would like to share their opinions on your posts. The comments form allows anyone to comments to your posts.'), // #9
    array('Creating Links', 'http://blip.tv/play/h697gs_YNgI.html?p=1', 'dock-cleat-724320-m.jpg', 'Links are a great way to endorse other websites (of friends or companies) sponsoring your site. Learn how to create and manage your site links. '), // #10
    array('Appearance', 'http://blip.tv/play/h697gtDwRAI.html?p=1', 'colourful-batik-shawls-3-1366891-m.jpg', 'Get used to themes, and their options for enhancing your website look and feel.'), // #11
    array('Widgets', 'http://blip.tv/play/h697gtDwSgI.html?p=1', 'architecture-850369-m.jpg', 'Find out how you can control parts of content on your website with widgets.'), // #12
    array('Custom Menus', 'http://blip.tv/play/h697gtH3QQI.html?p=1', 'painted-facade-1422756-m.jpg', 'Learn how to manage the main menu and other menus on your website.'), // #13
    array('Plugins', 'http://blip.tv/play/h697gtH3QwI.html?p=1', 'tools-324936-m.jpg', 'Want more functionality? here\'s where plugins come in handy. See how you can enhance your website using them.'), // #14
    array('Users', 'http://blip.tv/play/h697gtKHdgI.html?p=1', 'one-step-2-1181506-m.jpg', 'Learn how to add, edit and remove users with access the administration side of your website.'), // #15
    array('Tools', 'http://blip.tv/play/h697gtKHcwI.html?p=1', 'office-equipment-909060-m.jpg', 'See various bits of functionality and integrations WordPress has to offer, generically called "tools".'), // #16
    array('Basic customization of the theme', '//www.youtube.com/embed/C0vy_47pjAc', 'sextante-1128036-m.jpg', 'In this tutorial you\'ll find out how you can personalize the default Twenty Eleven theme.'), // #17
    array('Using the file editor', '//www.youtube.com/embed/kVkCfv9wdf0', 'code-468319-m.jpg', 'Short intro to get you comfortable with the file editor. A powerful tool for advanced users.'), // #18
    array('Creating a child theme', '//www.youtube.com/embed/HrS33H2kMso', 'tea-cup-1260139-m.jpg', 'Start with the first steps into customizing themes and creating your own child theme.') // #19
);