<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Image Uploading Using Intervention Package</h2>
        <form method="post" action="{{ URL::to('upload-image') }}"  enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group">
                <input type="file"  class="form-control" name="filename" id="img">   
                <img id="blah" src="#" alt="your image" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Upload">
            </div>
        </form>

        <div>
            <h2>Original Image</h2>
            @foreach($images as $i)
                <img width =150px src="{{ asset('images/'.$i->filename) }}" alt="">
            @endforeach
        </div>
        <div>
            <h2>Thumbnail Image</h2>
            @foreach($images as $i)
                <img width = 150px src="{{ asset('thumbnail/'.$i->filename) }}" alt="">
            @endforeach
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    
                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }
                    
                    reader.readAsDataURL(input.files[0]); // convert to base64 string
                }
            }

            $("#img").change(function() {
                readURL(this);
                });
    </script>
</body>
</html>