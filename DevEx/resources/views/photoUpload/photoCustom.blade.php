<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="jquery library/jquery.min.js"></script>  
    <script src="jquery library/Croppie-2.6.4/croppie.js"></script>
    <link rel="stylesheet" href="jquery library/Croppie-2.6.4/croppie.css" />  
    <script src="jquery library/jquery-ui-1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="jquery library/jquery-ui-1.12.1/jquery-ui.css" />  
    


    

 
    <title>ADD Traveling Area</title>

    <style>
    form * {
    border-radius:0 !important;
    }

    form > fieldset > legend {
        font-size:120%;
    }
    
    </style>

</head>
<body>
    
<div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <form role="form" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <legend class="text-center">Upload Your Product</legend>

                    <fieldset>
                        <legend>Details</legend>

                        <div class="form-group col-md-6">
                            <label for="first_name">Location Name</label>
                            <input type="text" class="form-control" name="fullName" placeholder="Place">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="last_name">Travel Cost</label>
                            <input type="text" class="form-control" name="userName" id="" placeholder="$ Price">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="title">Person</label>
                            <input type="text" class="form-control" name="title" id="" placeholder="Quantity">
                        </div>

                        <div class="form-group col-md-6">
                        <legend>Packge Catagory</legend>

                        <div class="form-group col-md-6">
                            <label for="catagory">Select Transport Mode</label>
                            <select class="form-control" name="catagory" id="catagory">
                                <option value="#" >select</option>
                                <option value="Yes" >YES</option>
                                <option value="No" >No</option>
                            </select>
                        </div>

                        </div>

                        <div class="form-group col-md-6">
                        <legend>Type</legend>
                        <label for="type">Include Lunch</label>
                            <div class="CatagoryType">
                            <select class="form-control" name="type" id="type1">
                                <option value="Yes" >Yes</option>
                                <option value="No" >No</option>
                            </select>
                            </div>
                        </div>


                    </fieldset>

                    <fieldset>
                        <legend>Days</legend>

                        <div class="form-group col-md-6">
                            
                             <div>
                                <label for="description">Traveling Days</label>
                             </div>
                             
                             <div>
                             <input type="text" name="description">
                            </select>
                             </div>  
                        </div>

                    
                    
                    <Table border="1" style="margin-top:30px; margin-bottom:30px; text-align:center;"   >
                    
                        <tr>
                            <th> Choose Image </th>
                            
                        </tr>
                        <tr>
                        <td>
                                <input type="file" id="upload_image" name="path" class="btn btn-warning">
                        </td>
       
        
                        </tr>

                    </Table>  


                    </fieldset>
                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" id="" name="submit" class="btn btn-primary">
                                PUBLISH
                            </button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>


</body>
</html>
