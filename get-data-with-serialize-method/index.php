<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    

<div class="container">
    <div class="row  bg-secondary">
        <div class="col-md-6 m-auto ">
            <form id="form-data" class="mt-5 p-3 bg-secondary">
                <div class="form-group">
                    <input type="text" placeholder="Name" name="fullname" id="fullname" class="form-control">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="number" placeholder="Age" name="age" id="age" class="form-control">
                </div>
                <div class="form-group">
                    <select name="country" class="form-control" id="country">
                        <option value="Pakistan">Pakistan</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="India">India</option>
                        <option value="Srilanka">Srilanka</option>
                    </select>
                </div>
                <div class="form-control">
                    <input type="radio" name="gender" value="male" id=""> Male
                    <input type="radio" name="gender" value="female" id=""> Female
                </div>
                <input type="submit" value="submit" name="submit" id="submit" class="mt-2 btn btn-primary">
            </form>
        </div>
    </div>
</div>

<script src="js/jquery.js"></script>
<script>
    $(document).ready(function(){
        $("#submit").on("click",function(e){
            e.preventDefault();
            // alert($("#form-data").serialize())
            var fullname = $("#fullname").val();
            var email = $("#email").val();
            var age = $("#age").val();
            if(fullname == "" || age == "" || !$("input:radio[name=gender]").is(":checked")){
                alert("All Fields Are required");
            }
            else{
                $.ajax({
                    url: "code.php",
                    type: "POST",
                    data: $("#form-data").serialize(),
                    beforeSend: alert("Loading"),
                    success: function(data){
                        alert(data);
                        $("#form-data").trigger("reset");
                    }
                })
            }
        })
    })
</script>
</body>
</html>