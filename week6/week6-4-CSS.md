# HTML CSS

- **Inline** - by using the `style` attribute inside HTML elements

- **Internal** - by using a `<style>` element in the `<head>` section

- **External** - by using a `<link>` element to link to an external CSS file

  

## Inline CSS

An inline CSS is used to apply a unique style to a single HTML element.

An inline CSS uses the `style` attribute of an HTML element.



## Internal CSS

An internal CSS is used to define a style for a single HTML page.

An internal CSS is defined in the `<head>` section of an HTML page, within a `<style>` element.



------

## External CSS

An external style sheet is used to define the style for many HTML pages.

To use an external style sheet, add a link to it in the `<head>` section of each HTML page:



Example HTML:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
        <h1>My Heading</h1>
        <p>hello world</p>

        <p>hello world this is another paragraph</p>

</body>
</html>
```

```css
/* styles.css */
body {
    background-color: powderblue;
  }
  h1 {
    color: blue;
    font-family: verdana;
    font-size: 300%;
  }
  p {
    color: red;
    font-family: courier;
    font-size: 160%;    
  }
```

