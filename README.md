# Flutopia

Flutopia is a set of utility classes for [Utopia](https://utopia.fyi/).

Fluid + Utopia = Flutopia.

Although these can be used with any site (not just WordPress), there are some [Oxygen Builder](https://oxygenbuilder.com/) specific classes in the CSS.

The benefit is automatic fluid responsiveness without adding any further CSS or multiple classes for different breakpoints.

## Features

1. [Responsive headings and body text](#headings-text)
2. [Automatic spacing of an element's children using `spacing-<size>` classes](#automatic-spacing)
3. [Classes for margin and padding](#classes-margin-padding)

## Examples

1. Adding a class of `space-l` for a Section or a Div will add large vertical space between the children (top margin excerpt the first child) of that element.
2. Adding a class of `mt-xl` for an element will add an extra large top margin for it.
3. Adding a class of `px-s` for an element will add small left and right padding for it.

## <a name="headings-text"></a>Responsive text

### Default headings and body text font-size

| Tag  | 320px   | 1140px  |
| ---- | ------- | ------- |
| H1   | 47.78px | 68.66px |
| H2   | 39.81px | 54.93px |
| H3   | 33.18px | 43.95px |
| H4   | 27.65px | 35.16px |
| H5   | 23.04px | 28.13px |
| H6   | 19.20px | 22.50px |
| body | 16px    | 18px    |

**How to read the above**:

Heading 1 text will have a font-size of 68.66px when the viewport size is 1140px or above and scale down linearly to 47.78px when the viewport width is 320px.

These Utopia-generated numbers can be customized by setting `font-size` and type scale at min viewport and max viewport. See the [FAQ](#faq) for details.

## <a name="automatic-spacing"></a>Automatic spacing

### Spacing classes

| Class         | Meaning                                                                |
| ------------- | :--------------------------------------------------------------------- |
| space-3xs     | 3 extra small spacing                                                  |
| space-2xs     | 2 extra small spacing                                                  |
| space-xs      | extra small spacing                                                    |
| space-s       | small spacing                                                          |
| space         | small spacing                                                          |
| space-m       | medium spacing                                                         |
| space-l       | large spacing                                                          |
| space-xl      | extra large spacing                                                    |
| space-2xl     | 2 extra large spacing                                                  |
| space-3xl     | 3 extra large spacing                                                  |
| space-3xs-2xs | 3 extra small spacing at min viewport to 2 extra small at max viewport |
| space-2xs-xs  | 2 extra small spacing at min viewport to extra small at max viewport   |
| space-xs-s    | extra small spacing at min viewport to small at max viewport           |
| space-s-m     | small spacing at min viewport to medium at max viewport                |
| space-m-l     | medium spacing at min viewport to large at max viewport                |
| space-l-xl    | large spacing at min viewport to extra large at max viewport           |
| space-xl-2xl  | extra large spacing at min viewport to 2 extra large at max viewport   |
| space-2xl-3xl | 2 extra large spacing at min viewport to 3 extra large at max viewport |
| space-s-l     | small spacing at min viewport to large at max viewport                 |

## <a name="classes-margin-padding"></a>Classes for margin and padding

### Available modifiers

| Modifier | Meaning                   |
| -------- | :------------------------ |
| m        | margin on all 4 sides     |
| p        | padding on all 4 sides    |
| mt       | margin at the top         |
| mr       | margin at the right       |
| mb       | margin at the bottom      |
| ml       | margin at the left        |
| mx       | margin at left and right  |
| my       | margin at top and bottom  |
| pt       | padding at the top        |
| pr       | padding at the right      |
| pb       | padding at the bottom     |
| pl       | padding at the left       |
| px       | padding at left and right |
| py       | padding at top and bottom |

### Available sizes

| Size | Meaning       |
| ---- | :------------ |
| 3xs  | 3 extra small |
| 2xs  | 2 extra small |
| xs   | extra small   |
| s    | small         |
| m    | medium        |
| l    | large         |
| xl   | extra large   |
| 2xl  | 2 extra large |
| 3xl  | 3 extra large |

All possible combinations of the above modifiers and sizes are present in Flutopia.

Examples:

- `m-3xs`
- `m-2xs`
- `m-xs`
- `m-s`
- `m-m`
- `m-l`
- `m-xl`
- `m-2xl`
- `m-3xl`
- `p-3xs`
- `p-2xs`
- and so on..

## How to install

### WordPress

1. Click on the `Code` button near the top and then `Download ZIP` to download the plugin.
2. Go to Plugins > Add New in your WordPress admin. Click on `Upload Plugin` and browse for the zip file.
3. Activate the plugin.

### Non WordPress

Find the utility classes inside the plugin's `flutopia.css` file. Use as many as needed.

## How to customize

You can use the plugin as is or if you want, customize by modifying the plugin's CSS files.

### Body text and headings font-size

The default font-size of body text was chosen as 18px. This is the value on desktop widths going down to 16px on mobiles.

| Tag  | 320px   | 1140px  |
| ---- | ------- | ------- |
| H1   | 47.78px | 68.66px |
| H2   | 39.81px | 54.93px |
| H3   | 33.18px | 43.95px |
| H4   | 27.65px | 35.16px |
| H5   | 23.04px | 28.13px |
| H6   | 19.20px | 22.50px |
| body | 16px    | 18px    |

If you wish to customize these

1. Visit the [fluid type scale calculator](https://utopia.fyi/type/calculator/?c=320,16,1.2,1140,18,1.25,6,2,&s=0.75|0.5|0.25,1.5|2|3|4|6,s-l)
2. Change any/all of width, font-size and type scale at min viewport and max viewport
3. Click `+` to add a scale step at the top so that there are a total of 6 steps
4. Copy the generated CSS and replace the corresponding CSS in the plugin's `assets/css/utopia.css` under the `Fluid type scale calculator` heading.

### Customizing space values

1. Visit the [fluid space calculator](https://utopia.fyi/space/calculator/?c=320,16,1.2,1140,18,1.25,5,2,&s=0.75%7C0.5%7C0.25,1.5%7C2%7C3%7C4%7C6,s-l)
2. Change any/all of width, font-size and type scale at min viewport and max viewport so it matches with your type scale numbers.
3. Copy the generated CSS except for [this](https://d.pr/i/ob00Lv) part and replace the corresponding CSS in the plugin's `assets/css/utopia.css` under the `Fluid space calculator` heading.

## <a name="faq"></a>FAQ

### How does this differ from Automatic.css

I am not familiar with it and haven't used it. I believe that plugin has more features and the ability for users to customize via plugin's settings inside WP admin. With Flutopia, customizations (optional) are manual. There is no reason to switch if you have a system that is working well.

### Any way to trim down the utility classes CSS file size?

Yes. Use Flutopia on a site or two, take note of the classes you are actually using. Then delete the rest from the plugin's `flutopia.css` file so you have your own copy of Flutopia for future projects.

## Changelog

### 1.0.0 - 10 Mar 2022

- Initial Release
