# Tailwind Merge Statamic

This addon allows you to merge multiple [Tailwind CSS](https://tailwindcss.com/) classes and automatically resolves conflicts between them.

![](https://raw.githubusercontent.com/marcorieser/tailwind-merge-statamic/main/art/example.png)

## Features

This addon provides:

- An Antlers modifier for merging the Tailwind CSS classes
- Installs the [`tailwind-merge-laravel`](https://github.com/gehrisandro/tailwind-merge-laravel) package which provides the merge functionality within the Laravel context.

## Installation

Run the following command from your project root:

``` bash
composer require marcorieser/tailwind-merge-statamic
```

## How to Use

> Keep in mind: Later applied classes overrule previous ones.

Just apply the modifier to your existing Tailwind CSS classes.  
```antlers
<div class="{{ 'w-10 h-10 rounded-full bg-red-500' | tw_merge }}"></div>
```

It's possible to pass the classes as a string, as array or a combination of both:  
```antlers
{{ 'w-10 h-10 rounded-full bg-red-500' | tw_merge }}
{{ ['w-10', 'h-10', 'rounded-full', 'bg-red-500'] | tw_merge }}
{{ ['w-10', 'h-10', ['rounded-full', 'bg-red-500']] | tw_merge }}
```

By default, the modifier uses the `class` variable at the current level of the cascade for merging:
```antlers
{{# these lines are identical #}}
{{ 'w-10 h-10 rounded-full bg-red-500' | tw_merge }}
{{ 'w-10 h-10 rounded-full bg-red-500' | tw_merge('class') }}
```

 You can use different variables by passing its names as parameters to the modifier:
```antlers
{{ 'w-10 h-10 rounded-full bg-red-500' | tw_merge('variable_1', 'variable_2') }}
```

If you want, you can disable the behavior of automatically resolving variables from the cascade entirely by passing `false` as parameter and handle everything on your own as seen below.
```antlers
{{ 'w-10 h-10 rounded-full bg-red-500 {class} {other_classes}' | tw_merge(false) }}
```


## Documentation
There is currently not more to that addon as written above but the underlying Laravel package is capable of so much more. Please have a look at its [GitHub Repo](https://github.com/gehrisandro/tailwind-merge-laravel).

## Credits
Huge thanks to [Sandro Gehri](https://github.com/gehrisandro) for providing that awesome Laravel package.
