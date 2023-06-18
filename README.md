# Tailwind Merge Statamic

This addon allows you to merge multiple [Tailwind CSS](https://tailwindcss.com/) classes and automatically resolves conflicts between them.

![](https://raw.githubusercontent.com/marcorieser/tailwind-merge-statamic/main/art/example.png)

## Features

This addon provides:

- An Antlers modifier for merging the Tailwind CSS classes.
- Installs the [`tailwind-merge-laravel`](https://github.com/gehrisandro/tailwind-merge-laravel) package which provides the merge functionality within the Laravel context.

## Installation

Run the following command from your project root:

``` bash
composer require marcorieser/tailwind-merge-statamic
```

## How to Use

> Keep in mind: Later applied classes overrule previous ones.

Create your class string as you normally do and apply the modifier which then removes the conflicting classes:
```antlers
{{ varable_holding_classes = 'bg-blue-500 w-8' }}

<div class="{{ 'w-10 h-10 rounded-full bg-red-500 {varable_holding_classes}' | tw_merge }}"></div>

{{# output #}}
<div class="w-8 h-10 rounded-full bg-blue-500"></div>
```

Alternatively, you can pass the names of the variables as params to the modifier and omit them in your class string:
```antlers
<div class="{{ 'w-10 h-10 rounded-full bg-red-500' | tw_merge('varable_holding_classes', 'another_variable') }}"></div>
```

It is possible to apply the modifier to a string, an array or a combination of both:
```antlers
{{ 'w-10 h-10 rounded-full bg-red-500 {variable}' | tw_merge }}
{{ ['w-10', 'h-10', 'rounded-full', 'bg-red-500',  '{variable}'] | tw_merge }}
{{ ['w-10', 'h-10', ['rounded-full', 'bg-red-500'], '{variable}'] | tw_merge }}
```

## Documentation
There is currently not more to that addon as written above but the underlying Laravel package is capable of so much more. Please have a look at its [GitHub Repo](https://github.com/gehrisandro/tailwind-merge-laravel).

## Credits
Huge thanks to [Sandro Gehri](https://github.com/gehrisandro) for providing that awesome Laravel package.
