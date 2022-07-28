<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__.'/vendor/symfony/class-loader/UniversalClassLoader.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();

$loader->registerNamespaces(array(
    'Laminas\Http\Exception' =>__DIR__.'/vendor/laminas/laminas-http/src/Exception',
    'Laminas\Http\Client\Adapter\Exception' => __DIR__.'/vendor/laminas/laminas-http/src/Client/Adapter/Exception',
    'Laminas\Http\Client\Adapter' => __DIR__.'/vendor/laminas/laminas-http/src/Client/Adapter',
    'Laminas\Http\Client\Exception' => __DIR__.'/vendor/laminas/laminas-http/src/Client/Exception',
    'Laminas\Http\Header' => __DIR__.'/vendor/laminas/laminas-http/src/Header',
    'Laminas\Http' => __DIR__.'/vendor/laminas/laminas-http/src',
    'Laminas\I18n\Translator' => __DIR__.'/vendor/laminas/laminas-i18n/src/Translator',
    'Laminas\Stdlib' => __DIR__.'/vendor/laminas/laminas-stdlib/src',
    'Laminas\Uri' => __DIR__.'/vendor/laminas/laminas-uri/src',
    'Laminas\Validator' => __DIR__.'/vendor/laminas/laminas-validator/src',
    'Laminas\Escaper' => __DIR__.'/vendor/laminas/laminas-escaper/src',
    'Laminas\Loader' => __DIR__.'/vendor/laminas/laminas-loader/src',
    'Monolog' => __DIR__.'/vendor/monolog/monolog/src',
    'Psr\Log' => __DIR__.'/vendor/psr/log',
    'Symfony\Component\Serializer\Normalizer' => __DIR__.'/vendor/symfony/serializer/normalizer',
    'Symfony\Component\Serializer\Encoder' => __DIR__.'/vendor/symfony/serializer/encoder',
    'Symfony\Component\Serializer' => __DIR__.'/vendor/symfony/serializer',
    'Symfony\Component\Yaml' => __DIR__.'/vendor/symfony/yaml',
    'Symfony\Component\HttpFoundation' => __DIR__.'/vendor/symfony/http-foundation',
    'FnacApiGui' => __DIR__.'/src/FnacApiGui/src',
    'FnacApiClient' => __DIR__.'/src',
));

$loader->register();
