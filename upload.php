<?php

<? if ($_REQUEST) {
    if (!empty($_FILES["file"]["tmp_name"])) {
        // read dataname
        $fileName = $_FILES["file"]["name"];

        // upload file on server
        copy($_FILES["file"], "PATH_TO_UPLOAD/{$fileName}");
    }
}