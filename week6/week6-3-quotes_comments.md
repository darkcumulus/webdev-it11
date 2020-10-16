## HTML <blockquote> for Quotations

The HTML `<blockquote>` element defines a section that is quoted from another source.

Browsers usually indent `<blockquote>` elements.



## HTML <q> for Short Quotations

The HTML `<q>` tag defines a short quotation.

Browsers normally insert quotation marks around the quotation.



## HTML <abbr> for Abbreviations

The HTML `<abbr>` tag defines an abbreviation or an acronym, like "HTML", "CSS", "Mr.", "Dr.", "ASAP", "ATM".

Marking abbreviations can give useful information to browsers, translation systems and search-engines.

**Tip:** Use the global title attribute to show the description for the abbreviation/acronym when you mouse over the element. 



## HTML <address> for Contact Information

The HTML `<address>` tag defines the contact information for the author/owner of a document or an article.

The contact information can be an email address, URL, physical address, phone number, social media handle, etc.

The text in the `<address>` element usually renders in *italic,* and browsers will always add a line break before and after the `<address>` element.



## HTML <cite> for Work Title

The HTML `<cite>` tag defines the title of a creative work (e.g. a book, a poem, a song, a movie, a painting, a sculpture, etc.).

**Note:** A person's name is not the title of a work.

The text in the `<cite>` element usually renders in *italic*.



## HTML <bdo> for Bi-Directional Override

BDO stands for Bi-Directional Override.

The HTML `<bdo>` tag is used to override the current text direction:





# HTML Comments



```hml
<!-- Write your comments here -->
```





Example Code

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
        <p>Here is a quote from WWF's website:</p>
        <blockquote cite="http://www.worldwildlife.org/who/index.html">
        For 50 years, WWF has been protecting the future of nature.
        The world's leading conservation organization,
        WWF works in 100 countries and is supported by
        1.2 million members in the United States and
        close to 5 million globally.
        </blockquote>

        <p>WWF's goal is to: <q>Build a future where people live in harmony with nature.</q></p>

        <p>The <abbr title="World Health Organization">WHO</abbr> was founded in 1948.</p>

        <address>
                Written by John Doe.<br>
                Visit us at:<br>
                Example.com<br>
                Box 564, Disneyland<br>
                USA
        </address>

        <!--  -->
        <p><cite>The Scream</cite> by Edvard Munch. Painted in 1893.</p>

        <bdo dir="ltr">This text will be written from right to left</bdo>

        <!-- This is a comment -->

        <p>This is a paragraph.</p>

        <!-- Remember to add more information here -->

        <!-- Do not display this image at the moment
          <img border="0" src="pic_trulli.jpg" alt="Trulli">
        -->


</body>
</html>
```

