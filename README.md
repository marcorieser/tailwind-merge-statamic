# Tailwind Merge Statamic

This addon allows you to merge multiple [Tailwind CSS](https://tailwindcss.com/) classes and automatically resolves conflicts between them.

![](https://raw.githubusercontent.com/marcorieser/tailwind-merge-statamic/main/art/example.png)

## Features

This addon provides:

- An Antlers modifier for merging the Tailwind CSS classes
- Installs [`tailwind-merge-laravel`](https://github.com/gehrisandro/tailwind-merge-laravel) for making usage of the features outside of Antlers

## Installation

Run the following command from your project root:

``` bash
composer require marcorieser/tailwind-merge-statamic
```

## How to Use

Just apply the modifier to your existing classes. <br>
By default, the modifier uses the value of `class` in the current level of the cascade for merging.
```antlers
<div class="{{ 'w-10 h-10 rounded-full bg-red-500' | tw_merge }}"></div>
```

 However, you can use a different variable by passing its name as parameter to the modifier.
```antlers
<div class="{{ 'w-10 h-10 rounded-full bg-red-500' | tw_merge('my_variable_name') }}"></div>
```

Additionally, you can disable the usage of a variable in the cascade completely by passing `false` as parameter. <br>
This allows you to pass the variable directly in the classes string:
```antlers
<div class="{{ 'w-10 h-10 rounded-full bg-red-500 {class}' | tw_merge(false) }}"></div>
```

Or merging arrays of classes:
```antlers
<div class="{{ [ 'w-10', 'h-10', 'rounded-full', 'bg-red-500', class, some_other_variable ] | tw_merge(false) }}"></div>
```


## Documentation
There is currently not more to that addon as written above but the underlying Laravel package is capable of so much more. <br> Please have a look at its [GitHub Repo](https://github.com/gehrisandro/tailwind-merge-laravel).

## Credits
Huge thanks to [Sandro Gehri](https://github.com/gehrisandro) for providing all of these features.
