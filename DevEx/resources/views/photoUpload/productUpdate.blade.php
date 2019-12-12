<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Product</title>
</head>
<body>
        
<div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <form role="form" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <legend class="text-center">Update Your Product</legend>

                    <fieldset>
                        <legend>Details</legend>

                        <div class="form-group col-md-6">
                            <label for="first_name">Location Name</label>
                            <input type="text" class="form-control" value="{{$bio->fullName}}" name="fullName" placeholder="Product">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="last_name">Travel Cost</label>
                            <input type="text" class="form-control" value="{{$bio->userName}}" name="userName" id="" placeholder="$ Price">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="title">Person Quantity</label>
                            <input type="text" class="form-control" value="{{$bio->title}}" name="title" id="" placeholder="Quantity">
                        </div>

                        <div class="form-group col-md-6">
                        <legend>Packge Catagory</legend>

                        <div class="form-group col-md-6">
                            <label for="catagory">Transport</label>
                            <select class="form-control" name="catagory" id="catagory">
                                <option value="{{$bio->catagory}}" >{{$bio->catagory}}</option>
                                <option value="Yes" >Yes</option>
                                <option value="No" >No</option>
                            </select>
                        </div>

                        </div>

                        <div class="form-group col-md-6">
                        <legend>Type</legend>
                        <label for="type">Include Lunch</label>
                            <div class="CatagoryType">
                            <select class="form-control" name="type" id="type2">
                            <option value="{{$bio->type}}" >{{$bio->type}}</option>
                                <option value="Yes" >Yes</option>
                                <option value="No" >No</option>
                            </select>
                            </div>
                        </div>


                    </fieldset>

                    <fieldset>
                        <legend>Age Range</legend>

                        <div class="form-group col-md-6">
                            
                             <div>
                                <label for="description">Age</label>
                             </div>
                             
                             <div>
                             <select class="form-control" name="description" id="type3">
                                <option value="{{$bio->description}}" >{{$bio->description}}</option>
                                <option value="kids" >Kids</option>
                                <option value="teen" >Teenager</option>
                                <option value="adult" >Adult</option>
                            </select>
                             </div>  
                        </div>


                    </fieldset>
                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" id="" name="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>



    <script>
        $(document).ready(function(){
            $('#type1').hide();
            $('#type2').hide();

            $('#catagory').on('change',function(){
                var a = $( "#catagory" ).val();
                var b = 'female';
                if(a==b){
                    $('#type2').show();
                    $('#type1').hide();
                }
                else{
                    $('#type1').show();
                    $('#type2').hide();
                }

              
                
            });
            
           

        });  
    </script>

</body>
</html>