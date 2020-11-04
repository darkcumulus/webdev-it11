# HTML Form Elements



## The <input> Element

The most important form element is the **<input>** element.

The <input> element can vary in many ways, depending on the **type** attribute.



## The <select> Element (Drop-Down List)

The **<select>** element defines a **drop-down** list:

Example:

```html
<select name="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</select>
```

***DEMO***

The **<option>** elements defines the options to select.

The list will normally show the first item as selected.

You can add a selected attribute to define a predefined option.

Example:

```html
<option value="fiat" selected>Fiat</option>
```



## The <textarea> Element

The **<textarea>** element defines a multi-line input field (**a text area**):

Example:

```html
<textarea name="message" rows="10" cols="30">
The cat was playing in the garden.
</textarea>
```

***DEMO***



## The <button> Element

The **<button>** element defines a clickable **button**:

```html
<button type="button" onclick="alert('Hello World!')">Click Me!</button>
```

***DEMO***



## HTML5 Form Elements

HTML5 added the following form elements:

- <datalist>
- <keygen>
- <output>

***NOTE*** By default, browsers do not display unknown elements. New elements will not destroy your page.



## HTML5 <datalist> Element

The **<datalist>** element specifies a list of pre-defined options for an <input> element.

Users will see a drop-down list of pre-defined options as they input data.

The **list** attribute of the <input> element, must refer to the **id** attribute of the <datalist> element.

Example:

An <input> element with pre-defined values in a <datalist>:

```html
<form action="action_page.php">
  <input list="browsers">
  <datalist id="browsers">
    <option value="Internet Explorer">
    <option value="Firefox">
    <option value="Chrome">
    <option value="Opera">
    <option value="Safari">
  </datalist>
</form>
```



## HTML5 <output> Element

The <output> element represents the result of a calculation (like one performed by a script).

Example:

In the following example, the form provides a slider whose value can range between `0` and `100`, and an [``](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input) element into which you can enter a second number. The two numbers are added together, and the result is displayed in the `<output>` element each time the value of any of the controls changes.

```html
<form oninput="result.value=parseInt(a.value)+parseInt(b.value)">
  <input type="range" id="b" name="b" value="50" /> +
  <input type="number" id="a" name="a" value="10" /> =
  <output name="result" for="a b">60</output>
</form>
```

