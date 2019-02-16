<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" action = "SubmitCrawlTask.php" method = "POST"
                        enctype = "multipart/form-data">
                        <div class="form-group">
                          <label for="name">Project name</label>
                          <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Project Name">
                        </div>

                        <div class="form-group">
                          <label for="urls-file">URLs File</label>
                          <input type="file" class="form-control-file" name="urls-file[]" id="urls-file" placeholder="" aria-describedby="fileHelpId">
                        </div>

                        <div class="form-group">
                          <label for="urls"></label>
                          <textarea class="form-control" name="urls" id="urls" rows="5"></textarea>
                        </div>

                        <div class = "form-group">
                            <button type = "submit" class = "btn btn-success btn-sm">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <script src="" async defer></script>
    </body>
</html>
