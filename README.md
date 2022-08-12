## WAI (Web Accessibility Initiative) plugin for Typesetter CMS ##
Author: Florin-Cătălin Tofan, ©2022

<a target="_blank" a href="">WAI (Web Accessibility Initiative) plugin for Typesetter CMS </a> helps with a variety of common accessibility problems. While most accessibility issues can’t be addressed without directly changing your theme, this plugins change font size, background colors, make hyperlinks more visible, increase contrast, make image greyscale and block CSS animation, transformation and hovering effects. This plugin is not intended to make your site compatible with any accessibility guidelines.

## See also 
* [Typesetter Home](http://www.typesettercms.com)
* [Typesetter on GitHub](https://github.com/Typesetter/Typesetter)
* [The A11Y Project site](https://www.a11yproject.com)
* [W3C](https://www.w3.org/standards/webdesign/accessibility)

## Current Version 
2.0

## Requirements ##
* Typesetter CMS

## Manual Installation ##
1. Download the master ZIP archive.
2. Upload the extracted folder to your server into the /addons directory.
3. Install using Typesetter's Admin Toolbox - Plugins - Manage - Available - Accessibility

## v.2.1 Fixing the fact that the text passed to the alt attribute (for menu icons) does not appear in Firefox or Google Chrome

* Mozilla Firefox, Google Chrome, and other browsers do not display the text used in the **alt** attribute when hovering over an image, like MSIE browser. Firefox, Chrome, and other browsers (except MSIE) follow the W3C standards for HTML, which states that an image should have title attribute for balloon text. For that reason, these browsers do not display the alt text on hovering over the image.

* The **title** attribute specifies extra information about an element. The information is most often shown as a tooltip text when the mouse moves over the element. The title attribute is part of the global attributes, and can be used on any HTML element.

* For all browser we must use image with both alt and title attributes to shows balloon text when mouse hover over image. 

Example:
```  <img alt="alt text for image" title="title text for image" src="image location"> ``` 

* Adding the title attribute displays balloon text when the mouse hovers over the image in Firefox, Google Chrome, Opera or other modern browsers and alt attribute do the same in MSIE.

* Tip: It is recomended using the alt attribute to describe the image for search engines and the visually impaired and the title attribute for the hover text.

Vote me on GitHub if it is useful for you or fork this repository if you feel inspired!

![image](https://github.com/florincatalin/Accessibility_Typesetter_Plugin/blob/main/accessibility.gif)
