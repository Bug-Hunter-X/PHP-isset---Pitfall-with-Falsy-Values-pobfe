The solution involves using a more explicit check that accounts for falsy values:

```php
<?php
$data = [
    'name' => 'John Doe',
    'age' => 0,
    'city' => ''
];

if (array_key_exists('age', $data) && $data['age'] > 18) {
    echo 'Adult';
} else {
    echo 'Minor or age not specified';
}

if (array_key_exists('city', $data) && strlen($data['city']) > 0) {
    echo ', lives in ' . $data['city'];
}
?>
```

`array_key_exists()` explicitly checks for the key's existence, separating the existence check from the value evaluation. The second check uses `strlen()` to ensure a non-empty string in the 'city' field.  This approach is more robust and avoids the subtle pitfalls of relying solely on `isset()` and implicit type coercion.