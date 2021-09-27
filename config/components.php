<?php

function getButton($link, $text, $style) {
    $html = '<a href="'.$link.'" class="btn btn-'.$style.'">'.$text.'</a>';

    return $html;
}