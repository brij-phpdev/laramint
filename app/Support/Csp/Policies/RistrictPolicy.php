<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

namespace App\Support\Csp\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;

class RistrictPolicy extends Basic {

    const NONE = 'none';

    public function configure() {
        parent::configure();

        // We can add our own policy directives here...
        $this->addDirective(Directive::SCRIPT, [
            'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js',
                    'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js',
                    // footer js start
                    'https://code.jquery.com/jquery-3.7.0.min.js',
//                  'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js',
                    'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js',
                    'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js',
                    'https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js',
                    'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js',
                    'https://www.googletagmanager.com/gtag/',
                ])
                
                ->addDirective(Directive::STYLE, [
//                'https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap',
                    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css'
                    , 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css'
                    , 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css'])
                
                ->addDirective(Directive::IMG, [
                    'self',
                        'data'])
                ;
    }

}
