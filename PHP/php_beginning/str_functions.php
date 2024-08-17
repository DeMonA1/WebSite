<?php
###############################################
    if (str_contains(needle: 'shment', haystack: 'Antidisestablishmentarism'))
        {echo '<br>TRUE';}

    if (strpos('Once upon a time', 'Once') !== false)
        echo 'Found';

    if (str_contains('Once upon a time', 'Once'))
        echo 'Found';

    if (str_contains(strtolower('Once upon a time'), strtolower('once')))
        echo 'Found';


    if (!function_exists('str_contains'))
    {
        function str_contains(string $haystack, string $needle): bool
        {
            return $needle === '' || strpos($haystack, $needle) !== false;
        }
    }

#########################################################################

    if (str_starts_with('In the beginning', 'In'))
        echo 'Found';

    if (!function_exists('str_starts_with'))
    {
        function str_starts_with(string $haystack, string $needle): bool
        {
            return $needle === '' || strpos($haystack, $needle) === 0;
        }
    }

######################################################################

    if (str_ends_with('In the end', 'end'))
        echo 'Found';

    if (!function_exists('str_ends_with'))
    {
        function str_ends_with(string $haystack, string $needle): bool
        {
            return $needle === '' || $needle === substr($haystack, -strlen($needle));
        }
    }

#######################################################################

    echo fdiv(1,0);

    if (!function_exists('fdiv'))
    {
        function fdiv(float $dividend, float $divisor): float
        {
            return @($dividend / $divisor);
        }
    }
