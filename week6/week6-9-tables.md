# HTML Tables

HTML tables allow web developers to arrange data into rows and columns.



| Company                      | Contact          | Country |
| :--------------------------- | :--------------- | :------ |
| Alfreds Futterkiste          | Maria Anders     | Germany |
| Centro comercial Moctezuma   | Francisco Chang  | Mexico  |
| Ernst Handel                 | Roland Mendel    | Austria |
| Island Trading               | Helen Bennett    | UK      |
| Laughing Bacchus Winecellars | Yoshi Tannamuri  | Canada  |
| Magazzini Alimentari Riuniti | Giovanni Rovelli | Italy   |



## Define an HTML Table

The `<table>` tag defines an HTML table.

Each table row is defined with a `<tr>` tag. Each table header is defined with a `<th>` tag. Each table data/cell is defined with a `<td>` tag.

By default, the text in `<th>` elements are bold and centered.

By default, the text in `<td>` elements are regular and left-aligned.



## Remember

The `<td>` elements are the data containers of the table.
They can contain all sorts of HTML elements; text, images, lists, other tables, etc.



## HTML Table - Collapsed Borders

To let the borders collapse into one border, add the CSS `border-collapse` property:





## HTML Table - Add Cell Padding

Cell padding specifies the space between the cell content and its borders.

If you do not specify a padding, the table cells will be displayed without padding.

To set the padding, use the CSS `padding` property:



## HTML Table - Left-align Headings

By default, table headings are bold and centered.

To left-align the table headings, use the CSS `text-align` property:



## HTML Table - Add Border Spacing

Border spacing specifies the space between the cells.

To set the border spacing for a table, use the CSS `border-spacing` property:





## HTML Table - Cell that Span Many Columns

To make a cell span more than one column, use the `colspan` attribute:







## HTML Table - Add a Caption

To add a caption to a table, use the `<caption>` tag:

### 

## A Special Style for One Table

To define a special style for one particular table, add an `id` attribute to the table:





- Use the HTML `<table>` element to define a table
- Use the HTML `<tr>` element to define a table row
- Use the HTML `<td>` element to define a table data
- Use the HTML `<th>` element to define a table heading
- Use the HTML `<caption>` element to define a table caption
- Use the CSS `border` property to define a border
- Use the CSS `border-collapse` property to collapse cell borders
- Use the CSS `padding` property to add padding to cells
- Use the CSS `text-align` property to align cell text
- Use the CSS `border-spacing` property to set the spacing between cells
- Use the `colspan` attribute to make a cell span many columns
- Use the `rowspan` attribute to make a cell span many rows
- Use the `id` attribute to uniquely define one table