<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

namespace App\Support\Csp\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Keyword;
use Spatie\Csp\Policies\Basic;

class RistrictPolicy extends Basic {

    const NONE = 'none';

    public function configure() {
        
        parent::configure();

        // We can add our own policy directives here...
        $this
                ->addDirective(Directive::OBJECT, [
                    Keyword::NONE,
                ])
                ->addDirective(Directive::BASE, [
                    Keyword::NONE,
                ])
                ->addDirective(Directive::SCRIPT, [
                    Keyword::UNSAFE_INLINE,Keyword::UNSAFE_EVAL
                ])
                ->addNonceForDirective(Directive::SCRIPT, [
                    Keyword::SELF
                ])
                ->addNonceForDirective(Directive::SCRIPT, [
                    Keyword::UNSAFE_HASHES,
                    Keyword::UNSAFE_EVAL,
                    Keyword::UNSAFE_INLINE,
                    Keyword::STRICT_DYNAMIC,
                    'https:',
                    'http:',
                ])
                ->addNonceForDirective(Directive::FONT, [
                    Keyword::UNSAFE_HASHES,
                    Keyword::UNSAFE_EVAL,
                    Keyword::UNSAFE_INLINE,
                ])
                ->addDirective(Directive::FONT, [
                    'cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/webfonts/',
                    'fonts.gstatic.com/s/heebo/v21/',
                    'fonts.gstatic.com/s/nunito/',
                    'cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/fonts/',
                ])
                ->addNonceForDirective(Directive::STYLE, [
                    Keyword::SELF,
                ])
//                ->addDirective(Directive::STYLE, [
//                    'cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/',
//                    'cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/',
//                    'cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css',
//                    'cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css',
//                ])
                
                
                ->addDirective(Directive::SCRIPT, [
                    'maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js',
                    'cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js',
                    // footer js start
                    'code.jquery.com/jquery-3.7.0.min.js',
//                  'maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js',
                    'cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js',
                    'cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js',
                    'cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js',
                    'cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js',
                    'googletagmanager.com/gtag/',
                ])
                
                ->addDirective(Directive::STYLE, [
                    'fonts.googleapis.com/',
                    'cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/'
//                    , 'cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/'
                    , 'cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css'
                    ])
                

                ->addDirective(Directive::IMG, [
                    'self',
                    'data'])
                
        ;
    }

}
