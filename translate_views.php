<?php
$json = file_exists('lang/ar.json') ? 'lang/ar.json' : 'resources/lang/ar.json';
$map  = json_decode(file_get_contents($json), true);

foreach (glob('resources/views/perblad/*.blade.php') as $f) {
    $s = $o = file_get_contents($f);
    foreach (array_keys($map) as $key) {
        if (str_contains($key, '<')) continue;                 // الجمل اللي فيها HTML يدوي (تحت)
        $parts = array_map(
            fn($w) => str_replace('&', '(?:&|&amp;)', preg_quote($w, '~')),
            preg_split('/\s+/', $key)
        );
        $re = '~(>\s*)' . implode('\s+', $parts) . '(\s*<)~u';
        $s  = preg_replace_callback($re, fn($m) => $m[1] . '{{ __("' . $key . '") }}' . $m[2], $s);
    }
    if ($s !== $o) { file_put_contents($f, $s); echo "updated $f\n"; }
}
