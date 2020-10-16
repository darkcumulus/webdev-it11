## HTML Links - Hyperlinks

### HTML Link Syntax

<a href="url"> Link text</a>

Behavior:

- An unvisited link is underlined and blue
- A visited link is underlined and purple
- An active link is underlined and red



## HTML Links - The target Attribute

By default, the linked page will be displayed in the current browser window. To change this, you must specify another target for the link.

The `target` attribute specifies where to open the linked document.

The `target` attribute can have one of the following values:

- `_self` - Default. Opens the document in the same window/tab as it was clicked
- `_blank` - Opens the document in a new window or tab
- `_parent` - Opens the document in the parent frame
- `_top` - Opens the document in the full body of the window



## Absolute URLs vs. Relative URLs

Both examples above are using an **absolute URL** (a full web address) in the `href` attribute.

A local link (a link to a page within the same website) is specified with a **relative URL** (without the "https://www" part):



```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="http://google.com" target="_blank" >Go to Google.com</a>
<p><a href="html_images.asp">HTML Images</a></p>

<a href="default.asp">
        <img src="smiley.gif" alt="HTML tutorial" style="width:42px;height:42px;">
</a>

<a href="mailto:someone@example.com">Send email</a>

<a href="http://google.com" title="Go to google website">Visit the search engine</a>



<a href="http://mywebsite.com/html/default.php">my tutorial</a>

<a href="html/default.php">my tutorial</a>


</body>
</html>
```

