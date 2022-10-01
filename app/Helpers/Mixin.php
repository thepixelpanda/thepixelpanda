<?php

function asset_url($asset) {
    if (env("APP_ENV") == "production") {
        return "/public/" . $asset;
    } else {
        return "/" . $asset;
    }
}