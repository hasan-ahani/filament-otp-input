<?php

it('will not use debugging functions')
    ->expect(['dd', 'dump', 'ray', 'var_dump', 'ddd'])
    ->each->not->toBeUsed();
