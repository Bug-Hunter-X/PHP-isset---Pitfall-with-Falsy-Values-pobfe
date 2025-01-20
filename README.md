# PHP isset() Pitfall with Falsy Values

This repository demonstrates a common pitfall in PHP when using the `isset()` function to check for the existence of array keys, particularly when those keys might hold values that evaluate to `false` in a boolean context (like 0, empty strings, or NULL).

The `bug.php` file contains code that illustrates the problem. The `bugSolution.php` file provides a corrected version.

The core issue is that `isset()` only checks for the existence of a key, not the 'truthiness' of its value.  To reliably check for both existence and a non-falsy value, a more robust approach is necessary.