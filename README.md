# Aqueduct Child Theme

## Added Features

<br>

* [How to Install](#how-to-install)
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

## How to install

Select "Code" -> download zip at top of this section. In wordpress admin, go to Appearance -> Themes -> Add New (at top) -> Upload theme (at top) -> Choose File -> upload the zip folder that was downloaded then select activate theme. Voila.

The original Aqueduct theme still needs to be instaleed in wordpress themes. Do not uninstall.

<br>

There will then be a few things to select and configure as listed below.

<br>

---


## Nav Menus

1. Parent menu items should be unclickable

    This is achieved by setting the link to the parent item as "#" and simply adding a label. This is not a link to a page.

2. Parent Item Needs CSS Class

    This is achieved by clicking "screen options" in the top right, ticking the CSS classes option. Then add the following to the CSS class box of the menu item:

    * dropdown1
    * dropdown2
    * dropdown3

        Up to dropdown8

    * This is required to allow dropdown functionality of the sidemenu. 

3. It is no longer possible to have submenus within menus. The menu area of the admin panel will still allow you to add them but they won't work. The side menu wouldn't work with them. Also, with proper menu structure, they shouldn't be necessary.

Note: Please do not add 8 nav menu items. 4-5 should be the max. They may not fit if the words are too long anyway.

<br>
<br>

---



## Static Homepage

How to configure:

Step 1:
* Create a new page, give it a title of "Homepage" (title doesn't matter, but this will asign it a recognisable slug)
* In "page attributes" -> "template" select "Homepage"
* Create another new page, give it a title of "Blog" (again title doesn't matter but this will be your blog page)

<br>

Step 2

* In Admin menu go to Settings -> Reading
* In "Your homepage displays" select "a static page"
* Now select "Homepage" as homepage and "Blog" as posts page
* Now add a menu item called "Latest Posts" to your menu and link to the "Blog" page.

<br>

Notes:

1. Content is editable

2. Included up to 3 buttons

3. The image can be changed

4. Included an "Emergency Announcement" section to appear above the image. There is a link button available to turn on or off.

Edit via the appearance -> customize menu. Click into "IMC Homepage".

Even though I've set things up as defaults, it may be necessary to go in to this menu and click into each item and hit spacebar to change it. Then select publish when all items have been "edited".


<br>
<br>

---


## Footer

How to use: 

Go to appearance -> customize -> IMC Footer. For labels, you can just press spacebar in each field to keep defaults. Add links, these can be relative. ie -> "/newsletters" instead of "www.example.com/newsletters"

1. Up to three lists. 5 items per list.

2. List header, links and icons are editable.

3. Logo and social media are hardcoded at the moment.

<br>


Benefits: An extra navigation area to decentralize some of the items from the current nav menus. It also looks pretty nice and frames pages.

<br>
<br>

---


## Page Templates

How to use: 

Create a page. Select "tab page" as the "page template". Any pages who have this page set as their parent page will show on this page. Horizontal space is limited by the page titles. They will create a second row if the titles are too long.

<br>

1. Tabbed Pages

    Tabbed pages turn into accordions on smaller screens.

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

* Uses cookie to store dark/light mode preference

<br>

---



## Recommended Actions

* Install Super Progressive Web App plugin

    This allows the site to be "installed" on a phone, like an app. It caches data on the phone to allow smoother browsing. This should speed up site browsing for mobiles significantly aswell as eliminating the address bar and browser menu from the screen. It looks much like a regular phone app. Android users will be prompted to install the site as an app. iPhone users must click share, save to homepage. I've tested this extensively and had a great experience.

    I've included relevant images with sizing to be used in this app should you choose to use it. (just unzip the downloaded folder and go to img folder)

* Deactivate Avatars in Settings
    
    I have removed them from appearing in the forum. The stylesheet impacts page load speed (on every page) and they load an unnessary amount of images to pages they are on, impacting load speed again. Are they really necessary? do people actually use them?

* Show Latest posts on forum page

    * This can be changed in the forum settings. Then create a new page and add the shortcode [bbp-forum-index] to display all forums on this page. Then rejig the menus to show as they should.

    * As i've hidden the sidebar widget on smaller screens to eliminate clutter, this will be a better way to view all the latest posts. I thinks its a more intuitive "forum homepage" than the widgets. It's also what UKC do :)


* Disable Topic Tags in forum settings

* Remove "Search" sidebar widget.

* Only show last 5 replies in topic/reply widgets.

* Change date to read "10/09/2020" instead of "September 10, 2020", to save screen space

* Fix 404 errors to images loaded on blogs

    These __significantly__ impact page load speed

* Deactivate/Remove BSP plugin for better performance. Anything it does can be coded in very easily and more efficiently. (it isn't doing much, if anything)

* Ask people to stop uploading large images. (there is a recent 20MB image in a blog post. 100kB to 200kB is the recommended absolute max.)

* Plugins: The Events calendar is the biggest resource hog on the site at the moment. Consider if its possible to use something a little more lightweight. There are a couple of decent calendar plugins.

<br>
<br>

---



## Performance

* Removed dynamic CSS from header. Quicker page load time.
* Moved scripts to the footer. Quicker page load time.
* Optimized script/css/plugin loading on homepage, blog page and accordion/tab pages.
* Security Note: All inputs in customizer and on pages has been sanitized and validated.


<br>

#### Homepage

Images are also the most likely place to get 404 errors. These are the biggest addition to slow page load. Currently 404's are not cached. A static page prevents any of this.

Currently there are approx 65 HTTP requests on the current homepage. This is reduced to about 20 HTTP requests by adding the static homepage.

The login modal prevents having load a new page to login.

There are also aesthetic and UX benefits.

<br>
<br>


#### Tab/Accordion Pages

These pages allow the content of all the pages to be loaded at once. 

It does not trigger a page reload when you want to view another tab. Since text is so small, it gets you 4/5 pages for the price of one with no performance trade off(just the database queries for each page, which is miniscule). This is great for mobile browsing. 

It also allows items to be removed from the nav menus and put on one page.

<br>
<br>

---

## Updating

 It's possible to push updates from the github repository. This will prompt a theme update in the same way that a wordpress repository theme would. Any issues or additional features can be addressed with updates.

<br>
<br>

---

## Styling

Removed options for changing link colors, fonts etc from the appearance -> customize menu. These have been included in the CSS for performance reasons and simplicity. They are never changed anyway. IMC logo green and blue is what is used on the site. 

Font sizes can still be changed in posts etc as normal.

Recommended logo size of 150 x 150 is being broken by the Aqueduct theme and making the image blurry. I've adjusted the image size which will sharpen it even if a smaller logo is used. Current image is 300x300, but 150x150 should be sufficient. It doesn't save much but every little bit counts. I've included logo images in the img folder.