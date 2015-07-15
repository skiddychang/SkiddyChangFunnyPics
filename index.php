<!DOCTYPE html>

<html>
<title>Funny Pics</title>
<link rel="stylesheet" href="/styles/default.css" />
<meta charset="utf-8" />
</head>
<body>
    <div>
        <div id="mainDiv">
            <?php
            $dir = 'images/';
            $files = scandir("images/");
            foreach($files as $file){
                $filename = $dir.$file;
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                if($ext == 'webm'){
                    echo "<div class='funnyPicDiv'><div class='funnyPic'><video src='$filename' controls></video></div></div>";
                }
                else if($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif'){
                    echo "<div class='funnyPicDiv'><div class='funnyPic'><img src='$filename' /></div></div>";
                }
            }

            ?>

        </div>
    </div>
</body>
</html>
