PHP Content A11y Links
=======================
Search a content block (string or object) with PHP to look for any links that open in a new window which need a "new window" icon to be accessible

**Research about why this is important**: [WebAIM Link Text](http://webaim.org/techniques/hypertext/hypertext_links)

**3rd Party Libraries**: [Simple HTML Dom](http://simplehtmldom.sourceforge.net/)

I'll probably turn this into a simple WordPress plugin, but for now here's a small proof of concept. All this script does is search through an HTML block for links with target="_blank" an appends an SVG icon with alt text reading, "This link opens in a new window".

[I made the WordPress Plugin](https://github.com/freshtilledsoil/wp-a11y-links).
