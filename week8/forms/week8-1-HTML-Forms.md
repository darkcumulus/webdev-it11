# HTML Forms



## The <form> Element

HTML forms are used to collect user input.

The **<form>** element defines an HTML form:

```html
<form>
.
form elements
.
</form>
```

HTML forms contain **form elements**.

Form elements are different types of input elements, checkboxes, radio buttons, submit buttons, and more.

------

## The <input> Element

The **<input>** element is the most important **form element**.

The <input> element has many variations, depending on the **type** attribute.

Here are the types used in this topic:

| Type   | Description                                                  |
| :----- | :----------------------------------------------------------- |
| text   | Defines normal text input                                    |
| radio  | Defines radio button input (for selecting one of many choices) |
| submit | Defines a submit button (for submitting the form)            |



## Text Input

**<input type="text">** defines a one-line input field for **text input**:

```html
<form>
  First name:<br>
  <input type="text" name="firstname"><br>
  Last name:<br>
  <input type="text" name="lastname">
</form>
```

This is how it will look like in a browser:

![text_input](images\text_input.png)

**Note:** . Also note that the default width of a text field is 20 characters.

## Radio Button Input

**<input type="radio">** defines a **radio button**.

Radio buttons let a user select ONE of a limited number of choices:

### Example:

```html
<form>
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other
</form>
```

This is how the HTML code above will be displayed in a browser:

![radio_button](images\radio_button.png)

## The Submit Button

**<input type="submit">** defines a button for **submitting** a form to a **form-handler**.

The form-handler is typically a server page with a script for processing input data.

The form-handler is specified in the form's **action** attribute:

### Example:

```html
<form action="action_page.php">
  First name:<br>
  <input type="text" name="firstname" value="Mickey"><br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse"><br><br>
  <input type="submit" value="Submit">
</form>
```

This is how the HTML code above will be displayed in a browser:

![submit_button](images\submit_button.png)

## The Action Attribute

The **action attribute** defines the action to be performed when the form is submitted.

The common way to submit a form to a server, is by using a submit button.

Normally, the form is submitted to a web page on a web server.

In the example above, a server-side script is specified to handle the submitted form:

```html
<form action="action_page.php">
```



If the action attribute is omitted, the action is set to the current page.



## The Method Attribute

The **method attribute** specifies the HTTP method (**GET** or **POST**) to be used when submitting the forms:

```html
<form action="action_page.php" method="get">
```

or

```html
<form action="action_page.php" method="post">
```



## When to Use GET?

You can use GET (the default method):

If the form submission is passive (like a search engine query), and without sensitive information.

When you use GET, the form data will be visible in the page address:

```html
action_page.php?firstname=Mickey&lastname=Mouse
```

***Take Note***  GET is best suited to short amounts of data. Size limitations are set in your browser.



## When to Use POST?

You should use POST:

If the form is updating data, or includes sensitive information (password).

POST offers better security because the submitted data is not visible in the page address.

------

## The Name Attribute

To be submitted correctly, each input field must have a name attribute.

This example will only submit the "Last name" input field:

```html
<form action="action_page.php">
  First name:<br>
  <input type="text" value="Mickey"><br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse"><br><br>
  <input type="submit" value="Submit">
</form>
```



## Grouping Form Data with <fieldset>

The **<fieldset>** element groups related data in a form.

The **<legend>** element defines a caption for the <fieldset> element.

Example:

```html
<form action="action_page.php">
  <fieldset>
    <legend>Personal information:</legend>
    First name:<br>
    <input type="text" name="firstname" value="Mickey"><br>
    Last name:<br>
    <input type="text" name="lastname" value="Mouse"><br><br>
    <input type="submit" value="Submit">
  </fieldset>
</form>
```

This is how the HTML code above will be displayed in a browser:

![fieldset](images\fieldset.png)

## HTML Form Attributes

An HTML <form> element, with all possible attributes set, will look like this:

```html
<form action="action_page.php" method="post" target="_blank" accept-charset="UTF-8"
enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate>
.
form elements
.
</form>
```

Here is the list of <form> attributes:

| Attribute      | Description                                                  |
| :------------- | :----------------------------------------------------------- |
| accept-charset | Specifies the charset used in the submitted form (default: the page charset). |
| action         | Specifies an address (url) where to submit the form (default: the submitting page). |
| autocomplete   | Specifies if the browser should autocomplete the form (default: on). |
| enctype        | Specifies the encoding of the submitted data (default: is url-encoded). |
| method         | Specifies the HTTP method used when submitting the form (default: GET). |
| name           | Specifies a name used to identify the form (for DOM usage: document.forms.name). |
| novalidate     | Specifies that the browser should not validate the form.     |
| target         | Specifies the target of the address in the action attribute (default: _self). |

