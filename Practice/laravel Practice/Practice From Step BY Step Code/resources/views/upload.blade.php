<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/upload.css">
    <script src="js/upload.js"></script>
    <title>Upload</title>
</head>
<body>
    <x-header data="upload"/>
    <br>
    <br>
    <br>
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <div class="file-upload">
    <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add File</button>
    <form action="upload" method="post" enctype="multipart/form-data">
    @csrf
        <div class="image-upload-wrap">
            <input class="file-upload-input" name="file" type='file' onchange="readURL(this);" accept="image/*" />
            <div class="drag-text">
            <h3>Drag and drop a file or select add File</h3>
            </div>
        </div>
        <div class="file-upload-content">
            <img class="file-upload-image" src="#" alt="your image" />
            <div class="image-title-wrap">
            <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
            </div>
        </div>
        <div class="file btn btn-lg btn-primary">
            Upload
            <input type="submit" name="submit"/>
		</div>
    </form>
    </div>
</body>
</html>

    
    
    
    
    