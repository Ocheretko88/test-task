<?php

// 3.1 Collection

$s = new SplObjectStorage();

$object = new StdClass;
$s->attach($object);
var_dump($s->contains($object));

var_dump($s->offsetExists($object));

$s->detach($object);
var_dump($s->contains($object));

$id = spl_object_hash($object);
$storage[$id] = $object;
var_export($storage);

$s->offsetUnset($object);
var_dump(count($s));

