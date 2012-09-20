<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CodeIgniterYAML
 *
 * CodeIgniterYAML is a simple library that acts as a
 * wrapper for the Spyc YAML Parser - https://github.com/mustangostang/spyc/
 *
 * @author     José Tomás Tocino (info@josetomastocino.com)
 * @license    GPL License
 * @copyright  2012 José Tomás Tocino
 */

require_once(APPPATH . 'libraries/spyc.php');

class Yaml
{
    public function load ($source_yaml)
    {
        return Spyc::YAMLLoad($source_yaml);
    }

    public function dump ($source_array)
    {
        return Spyc::YAMLDump($source_array);
    }
}

/* End of file Yaml.php */
/* Location: ./application/libraries/Yaml.php */