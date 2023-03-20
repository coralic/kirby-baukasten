<?php

use Kirby\Data\Yaml;
use Kirby\Filesystem\F;

return [
  'code' => 'de',
  'default' => true,
  'direction' => 'ltr',
  'locale' => [
    'LC_ALL' => 'de_DE'
  ],
  'name' => 'Deutsch',
  'translations' => Yaml::decode(F::read(dirname(__DIR__) . '/translations/de.yml')),
  'url' => '/'
];
