# Cropselect for Kirby 3

This is a visual crop selector for Kirby 3. You can select from 9 different crop positions and use it like that:

### Blueprint:
```yaml
fields:
    cropselect:
        label:  Select crop position
        type:   cropselect
```

### Template:
```php
$image->crop(100, 200, $image->cropselect());
```

### Preview:

![Preview](https://user-images.githubusercontent.com/7975568/43335873-3fba4ad8-91d0-11e8-8604-0755b2655a58.gif)

## Installation

Put the `kirby-cropselect` folder into your `site/plugins` folder.
