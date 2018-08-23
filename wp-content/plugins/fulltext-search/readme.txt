=== WP FullText Search ===
Contributors: Epsiloncool
Donate link: https://fulltextsearch.org/
Tags: wordpress, search, text-search, indexed search, fulltext search, search algorithm, search in PDF, search in MS Word, search in Excel, search customization, search in docx, word based index, word based search, google-like search results
Requires at least: 3.0.1
Tested up to: 4.9.5
Stable tag: 1.9.10
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

This plugin creates a transparent word-based index to speed up the search, add a relevance, includes meta fields and custom post types to search index and even more. No external software/service required.

== Description ==

This plugin extends the standard search capabilities of Wordpress by creating a transparent word-based index. This allows you to quickly search not only by the title and content of posts, but also by meta-fields, custom types of posts, and even by the contents of the attached files. Yes, all this is possible!

WPFTS does not require the installation of external indexing programs and therefore works even on shared hostings. It does not require any refinement of your site, thus all other plugins will also automatically use the word-based index after installing the WPFTS.

You will be able to justify the relevance function by specifying the weights for the title, the content, and each of the meta-fields in your posts.

Unlike other search plug-ins, it does not replace the standard WP search completely, but extends its functionality. Thus, all existing plugins begin to use advanced search automatically.

The extended (pro) version of the plugin allows you to automatically index the text content of the attached files (for example, PDF files, full list of supported files is listed in Documentation) and perform a quick search on them.

Here is a short summary of capabilities in FREE version:

* TRUE fulltext search within title, content, meta values or programmatically-created text data
* Works with both MySQL table types (MYISAM, InnoDB)
* Supports Multisite (yes, in free version)
* Does not require 3rd-party libraries or services
* Displays search results like Google does (selected sentences with highlighted word)
* Works well on shared hostings
* Supports language translations
* Dramatically extends default WP search (not replaces it)
* Search full-text with true relevance
* Relevance formula can be justified via settings (post title, content and each meta field can have different weights)
* Make default search WP ordering configurable (very useful for WP site search via ?s=<query>)
* You can order results by relevance, date, post ID, title, slug, type, random, comment_count via settings page
* It has API and full documentation to customize plugin's behaviour
* Works well with PHP 5.6+ to PHP 7.2+

= Documentation =

Please refer [Documentation](https://fulltextsearch.org/documentation/ "WP FullText Search Documentation").

== Installation ==

1. Unpack and upload `fulltext-search` folder with all files to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Press `Rebuild Index` button to initialize index (actually this function will run automatically on first plugin install)

== Frequently Asked Questions ==

= Where can I put some notices, comments or bugreports? =

Do not hesistate to write to us at [Contact Us](https://fulltextsearch.org/contact/ "Contact Us") page.

== Screenshots ==

1. Smart Excerpts (Google-like search results) settings
2. Plugin configuration screen
3. Search and Relevance settings
4. Standard WP search tweaks (change ordering and direction of search)
5. Search core status widget
6. Indexing engine settings
7. Search tester screen

== Changelog ==

= 1.9.10 =
* Added Google-like Smart Excerpts

= 1.8.9 =
* Fixed 5 tiny bugs (thanks users for reports!)

= 1.8.7 =
* Added Multisite support

= 1.7.6 =
* Fixed 9 warnings and 21 notices while optimizing plugin for PHP 7.2
* Added support of PHP 7.2

= 1.7.5 =
* Added Main WP Search Tweaks settings

= 1.6.4 =
* Fixed a bug - it was a reason why plugin can't activate correctly on some hostings

= 1.6.3 =
* Added InnoDB support
* Added a switch of MySQL table type (InnoDB/MySQL)
* Fixed a bug with popup message

= 1.6.2 =
* Fixed MySQL queries: search speed sufficiently improved

= 1.6.1 =
* Added "Deeper Search" flag and functionality

= 1.6.0 =
* Added support for internal query filtering
* Added wpfts_search_terms filter
* Fixed some indexing speed issues

= 1.5.9 =
* Fixed Readme.txt
* Fixed queries to WP multisite support

= 1.5.8 =
* Compatibility with WP 4.8.1
* Indexing speed increased a bit (code was optimized)

= 1.4.6 =
* Added support for sites with specific DB table names

= 1.3.4 =
* Cosmetic changes

= 1.2.3 =
* Changed regexp which is splitting texts to words (non-english characters are now supported)
* Added `wpftp_split_to_words` filter which enables you to define your own "text splitting" algorithm

= 1.2.1 =
* Added complex query analyzer (support quotes)

= 1.1.7 =
* Added plugin icon
* Fixed description

= 1.1.6 =
* Lowered save_post hook priority to index metadata correctly

= 1.1.5 =
* Small bug fixes
* Debug logging removed

= 1.1.4 =
* Added cluster weights capability
* Plugin assigned to GPL license

= 1.0 =
* First Wordpress version

= 0.4 =
* Automatic indexing were added, over 30 bugs were fixed

= 0.1 =
* Initial edition. Basic functions added

== Upgrade Notice ==

= 1.1.4 =
* Upgrade immediately, because of some security issues found and fixed

= 1.0 =
* First version to be in Wordpress repository, just install it
