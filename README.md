# PHP foreach loop with unset() can skip elements
This repository demonstrates a common issue in PHP when using the `unset()` function within a `foreach` loop to remove elements from an array.  The `unset()` function doesn't automatically re-index the array, leading to unexpected skipped elements. 

The `bug.php` file contains the problematic code, while `bugSolution.php` provides a corrected version.

This issue is subtle and can lead to hard-to-debug problems in your applications.  Please read through the code examples to understand the problem and the solution.