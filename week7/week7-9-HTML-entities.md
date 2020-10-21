# HTML Entities

Reserved characters in HTML must be replaced with character entities.

Characters, not present on your keyboard, can also be replaced by entities.



## HTML Entities

Some characters are reserved in HTML.

If you use the less than (<) or greater than (>) signs in your text, the browser might mix them with tags.

Character entities are used to display reserved characters in HTML.

A character entity looks like this:

```html
&entity_name;
OR
&#entity_number;
```

To display a less than sign we must write: 

```html
&lt; or &#60;
```



***Tip***

The advantage of using an entity name, instead of a number, is that the name is easier to remember.

The disadvantage is that browsers may not support all entity names, but the support for numbers is good.

## Non-breaking Space

A common character entity used in HTML is the non-breaking space: `&nbsp;`

A non-breaking space is a space that will not break into a new line.

Two words separated by a non-breaking space will stick together at the end of a line. This is handy when breaking the words might be disruptive.

Examples:

- 10 m/s
- 10 km/h
- 10 PM

Another common use of the non-breaking space is to prevent that browsers truncate spaces in HTML pages.

If you write 10 spaces in your text, the browser will remove 9 of them. To add real spaces to your text, you can use the `&nbsp;` character entity.

 ***Tip*** The non-breaking hyphen `&#8209` lets you use a hyphen character that won't break.

![char_entities](images\char_entities.png)

***Note***  Entity names are case sensitive.

## Combining Diacritical Marks

A diacritical mark is a "glyph" added to a letter.

Some diacritical marks, like grave ( ̀) and acute ( ́) are called accents.

Diacritical marks can appear both above and below a letter, inside a letter, and between two letters.

Diacritical marks can be used in combination with alphanumeric characters, to produce a character that is not present in the character set (encoding) used in the page.

Here are some examples:

![diacritical_marks](images\diacritical_marks.png)