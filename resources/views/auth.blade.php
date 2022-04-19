<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-pjax-version" content="v123">
    <meta name="robots" content="noindex, nofollow" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        #iFrameResizer0 {
            display: block;
            width: 100vw;
            height: 100vh;
            max-width: 100%;
            margin: 0;
            padding: 0;
            border: 0 none;
            box-sizing: border-box;
        }
    </style>
</head>
X-FRAME-OPTIONS
<body>
<div class="loading"></div>
<div class="wrapper">
    <main class="main container">
        <iframe src="{{route('integrations-index')}}"
                frameborder="0" id="iFrameResizer0"
                scrolling="yes"
                allowfullscreen
                width=100% height=100%>
        </iframe>

    </main>
</div>
</body>
</html>
