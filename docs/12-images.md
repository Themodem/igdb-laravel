# Images

Since version 3.5.0 it is possible to generate image URLs for
the [different available sizes](https://api-docs.igdb.com/#images).

This is supported for:

- `Artwork`
- `CharacterMugShot`
- `CompanyLogo`
- `Cover`
- `EventLogo`
- `GameEngineLogo`
- `PlatformLogo`
- `Screenshot`

## Basic Usage

### Default image

```php
// torchlight! {"lineNumbers": false}
use MarcReichel\IGDBLaravel\Enums\Image\Size;
use MarcReichel\IGDBLaravel\Models\Game;

$game = Game::where('name', 'Fortnite')
    ->with(['cover'])
    ->first();

$game->cover->getUrl();
```

### Other sizes

As the first parameter the method receives your desired image size. Simply use the available enum values
of the `MarcReichel\IGDBLaravel\Enums\Image\Size` enum.

```php
// torchlight! {"lineNumbers": false}
use MarcReichel\IGDBLaravel\Enums\Image\Size;
use MarcReichel\IGDBLaravel\Models\Game;

$game = Game::where('name', 'Fortnite')
    ->with(['cover'])
    ->first();

$game->cover->getUrl(Size::COVER_BIG);
```

### Retina images

If you want to get retina images simply set the second parameter to `true`.

```php
// torchlight! {"lineNumbers": false}
use MarcReichel\IGDBLaravel\Enums\Image\Size;
use MarcReichel\IGDBLaravel\Models\Game;

$game = Game::where('name', 'Fortnite')
    ->with(['cover'])
    ->first();

$game->cover->getUrl(Size::COVER_BIG, true);
```
