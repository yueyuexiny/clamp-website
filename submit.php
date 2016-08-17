<?php
    if(!isset($_GET)){
        echo "Please choose a version to download";
    }else{
        // Download CLAMP
        switch($_GET['v']){
            case 'cmd':
                $clampfile = "ClampCMD_1.0.0.zip";
                break;
            case 'mac':
                $clampfile = "Clamp_0.10.31_mac.zip";
                break;
            case 'win':
                $clampfile = "Clamp_0.10.31_win.zip";
        }

        //echo $clampfile;
        header('Content-type: application/zip');
        // It will be called downloaded.pdf
        header('Content-Disposition: attachment; filename='.$clampfile);
        header("Content-length: " . filesize($clampfile));
        header("Pragma: no-cache");
        header("Expires: 0");
        // The PDF source is in original.pdf
        readfile($clampfile);
        exit();
    }
