KarmaDocs WordPress Theme
=========================

This is a custom WordPress theme converted from the KarmaDocs HTML project.

Installation
------------
1. Upload the `karmadocs-theme` folder to your WordPress installation's `wp-content/themes/` directory.
2. Log in to the WordPress Admin Dashboard.
3. Go to **Appearance > Themes**.
4. Locate "KarmaDocs Theme" (or the folder name if style.css headers aren't fully read, but it should work) and click **Activate**.

Page Setup
----------
This theme uses custom page templates. To set up your site:

1. **Home Page**: Create a new page (e.g., "Home"). The theme will automatically apply the `front-page.php` template.
   - Go to **Settings > Reading**.
   - Set "Your homepage displays" to "A static page" and select your "Home" page.

2. **Inner Pages**: Create pages for each section (About, Contact, etc.).
   - In the Page Editor, look for "Template" in the Page Attributes section (sidebar).
   - Select the corresponding template (e.g., "About Page", "Contact Page", "ADHD Service", etc.).
   - Publish the page.
   - Note: The content for these pages is currently hardcoded in the templates. Editing the page content in the WordPress Editor will NOT change the displayed content unless you modify the corresponding `.php` file.

Menus
-----
The navigation menus in the Header and Footer are currently hardcoded to match the original design exactly.
However, menu locations have been registered in `functions.php` for future dynamic implementation:
- Primary Menu
- Mobile Menu
- Footer Menu

Files
-----
- **front-page.php**: The main homepage template.
- **page-*.php**: Specific templates for inner pages and services.
- **header.php**: Contains the HTML head and top navigation.
- **footer.php**: Contains the footer area and script inclusions.
- **functions.php**: Enqueues styles/scripts and registers theme features.
- **index.php**: Generic fallback template (loops through posts).
- **404.php**: Page not found template.

Support
-------
For any changes to the content or layout, please edit the respective `.php` files in the theme folder.
