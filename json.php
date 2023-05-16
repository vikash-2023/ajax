<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="main">
        <div id="header">
            <h1>read json data</h1></div>
            <div id="load-data"></div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<!-- <script>
    $(document).ready(function(){
        $.ajax({
            url:"https://jsonplaceholder.typicode.com/posts/3",
            type:"GET",
            success:function(data){
               $("#load-data").append(data.id+"" +data.title);
            }
        });
    });
    </script> --> 
    <!-- this code is for showing some particular data -->

    <!-- now are doing where multiple data is present and we have to show all data:: -->
    <script>
        $(document).ready(function(){
            $.ajax({
                url:"https://jsonplaceholder.typicode.com/posts",
                type:"GET",
                success: function(data){
                    // console.log(data)
                    $.each(data,function(key,value){
                        $("#load-data").append(value.id+" "+value.title + "<br>");
                    });
                }
            });
        });
    </script>
    
</body>
</html>