# CodeIgniterYAML

* Author: [Dan Horrigan](http://dhorrigan.com/)

## Description

CodeIgniterYAML is a simple library that acts as a wrapper for the [Spyc YAML Parser](https://github.com/mustangostang/spyc/).

## Installation

Simply copy all the files in your `application` folder. Then, load the library in your controller using

    $this->load->library('yaml');

Or add the following line to your `application/autoload.php` folder to load automatically the library in every controller.

    $autoload['libraries'][] = 'yaml';

## Usage

The library has two methods. To parse a YAML file or a string containing YAML, use:

    $content = $this->yaml->load($file_path_or_string);

To dump the contents of an array to a YAML string, use:

    $yaml_str = $this->yaml->dump($array);

And that's it!