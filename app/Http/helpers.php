<?php

function createTreeList($parent, $menu)
{
    if (!isset($menu['parents'][$parent])) {
        return '';
    }

    $html = '<ul>';

    foreach ($menu['parents'][$parent] as $id) {
        if (!isset($menu['parents'][$id])) {
            $html .= '<li><a href="'.$menu['items'][$id]->url.'">'.$menu['items'][$id]->title.'</a></li>';
        } else {
            $html .= '<li class="has-children"><a href="'.$menu['items'][$id]->url.'">'.$menu['items'][$id]->title.'</a>';
            $html .= createTreeList($id, $menu);
            $html .= '</li>';
        }
    }

    $html .= '</ul>';

    return $html;
}

function str_replace_first($search, $replace, $subject)
{
    $search = '/'.preg_quote($search, '/').'/';
    return preg_replace($search, $replace, $subject, 1);
}

function langSwitcher($current, array $all)
{
    $text = $current == $all[0] ? $all[1] : $all[0];

    $path = str_replace_first($current, $text, Request::path());
    $url = url($path);

    $fullText = $current == "en" ? 'Русский' : 'English';

    return '
        <a href="'.$url.'" class="lang-switcher" style="text-decoration: none; color: #3e3e3e; display:flex">
            <img src="'.asset('templates/v2/img/'.$text.'.svg').'">
            '.$fullText.'
        </a>';
}

function langSwitcherForModal($current, array $all)
{
    $text = $current == $all[0] ? $all[1] : $all[0];

    $path = str_replace_first($current, $text, Request::path());
    $url = url($path);

    $fullText = $current == "en" ? 'Русский' : 'English';

    return '
        <a href="'.$url.'" class="link-reset modal-menu-header--item modal-menu-header--title modal-menu-header--language" style="margin-top:19px!important">
            <div class="language">
                <img src="'.asset('templates/v2/img/'.$text.'.svg').'" alt="english language">
                '.$fullText.'
            </div>
        </a>';
}

function thumb($path, $width, $height)
{
    $info = pathinfo($path);
    $dir = str_replace('/files/', '/thumbs/', $info['dirname']);
    $preview = $dir.'/'.$info['filename'].'-'.$width.'x'.$height.'.'.$info['extension'];
    $preview_path = public_path($preview);

    if (!file_exists($preview_path)) {
        if (!is_dir(dirname($preview_path))) {
            if (!mkdir($concurrentDirectory = dirname($preview_path), 0777, true) && !is_dir($concurrentDirectory)) {
                throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
            }
        }

        if (file_exists(public_path($path))) {
            $img = \Image::make(public_path($path));
            $img->fit($width, $height)->save($preview_path);
        }
    }

    return $preview;
}


function simpleCrypt( $string, $action = 'e' ) {
    // you may change these values to your own
    $secret_key = 'my_simple_secret_key';
    $secret_iv = 'my_simple_secret_iv';

    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $secret_key );
    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );

    if( $action == 'e' ) {
        $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
    }
    else if( $action == 'd' ){
        $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
    }

    return $output;
}
