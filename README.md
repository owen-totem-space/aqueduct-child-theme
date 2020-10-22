# Aqueduct Child Theme

## Added Features

<br>

* [Nav Menus](#nav-menus)
* [Static Homepage](#static-homepage)
* [Footer](#footer)
* [Page Templates](#page-templates)
    * Tab Page
    * Accordion Page
* [Scroll Arrows](#scroll-arrows)
* [Dark Mode](#dark-mode)

<br>

#### Notes:

* [Recommended Actions](#recommended-actions)
* [Performance](#performance)
* [Updating](#updating)
* [Styling](#styling)

<br>
<br>

---

## Nav Menus

1. Parent menu items should be unclickable

    This is achieved by setting the link to the parent item as "#" and simply adding a label.

2. Parent Item Needs CSS Class

    This is achieved by clicking "screen options" in the top right, ticking the CSS classes option. Then add the following to the CSS class box of the menu item:

    * dropdown1
    * dropdown2
    * dropdown3

        Up to dropdown8

This is required to allow dropdown functionality of the sidemenu. It also brings the added benefit of removing users ability to mistakenly click the nav menu label and being brought to a dead/useless page.

Note: Please do not add 8 nav menu items. 4-5 should be the max. They may not fit if the words are too long anyway.

<br>
<br>

---



## Static Homepage
1. Content is editable

2. Included up to 3 buttons

3. The image can be changed

4. Included an "Emergency Announcement" section to appear above the image. There is a link button available

These are controllable via the appearance -> customize menu. Click into "IMC Homepage"

<br>
<br>

---




## Footer
1. Up to three lists. 5 items per list.

2. List header, links and icons are editable.

3. Logo and social media are hardcoded at the moment.

<br>

These are controllable via the appearance -> customize menu.
Click "IMC Footer"

Benefits: An extra navigation area to decentralize some of the items from the current nav menus. It also looks pretty nice and frames pages better when a website has a good footer. 

<br>
<br>

---




## Page Templates

1. Tabbed Pages

    Tabbed pages turn into accordions on smaller screens.

<br>

How to use: Create a page. Select "tab page" as the "page template". Any pages who have this page set as their parent page will show on this page. Horizontal space is limited by the page titles. The will create a second row if the titles are too long.

<br>

2. Accordion Pages

    Accordion pages show as accordion at all screen sizes

<br>

How to use: Same as tab page but select accordion page as "page template" on parent page.

<br>
<br>

---



## Scroll Arrows

Not much to say about them. They help users scroll to top or bottom for smoother access to navigation menus/footer menus.

<br>
<br>

---

## Dark Mode


<br>

---



## Recommended Actions

* Install Super Progressive Web App plugin

    This allows the site to be "installed" on a phone, like an app. It caches data on the phone to allow smoother browsing. This should speed up site browsing for mobiles significantly aswell as eliminating the address bar and browser menu from the screen. It looks much like a regular phone app. Android users will be prompted to install the site as an app. iPhone users must click share, save to homepage. I've tested this extensively and had a great experience.

* Deactivate Avatars in Settings
    
    I have removed them from appearing in the forum. The stylesheet impacts page load speed (on every page) and they load an unnessary amount of images to pages they are on, impacting load speed again. Are they really necessary? do people actually use them?

* Show Latest posts on forum page

    * This can be changed in the forum settings. Then create a new page and add the shortcode [bbp-forum-index] to display all forums on this page. Then rejig the menus to show as they should.

    * As i've hidden the sidebar widget on smaller screens to eliminate clutter, this will be a better way to view all the latest posts. I thinks its a more intuitive "forum homepage" than the widgets. It's also what UKC do :)


* Disable Topic Tags in forum settings

* Change date to read "10/09/2020" instead of "September 10, 2020", to save screen space

* Fix 404 errors to images loaded on blogs

    These __significantly__ impact page load speed

* Deactivate/Remove BSP plugin for better performance. Anything it does can be coded in very easily and more efficiently. 

<br>
<br>

---



## Performance

* Removed dynamic CSS from header. Quicker page load time.
* Moved scripts to the footer. Quicker page load time.
* Optimized script/css/plugin loading on homepage, blog page and accordion/tab pages.
* All inputs in customizer and on pages has been sanitized and validated.

<br>

#### Homepage

Images are often the main culprit of a slow page load, especially when users/blog posters don't optimize images before upload (616kB,284kB and 263kB is the largest at the moment). 34 images are downloaded on every page visit (depending on caching etc.) and 34 HTTP requests to the server.

Images are also the most likely place to get 404 errors. These are the biggest addition to slow page load.

 Currently there are approx 65 HTTP requests including 34 images, plugin stylesheets and javscript files all loading on the current homepage. This has to be processed just to access the site. This is reduced to about 20 HTTP requests and control over what loads on the page by adding the static homepage.

 There are also aesthetic and UX benefits.

<br>
<br>

---

#### Tab/Accordion Pages

These pages allow the content of all the pages to be loaded at once. 

It does not trigger a page reload when you want to view another tab. Since text is so small, it gets you 4/5 pages for the price of one with no performance trade off. This is great for mobile browsing. 

It looks much better on mobile too and is easier to navigate. It also allows items to be removed from the nav menus and put on one page.

<br>
<br>

---

## Updating

1. It's possible to push updates from the github repository. This will prompt a theme update in the same way that a wordpress repository theme would. Any issues or additional features can be addressed with updates.

2. It's possible to transfer ownership of the github repo in future, should that be necessary. All code can be viewed and other people can contribute if necessary.

3. I would not expect much in the way of issues, considering the kind of changes I've made.

4. In reality it would probably be better to use another theme or develop another theme to make any significant changes in future. This is just a child theme reliant on the code of the Aqueduct Theme.

<br>
<br>

---

## Styling

Removed options for changing link colors, fonts etc from the appearance -> customize menu. 

These have been included in the CSS for performance reasons and simplicity. They are never changed anyway. IMC logo green and blue is what is used on the site. 

Font sizes can still be changed in posts etc as normal.