# HTML Input Types



## Input Types

This chapter describes the input types of the <input> element.



## Input Type: text

**<input type="text">** defines a one-line input field for **text input**:

```html
<form>
  First name:<br>
  <input type="text" name="firstname"><br>
  Last name:<br>
  <input type="text" name="lastname">
</form>
```

***DEMO***

## Input Type: password

**<input type="password">** defines a **password field**:

```html
<form>
  User name:<br>
  <input type="text" name="username"><br>
  User password:<br>
  <input type="password" name="psw">
</form>
```

***DEMO***

## Input Type: submit

**<input type="submit">** defines a button for **submitting** form input to a **form-handler**.

The form-handler is typically a server page with a script for processing input data.

The form-handler is specified in the form's action attribute:

```html
<form action="action_page.php">
  First name:<br>
  <input type="text" name="firstname" value="Mickey"><br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse"><br><br>
  <input type="submit" value="Submit">
</form>
```

***Note*** If you omit the submit button's value attribute, the button will get a default text:

***DEMO***

```html
<form action="action_page.php">
  First name:<br>
  <input type="text" name="firstname" value="Mickey"><br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse"><br><br>
  <input type="submit">
</form>
```

## Input Type: radio

**<input type="radio">** defines a **radio button**.

Radio buttons let a user select ONLY ONE of a limited number of choices:

Example:

```html
<form>
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other
</form>
```

## Input Type: checkbox

**<input type="checkbox">** defines a **checkbox**.

Checkboxes let a user select ZERO or MORE options of a limited number of choices.

Example:

```html
<form>
  <input type="checkbox" name="vehicle1" value="Bike"> I have a bike<br>
  <input type="checkbox" name="vehicle2" value="Car"> I have a car
</form>
```

***DEMO***



## Input Type: button

**<input type="button">** defines a **button**:

```html
<input type="button" onclick="alert('Hello World!')" value="Click Me!">
```

***DEMO***

## HTML5 Input Types

HTML5 added several new input types:

- color
- date
- datetime
- datetime-local
- email
- month
- number
- range
- search
- tel
- time
- url
- week

**note**  Input types, not supported by old web browsers, will behave as input type text.



## Input Type: number

The **<input type="number">** is used for input fields that should contain a numeric value.

You can set restrictions on the numbers.

Depending on browser support, the restrictions can apply to the input field.

```html
<form>
  Quantity (between 1 and 5):
  <input type="number" name="quantity" min="1" max="5">
</form>
```

**Demo**

## Input Restrictions

Here is a list of some common input restrictions (some are new in HTML5):

| Attribute | Description                                                  |
| :-------- | :----------------------------------------------------------- |
| disabled  | Specifies that an input field should be disabled             |
| max       | Specifies the maximum value for an input field               |
| maxlength | Specifies the maximum number of character for an input field |
| min       | Specifies the minimum value for an input field               |
| pattern   | Specifies a regular expression to check the input value against |
| readonly  | Specifies that an input field is read only (cannot be changed) |
| required  | Specifies that an input field is required (must be filled out) |
| size      | Specifies the width (in characters) of an input field        |
| step      | Specifies the legal number intervals for an input field      |
| value     | Specifies the default value for an input field               |

Example:

```html
<form>
  Quantity:
  <input type="number" name="points" min="0" max="100" step="10" value="30">
</form>
```



## Input Type: date

The **<input type="date">** is used for input fields that should contain a date.

Depending on browser support, a date picker can show up in the input field.

```html
<form>
  Birthday:
  <input type="date" name="bday">
</form>
```

You can add restrictions to the input:

```html
<form>
  Enter a date before 1980-01-01:
  <input type="date" name="bday" max="1979-12-31"><br>
  Enter a date after 2000-01-01:
  <input type="date" name="bday" min="2000-01-02"><br>
</form>
```

**Demo**

## Input Type: color

The **<input type="color">** is used for input fields that should contain a color.

Depending on browser support, a color picker can show up in the input field.

```html
<form>
  Select your favorite color:
  <input type="color" name="favcolor">
</form>
```

**Demo**

## Input Type: range

The **<input type="range">** is used for input fields that should contain a value within a range.

Depending on browser support, the input field can be displayed as a slider control.

```html
<form>
  <input type="range" name="points" min="0" max="10">
</form>
```

**note** You can use the following attributes to specify restrictions: min, max, step, value.

**Demo**



## Input Type: month

The **<input type="month">** allows the user to select a month and year.

Depending on browser support, a date picker can show up in the input field.

```html
<form>
  Birthday (month and year):
  <input type="month" name="bdaymonth">
</form>
```

------



## Input Type: week

The **<input type="week">** allows the user to select a week and year.

Depending on browser support, a date picker can show up in the input field.

```html
<form>
  Select a week:
  <input type="week" name="week_year">
</form>
```



## Input Type: time

The **<input type="time">** allows the user to select a time (no time zone).

Depending on browser support, a time picker can show up in the input field.

```html
<form>
  Select a time:
  <input type="time" name="usr_time">
</form>
```

**Demo**

## Input Type: datetime-local

The **<input type="datetime-local">** allows the user to select a date and time (no time zone).

Depending on browser support, a date picker can show up in the input field.

```html
<form>
  Birthday (date and time):
  <input type="datetime-local" name="bdaytime">
</form>
```

## Input Type: email

The **<input type="email">** is used for input fields that should contain an e-mail address.

Depending on browser support, the e-mail address can be automatically validated when submitted.

Some smartphones recognize the email type, and adds ".com" to the keyboard to match email input.

```html
<form>
  E-mail:
  <input type="email" name="email">
</form>
```



## Input Type: search

The **<input type="search">** is used for search fields (a search field behaves like a regular text field).

```html
<form>
  Search Google:
  <input type="search" name="googlesearch">
</form>
```



## Input Type: tel

The **<input type="tel">** is used for input fields that should contain a telephone number.

The tel type is currently supported only in Safari 8.

```html
<form>
  Telephone:
  <input type="tel" name="usrtel">
</form>
```



## Input Type: url

The **<input type="url">** is used for input fields that should contain a URL address.

Depending on browser support, the url field can be automatically validated when submitted.

Some smartphones recognize the url type, and adds ".com" to the keyboard to match url input.

```html
<form>
  Add your homepage:
  <input type="url" name="homepage">
</form>
```

