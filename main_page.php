<!DOCTYPE html>
<html lang="en" >

<head>
    <title>ANPR System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <style>
    body{
  background-color: #102c2e;
  
}

.tab-content{
  background-color: #32676b49;
  color: #fff;
}

.nav-tabs .nav-link.active,.nav-tabs .nav-item.show .nav-link {

    color: #f1f1f1;

    background-color: #32676b49;

    border-color: #2b5177;

}

.nav-tabs > li > a {
  color: #3de8ee;
}

.table-hover tbody tr:hover td{
  color: #eeff00;
}

.table-hover tbody tr td{
  color: #fff;
}


#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
  }

  #myImg:hover {
      transform: scale(3.0);
    }

  .modal {
    display: none; 
    position: fixed; 
    z-index: 1;
    padding-top: 100px; 
    left: 0;
    top: 0;
    width: 100%;
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.9); 
  }
 
  .modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
  }
  
  
  @keyframes zoom {
    from {transform:scale(0)}
    to {transform:scale(1)}
  }
  

  .close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
  }
  
  .close:hover,
  .close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
  }
  

  @media only screen and (max-width: 700px){
    .modal-content {
      width: 100%;
    }
  }
    
    </style>


</head>

<body id="body">
    <br>
    <div class="container mt-3" id="mainDiv">
        <!-- Nav pills -->
        <ul class="nav nav-tabs">
        <li class="nav-item">
                <a href="#home" id = "homeId" class="nav-link active" data-toggle="tab" >Register</a>
            </li> 
            <li class="nav-item">
                <a href="#active-page" id = "activeId" class="nav-link" data-toggle="tab" >Active</a>
            </li>
            
            
            <li class="nav-item">
                <a href="#history-page" id = "historyId"class="nav-link" data-toggle="tab" >History</a>
            </li>
            
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>

            <div style="float: right;">
                        <button type="button" class="btn btn-danger btn-outline-*" onclick="window.location='./index.php'" id="logout">Logout</button><br>
            </div><br>
           
                <div class="container">
                                    
                    <h2><strong>Vehicle Registration</strong></h2>

                    <form action="vehicleReg.php" method="POST">
                        <div class="form-group">
                            <label for="fname"><strong>Name:</strong></label>
                            <input type="text" class="form-control" id="fname" placeholder="Enter Fullname" name="fname" required>
                        </div>
                        <div class="form-group">
                            <label><strong>ID Type:</strong></label>
                            <select id="id-type" name="id-type" class="custom-select">
                                    <option value="RC Number">RC Number</option>
                                    <option value="DL Number">DL Number</option>
                                    <option value="Others">Others</option>
                                  </select>
                        </div>
                        <div class="form-group">
                            <label for="id-number"><strong>ID Number:</strong></label>
                            <input type="text" class="form-control" id="id-number" placeholder="Enter ID Number" name="idNumber" required>
                        </div>
                        <div class="form-group">
                            <label for="Mobile"><strong>Mobile:</strong></label>
                            <input type="text" class="form-control" id="mobile-no" placeholder="Enter Mobile Number" name="mobile" required>
                        </div>
                        <div class="form-group">
                            <label for="address"><strong>Address:</strong></label>
                            <input type="text" class="form-control" id="addr" placeholder="Enter Your Address" name="addr" required>
                        </div>
                        <div class="form-group">
                            <label for="vehicle"><strong>Vehicle Reg No:</strong></label>
                            <input type="text" class="form-control" id="vehicle-id" placeholder="Enter Vehicle Reg No" name="vehicle-reg" required>
                        </div>
                        <div style="float: right;" class="form-group">
                            <button id="submit" type="submit" class="btn btn-primary btn-outline-*">Submit</button>
                        </div>
                    </form><br><br>
                </div>
            </div>


            <div id="active-page" class="container tab-pane fade "><br>
            
            <div class="container ">

            <input type="text" class = "form-control"placeholder="Filter by keywords" name ="filter" id = "filter" style = "width:300px; float:left; margin-bottom:20px;"><br>
                
                <table style="color: #fff; " id = "activeTable"  class="table table-bordered table-hover ">
                    <thead>
                        <tr>
                            <th style="text-align:center">Name</th>
                            <th style="text-align:center">Vehicle Reg No</th>
                            <th style="text-align:center">OCR</th>
                            <th style="text-align:center">Vehicle</th>
                            <th style="text-align:center">Date</th>
                            <th style="text-align:center">Timestamp</th>
                            <th style="text-align:center">Authorization</th>
                        </tr> 

                    </thead> 
                     <tbody id = "activeFilter"></tbody>   
                </table><br> 
            </div>
            </div>

            
            <div id="history-page" class="container tab-pane fade">
                <div class="container "> <br> 
                

            <form id="myForm" method="post">
                    <div class="form-group"> 
                        <label for="Start"><strong>Start Date:</strong></label>
                        <input type="text" class="form-control"  id = "datepicker-12" placeholder = "Start date" name="start"><br>
                        <label for="End"><strong>End Date:</strong></label>
                        <input type="text" class="form-control" placeholder = "End date" id="datepicker-13"  name="end"><br>
                    </div> 
               </form>
                    <button class="btn btn-primary btn-outline-* " id = "searchBtn" >Search</button> 
                         
                 </div><br>
                 <div class="container "> 
                <input type="text" class = "form-control"placeholder="Filter by keywords" name ="search" id = "search" style = "width:auto">
                 </div><br>

                <div id = "filtered" class="container "></div>
            </div>
        </div>
    </div>
<div id="picModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">


</div> 

</body>

</html>
<script>



$(document).ready(function () {

    function myStopFunction() {
        clearInterval(myVar);
    }
    
    var myVar =  setInterval(function(){
        $("#activeFilter").load("search.php").fadeIn("slow");
    }, 3000);

    


    $('#searchBtn').click(function() {
    var start = $("#datepicker-12").val();
    var end = $("#datepicker-13").val();
    
    $.post("connect.php", { start: start, end: end },
    function(data) {      
     $('#filtered').html(data);
     $('#myForm')[0].reset();  
    });
    });


        $('input[id$=datepicker-13]').datepicker({dateFormat: 'yy/mm/dd'});
        $('input[id$=datepicker-12]').datepicker({dateFormat: 'yy/mm/dd'});
    
        $('#search').keyup(function(){            
            search_table($(this).val(), $('#filtered tr'));
            
        });

        $('#filter').keyup(function(){            
            search_table($(this).val(), $('#activeFilter tr'));
            if($(this).val().length > 0){
                 myStopFunction();
            }else{
                myVar =  setInterval(function(){
                $("#activeFilter").load("search.php").fadeIn("slow");
                },3000);
            }
               
        });

        

        function search_table(value, id ){

        id.each(function(){
            var found = 'false';
            $(this).each(function()
            {
                if($(this).text().toLowerCase().indexOf(value.trim().toLowerCase()) >= 0){
                    found = 'true';
                }
            });

            if(found == 'true')
            {
                $(this).show();
            }
            else
            {
                $(this).hide();
            }
        });
    }
  


    });

  
    var modal = document.getElementById("picModal");

    var modalImg = document.getElementById("img01");


    function zoomFunction(value){
    modal.style.display = "block";
    modalImg.src = value;
    }


    var span = document.getElementsByClassName("close")[0];

    span.onclick = function() {
    modal.style.display = "none";
    } 
</script>
