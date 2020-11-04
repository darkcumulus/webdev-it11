# HTML Input Attributes

## The value Attribute

The **value** attribute specifies the initial value for an input field:

```html
<form action="">
First name:<br>
<input type="text" name="firstname" value="John">
<br>
Last name:<br>
<input type="text" name="lastname">
</form>
```

Output:

<form action="">
First name:<br>
<input type="text" name="firstname" value="John">
<br>
Last name:<br>
<input type="text" name="lastname">
</form>



## The readonly Attribute

The **readonly** attribute specifies that the input field is read only (cannot be changed):

```html
<form action="">
First name:<br>
<input type="text" name="firstname" value="John" readonly>
<br>
Last name:<br>
<input type="text" name="lastname">
</form>
```

**Note** The readonly attribute does not need a value. It is the same as writing readonly="readonly".



## The disabled Attribute

The **disabled** attribute specifies that the input field is disabled.

A disabled element is un-usable and un-clickable.

Disabled elements will not be submitted.

Example:

```html
<form action="">
First name:<br>
<input type="text" name="firstname" value="John" disabled>
<br>
Last name:<br>
<input type="text" name="lastname">
</form>
```

**Note** The disabled attribute does not need a value. It is the same as writing disabled="disabled".



## The size Attribute

The **size** attribute specifies the size (in characters) for the input field:

```html
<form action="">
First name:<br>
<input type="text" name="firstname" value="John" size="40">
<br>
Last name:<br>
<input type="text" name="lastname">
</form>
```



## The maxlength Attribute

The **maxlength** attribute specifies the maximum allowed length for the input field:

Example:

```html
<form action="">
First name:<br>
<input type="text" name="firstname" maxlength="10">
<br>
Last name:<br>
<input type="text" name="lastname">
</form>
```

**Note** : With a maxlength attribute, the input control will not accept more than the allowed number of characters.

**Note** : The attribute does not provide any feedback. If you want to alert the user, you must write JavaScript code.

**Take Note** Input restrictions are not foolproof. JavaScript provides many ways to add illegal input.
To safely restrict input, restrictions must be checked by the receiver (the server) as well.

