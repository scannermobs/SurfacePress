# SurfacePress

An in-house starter theme for WordPress designed for rapid setup and ease of editing.

### Why use a starter theme?

Using off-the-shelf themes is best avoided if they will be modified much, due to potential difficulties with theme updates. In general it's best to use a *starter theme* which is as lightweight as possible, meaning your styling can be built very easily without having to remove or override the theme's existing base style. JointsWP is an excellent starter theme, which integrates Foundation into the WordPress theme system very well whilst allowing for maximum customisation.

### Why use SurfacePress?

SurfacePress is built on top of JointsWP and offers more functionality out-of-the-box. Styles, design decisions and page layout are kept as simple as possible, whilst also providing shortcuts for many common website design patterns. Customisation is not only recommended, but there are helpers built into the theme for the best way to go about customising, such as syntax suggestions and asset templates.

## Getting started

The setup is the same as installing any standard WordPress theme. Please customise the theme directly.

The main stylesheet and JavaScript files are in `assets > scripts > scripts.js`, and `assets > styles > custom.css`. Please use `functions > enqueue-scripts.php` as required.

The default nav template is `parts > nav-default.php`; the other nav types in this folder are unedited from the original JointsWP files.

## Comes pre-installed with/uses

* [Foundation](https://foundation.zurb.com/) -- The web framework (currently running Foundation 6.5.3)
* [Google Fonts](https://fonts.google.com/) -- With optimal settings for custom fonts
* [Font Awesome](https://fontawesome.com/) -- For icon fonts
* [Cookie Consent](https://cookieconsent.osano.com/) -- Cookie law popup

### Nav system

Comes with an advanced two-tier nav system, which is screen reader-friendly and works for all devices. Can easily be removed or customised.

### Accessibility options

Already integrated with an accessibility options system, which uses [js cookie](https://github.com/js-cookie/js-cookie) to set data-attributes on the `body` tag, with (basic) corresponding css.

### Lightbox system

Comes with an automatic lightbox system, which works by finding wp block images that have links set to 'media file' (ie themselves). For galleries arrows are added. By default this system is disabled for mobile, as generally lightboxes are of little use here, but there are some notes in the JavaScript about how to alter this very easily.

## Notes

* Please use [Real Favicon Generator](https://realfavicongenerator.net/) to generate a custom favicon, and replace the files in the theme root directory
* Headings (eg for the media queries) in the main stylesheet (`custom.css`) can be created [here](http://patorjk.com/software/taag/#p=display&f=ANSI%20Shadow) -- these make the media queries easier to follow, and help to visually break up longer stylesheet documents
* Information about best development practices can be found at: [handbook.surfaceimpression.digital](https://handbook.surfaceimpression.digital)

## Contributing

All feedback is welcome! This is a work-in-progress and will not be perfect, but its use should make for easier collaboration and maintenence. If you run into any issues or have any suggestions please Slack or email Ben C or an SI project manager.

Please read [CONTRIBUTING.md](https://github.com/scannermobs/SurfacePress/blob/master/contributing.md) for details on the code of conduct, and the process for submitting pull requests.

## Authors

* **Ben Crossman** -- *Initial work* -- [Surface Impression](https://surfaceimpression.digital/)

## License

This project is licensed under the MIT License -- see the [LICENSE.md](LICENSE.md) file for details.

## Acknowledgements

The author would like to thank Jeremy Englert / NeatlyPressed for the great starter theme that is JointsWP, upon which SurfacePress is based.
