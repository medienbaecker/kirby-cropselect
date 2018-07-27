# Cropselect for Kirby 3

This is a visual crop selector for Kirby 3. You can select from 9 different crop positions and use it in your template like that:

Blueprint:
```yaml
fields:
    cropselect:
        label:  Select crop position
        type:   cropselect
```

Template:
```php
$image->crop(100, 200, $image->cropselect()->value());
```

![Preview](https://user-images.githubusercontent.com/7975568/43325311-a0a86362-91b6-11e8-954f-98eb24aeb522.gif)

## Installation

Put the `kirby-cropselect` folder into your `site/plugins` folder.