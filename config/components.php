<?php

function getButton($text, $link, $style) {
    $html = '<a href="'.$link.'" class="btn btn-'.$style.'">'.$text.'</a>';

    return $html;
}