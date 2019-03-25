<?php

return array(   
    'film/create' => 'film/create',
    'film/search' => 'film/search',
    'film/update/([0-9]+)' => 'film/update/$1',
    'film/delete/([0-9]+)' => 'film/delete/$1',
    'film/view/([0-9]+)' => 'film/view/$1',    
    '' => 'film/index',
    
);
