<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="style.css"> -->
    </head>
    <style>
        .innerright,label {
    color: rgb(16, 170, 16);
    }
.container,
.row,
.imglogo {
    margin:auto;
}
/* ------------------ */
a{
    text-decoration: none;
    color: black;
    font-size: large;
}
    /* text-decoration:none;
    display: inline-block;
    padding:8px 16px; */

a:hover{
    background-color:skyblue;
    color:black;
}
.previous{
    background-color:rgb(255, 99, 71);
    color:black;
    padding:5px;
    border-radius:2px;

}
.next{
    background-color:rgb(255, 99, 71);
    color:black;
    padding:5px;
    border-radius:2px;

}
/* --------------------- */
.innerdiv {
    text-align: center;
    margin: 100px;
}
input{
    margin-left:20px;
}
.leftinnerdiv {
    float: left;
    width: 25%;
}
.rightinnerdiv {
    float: right;
    width: 75%;
}
.innerright {
    background-color: #f3bd7e;
}
.greenbtn {
    background-color: #ffe3e3;
    color: black;
    width: 95%;
    height: 40px;
    margin-top: 8px;
}
.greenbtn,
a {
    text-decoration: none;
    color: black;
    font-size: large;
}
th{
    background-color: #16DE52;
    color: black;
}
td{
    background-color: #b1fec7;
    color: black;
}
td, a{
    color:black;
}
label {
            margin-left:50px;
            padding-Top:10px;
            font-size: 18px;
            color: rgb(51, 51, 51);
            }
        
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        
        input[type=text]:focus,
        input[type=email]:focus,
        input[type=number]:focus,
        input[type=pasword]:focus,

        select:focus,
        textarea:focus {
            outline: none;
        }
        
        input[type=text],
        input[type=email],
        input[type=number],
        input[type=pasword],
        select,
        textarea {
            
            width: 40%;
            padding: 2px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            margin-top: 2px;
            margin-bottom: 2px;
            resize: vertical;
        }
        body {
            font-family: 'Roboto';
         }
        ::placeholder {
            color: rgb(189, 184, 184);
            font-style: italic;
            font-size: 14px;
        }
</style>
    <body >
 <div class="container">
        <div class="innerdiv">
            <div class="leftinnerdiv">
                <Button class="greenbtn" onclick="openpart('com')" > Component</Button>
                <br>
                <Button class="greenbtn" onclick="openpart('ra')" > Requirement Analysis</Button>
                <Button class="greenbtn" onclick="openpart('rar')" > Requirement Analysis Review</Button>
                <Button class="greenbtn" onclick="openpart('d')"> Design</Button>
                <Button class="greenbtn" onclick="openpart('dr')"> Design Review</Button>
                <Button class="greenbtn" onclick="openpart('code')"> Code</Button>
                <Button class="greenbtn"  onclick="openpart('cr')"> Code Review</Button>
                <Button class="greenbtn" onclick="openpart('tcp')">  Test Case Preparation</Button>
                <Button class="greenbtn" onclick="openpart('tce')">  No of Test Case Executed</Button>
                <Button class="greenbtn" onclick="openpart('tg')">  Testing</Button>
                <Button class="greenbtn" onclick="openpart('uta')">  UTA</Button>
                <a href="register_form.php"><Button class="greenbtn" > LOGOUT</Button></a>
            </div>

            <div class="rightinnerdiv">   
            <div id="com" class="innerright portion" style="display:none">
            <Button class="greenbtn" >Component</Button>
            <form id="" action="" method="post" enctype="multipart/form-data">
            <label>component:</label><input type="" name=""/>
            </br>
            <br>
            <!-- <input type="submit" value="SUBMIT"/> -->
            <a href="" class="previous">&laquo; Previous</a>
            <a href="" class="next">&laquo; Next</a>
            <br>
            <br>
    </form>
    </div>
    </div>


          <!-- ------------------------------------------Requirement Analysis------------------- -->

          <div class="rightinnerdiv">   
            <div id="ra" class="innerright portion" style="display:none">
            <Button class="greenbtn" >Requirement Analysis</Button>
            <form action="addpersonserver_page.php" method="post" enctype="multipart/form-data">
            <label>Size:</label><input type="text" name="size"/>
            </br>
            </br>
            <label>Planned Start Date:</label><input type="date" name=""/>
            <label>Planned End Date:</label><input  type="date" name=""/></br>
            
            <label>Actual Start Date:</label><input type="date" name=""/>
            <label>Actual End Date:</label><input  type="date" name=""/></br>

            <label>Planned Efforts:</label><input type="" name=""/>
            <label>Defects:</label><input  type="" name=""/><br>

            <label>Productivity:</label><input  type="" name=""/>
           <label>Code Rate:</label><input  type="" name=""/><br>

            <label>Test Rate:</label><input  type="" name=""/>
            <label>CT:</label><input  type="" name=""/><br>

            <label>Coding Time:</label><input  type="time" name=""/>
            <label>Testing Time:</label><input  type="time" name=""/><br>

            <label>Design Time:</label><input  type="time" name=""/>
            <label>DRE:</label><input  type="time" name=""/><br>

            <label>Coding Effectiveness:</label><input  type="" name=""/>
            <label>Testing Effectiveness:</label><input  type="" name=""/><br>

            <label>No Of Test Case Executed:</label><input  type="" name=""/>
            <label>EV:</label><input  type="time" name=""/><br>

            <label>SU:</label><input  type="" name=""/><br><br>
            
            <a href="" class="previous">&laquo; Previous</a>
            <a href="" class="next">&laquo; Next</a>
            <br>
            <br>
            </form>
    </div>
    </div>

            <!-- -------------------------Requirement Analysis Review---------------------------- -->

            <div class="rightinnerdiv">   
            <div id="rar" class="innerright portion" style="display:none">
            <Button class="greenbtn" >Requirement Analysis Review</Button>
            <form action="addpersonserver_page.php" method="post" enctype="multipart/form-data">
            <label>Size:</label><input type="text" name="size"/>
            </br>
            <label>Planned Start Date:</label><input type="date" name=""/>
            <label>Planned End Date:</label><input  type="date" name=""/></br>
            
            <label>Actual Start Date:</label><input type="date" name=""/>
            <label>Actual End Date:</label><input  type="date" name=""/></br>

            <label>Planned Efforts:</label><input type="" name=""/>
            <label>Defects:</label><input  type="" name=""/><br>

            <label>Productivity:</label><input  type="" name=""/>
           <label>Code Rate:</label><input  type="" name=""/><br>

            <label>Test Rate:</label><input  type="" name=""/>
            <label>CT:</label><input  type="" name=""/><br>

            <label>Coding Time:</label><input  type="time" name=""/>
            <label>Testing Time:</label><input  type="time" name=""/><br>

            <label>Design Time:</label><input  type="time" name=""/>
            <label>DRE:</label><input  type="time" name=""/><br>

            <label>Coding Effectiveness:</label><input  type="" name=""/>
            <label>Testing Effectiveness:</label><input  type="" name=""/><br>

            <label>No Of Test Case Executed:</label><input  type="" name=""/>
            <label>EV:</label><input  type="time" name=""/><br>

            <label>SU:</label><input  type="" name=""/><br><br>

            <a href="" class="previous">&laquo; Previous</a>
            <a href="" class="next">&laquo; Next</a>
            <br>
            <br>
            </form>
    </div>
    </div>

    <!-- --------------------------Design--------------------------- -->

      
    <div class="rightinnerdiv">   
            <div id="d" class="innerright portion" style="display:none">
            <Button class="greenbtn" >Design</Button>
            <form action="addpersonserver_page.php" method="post" enctype="multipart/form-data">
            <label>Size:</label><input type="text" name="size"/>
            </br>
            <label>Planned Start Date:</label><input type="date" name=""/>
            <label>Planned End Date:</label><input  type="date" name=""/></br>
            
            <label>Actual Start Date:</label><input type="date" name=""/>
            <label>Actual End Date:</label><input  type="date" name=""/></br>

            <label>Planned Efforts:</label><input type="" name=""/>
            <label>Defects:</label><input  type="" name=""/><br>

            <label>Productivity:</label><input  type="" name=""/>
           <label>Code Rate:</label><input  type="" name=""/><br>

            <label>Test Rate:</label><input  type="" name=""/>
            <label>CT:</label><input  type="" name=""/><br>

            <label>Coding Time:</label><input  type="time" name=""/>
            <label>Testing Time:</label><input  type="time" name=""/><br>

            <label>Design Time:</label><input  type="time" name=""/>
            <label>DRE:</label><input  type="time" name=""/><br>

            <label>Coding Effectiveness:</label><input  type="" name=""/>
            <label>Testing Effectiveness:</label><input  type="" name=""/><br>

            <label>No Of Test Case Executed:</label><input  type="" name=""/>
            <label>EV:</label><input  type="time" name=""/><br>

            <label>SU:</label><input  type="" name=""/><br><br>

            <a href="" class="previous">&laquo; Previous</a>
            <a href="" class="next">&laquo; Next</a>
            <br>
            <br>
            </form>
    </div>
    </div>
 
    <!-- ----------------------Design Review--------------------------- -->
   
      
    <div class="rightinnerdiv">   
            <div id="dr" class="innerright portion" style="display:none">
            <Button class="greenbtn" >Design Review</Button>
            <form action="addpersonserver_page.php" method="post" enctype="multipart/form-data">
            <label>Size:</label><input type="text" name="size"/>
            </br>
            <label>Planned Start Date:</label><input type="date" name=""/>
            <label>Planned End Date:</label><input  type="date" name=""/></br>
            
            <label>Actual Start Date:</label><input type="date" name=""/>
            <label>Actual End Date:</label><input  type="date" name=""/></br>

            <label>Planned Efforts:</label><input type="" name=""/>
            <label>Defects:</label><input  type="" name=""/><br>

            <label>Productivity:</label><input  type="" name=""/>
           <label>Code Rate:</label><input  type="" name=""/><br>

            <label>Test Rate:</label><input  type="" name=""/>
            <label>CT:</label><input  type="" name=""/><br>

            <label>Coding Time:</label><input  type="time" name=""/>
            <label>Testing Time:</label><input  type="time" name=""/><br>

            <label>Design Time:</label><input  type="time" name=""/>
            <label>DRE:</label><input  type="time" name=""/><br>

            <label>Coding Effectiveness:</label><input  type="" name=""/>
            <label>Testing Effectiveness:</label><input  type="" name=""/><br>

            <label>No Of Test Case Executed:</label><input  type="" name=""/>
            <label>EV:</label><input  type="time" name=""/><br>

            <label>SU:</label><input  type="" name=""/><br><br>

            <a href="" class="previous">&laquo; Previous</a>
            <a href="" class="next">&laquo; Next</a>
            <br>
            <br>
            </form>
    </div>
    </div>

    <!-- -------------------------Code----------------------------------------- -->
   
       
    <div class="rightinnerdiv">   
            <div id="code" class="innerright portion" style="display:none">
            <Button class="greenbtn" >Code</Button>
            <form action="addpersonserver_page.php" method="post" enctype="multipart/form-data">
            <label>Size:</label><input type="text" name="size"/>
            </br>
            <label>Planned Start Date:</label><input type="date" name=""/>
            <label>Planned End Date:</label><input  type="date" name=""/></br>
            
            <label>Actual Start Date:</label><input type="date" name=""/>
            <label>Actual End Date:</label><input  type="date" name=""/></br>

            <label>Planned Efforts:</label><input type="" name=""/>
            <label>Defects:</label><input  type="" name=""/><br>

            <label>Productivity:</label><input  type="" name=""/>
           <label>Code Rate:</label><input  type="" name=""/><br>

            <label>Test Rate:</label><input  type="" name=""/>
            <label>CT:</label><input  type="" name=""/><br>

            <label>Coding Time:</label><input  type="time" name=""/>
            <label>Testing Time:</label><input  type="time" name=""/><br>

            <label>Design Time:</label><input  type="time" name=""/>
            <label>DRE:</label><input  type="time" name=""/><br>

            <label>Coding Effectiveness:</label><input  type="" name=""/>
            <label>Testing Effectiveness:</label><input  type="" name=""/><br>

            <label>No Of Test Case Executed:</label><input  type="" name=""/>
            <label>EV:</label><input  type="time" name=""/><br>

            <label>SU:</label><input  type="" name=""/><br><br>

            <a href="" class="previous">&laquo; Previous</a>
            <a href="" class="next">&laquo; Next</a>
            <br>
            <br>
            </form>
    </div>
    </div>


    <!-- ----------------------------Code Review------------------------------ -->

      
    <div class="rightinnerdiv">   
            <div id="cr" class="innerright portion" style="display:none">
            <Button class="greenbtn" >Code Review</Button>
            <form action="addpersonserver_page.php" method="post" enctype="multipart/form-data">
            <label>Size:</label><input type="text" name="size"/>
            </br>
            <label>Planned Start Date:</label><input type="date" name=""/>
            <label>Planned End Date:</label><input  type="date" name=""/></br>
            
            <label>Actual Start Date:</label><input type="date" name=""/>
            <label>Actual End Date:</label><input  type="date" name=""/></br>

            <label>Planned Efforts:</label><input type="" name=""/>
            <label>Defects:</label><input  type="" name=""/><br>

            <label>Productivity:</label><input  type="" name=""/>
           <label>Code Rate:</label><input  type="" name=""/><br>

            <label>Test Rate:</label><input  type="" name=""/>
            <label>CT:</label><input  type="" name=""/><br>

            <label>Coding Time:</label><input  type="time" name=""/>
            <label>Testing Time:</label><input  type="time" name=""/><br>

            <label>Design Time:</label><input  type="time" name=""/>
            <label>DRE:</label><input  type="time" name=""/><br>

            <label>Coding Effectiveness:</label><input  type="" name=""/>
            <label>Testing Effectiveness:</label><input  type="" name=""/><br>

            <label>No Of Test Case Executed:</label><input  type="" name=""/>
            <label>EV:</label><input  type="time" name=""/><br>

            <label>SU:</label><input  type="" name=""/><br><br>

            <a href="" class="previous">&laquo; Previous</a>
            <a href="" class="next">&laquo; Next</a>
            <br>
            <br>
            </form>
    </div>
    </div>

    <!-- ----------------------------Test Case Preparation----------------------------------- -->
    
      
    <div class="rightinnerdiv">   
            <div id="tcp" class="innerright portion" style="display:none">
            <Button class="greenbtn" >Test Case Preparation</Button>
            <form action="addpersonserver_page.php" method="post" enctype="multipart/form-data">
            <label>Size:</label><input type="text" name="size"/>
            </br>
            <label>Planned Start Date:</label><input type="date" name=""/>
            <label>Planned End Date:</label><input  type="date" name=""/></br>
            
            <label>Actual Start Date:</label><input type="date" name=""/>
            <label>Actual End Date:</label><input  type="date" name=""/></br>

            <label>Planned Efforts:</label><input type="" name=""/>
            <label>Defects:</label><input  type="" name=""/><br>

            <label>Productivity:</label><input  type="" name=""/>
           <label>Code Rate:</label><input  type="" name=""/><br>

            <label>Test Rate:</label><input  type="" name=""/>
            <label>CT:</label><input  type="" name=""/><br>

            <label>Coding Time:</label><input  type="time" name=""/>
            <label>Testing Time:</label><input  type="time" name=""/><br>

            <label>Design Time:</label><input  type="time" name=""/>
            <label>DRE:</label><input  type="time" name=""/><br>

            <label>Coding Effectiveness:</label><input  type="" name=""/>
            <label>Testing Effectiveness:</label><input  type="" name=""/><br>

            <label>No Of Test Case Executed:</label><input  type="" name=""/>
            <label>EV:</label><input  type="time" name=""/><br>

            <label>SU:</label><input  type="" name=""/><br><br>

            <a href="" class="previous">&laquo; Previous</a>
            <a href="" class="next">&laquo; Next</a>
            <br>
            <br>
            </form>
    </div>
    </div>

    <!-- -----------------------------No of Test Case Executed------------------------------------------ -->

      
    <div class="rightinnerdiv">   
            <div id="tce" class="innerright portion" style="display:none">
            <Button class="greenbtn" >No of Test Case Executed</Button>
            <form action="addpersonserver_page.php" method="post" enctype="multipart/form-data">
            <label>Size:</label><input type="text" name="size"/>
            </br>
            <label>Planned Start Date:</label><input type="date" name=""/>
            <label>Planned End Date:</label><input  type="date" name=""/></br>
            
            <label>Actual Start Date:</label><input type="date" name=""/>
            <label>Actual End Date:</label><input  type="date" name=""/></br>

            <label>Planned Efforts:</label><input type="" name=""/>
            <label>Defects:</label><input  type="" name=""/><br>

            <label>Productivity:</label><input  type="" name=""/>
           <label>Code Rate:</label><input  type="" name=""/><br>

            <label>Test Rate:</label><input  type="" name=""/>
            <label>CT:</label><input  type="" name=""/><br>

            <label>Coding Time:</label><input  type="time" name=""/>
            <label>Testing Time:</label><input  type="time" name=""/><br>

            <label>Design Time:</label><input  type="time" name=""/>
            <label>DRE:</label><input  type="time" name=""/><br>

            <label>Coding Effectiveness:</label><input  type="" name=""/>
            <label>Testing Effectiveness:</label><input  type="" name=""/><br>

            <label>No Of Test Case Executed:</label><input  type="" name=""/>
            <label>EV:</label><input  type="time" name=""/><br>

            <label>SU:</label><input  type="" name=""/><br><br>

            <a href="" class="previous">&laquo; Previous</a>
            <a href="" class="next">&laquo; Next</a>
            <br>
            <br>
            </form>
    </div>
    </div>

    <!-- ---------------------------------Testing----------------------------- -->
   
    <div class="rightinnerdiv">   
            <div id="tg" class="innerright portion" style="display:none">
            <Button class="greenbtn" >Testing</Button>
            <form action="addpersonserver_page.php" method="post" enctype="multipart/form-data">
            <label>Size:</label><input type="text" name="size"/>
            </br>
            <label>Planned Start Date:</label><input type="date" name=""/>
            <label>Planned End Date:</label><input  type="date" name=""/></br>
            
            <label>Actual Start Date:</label><input type="date" name=""/>
            <label>Actual End Date:</label><input  type="date" name=""/></br>

            <label>Planned Efforts:</label><input type="" name=""/>
            <label>Defects:</label><input  type="" name=""/><br>

            <label>Productivity:</label><input  type="" name=""/>
           <label>Code Rate:</label><input  type="" name=""/><br>

            <label>Test Rate:</label><input  type="" name=""/>
            <label>CT:</label><input  type="" name=""/><br>

            <label>Coding Time:</label><input  type="time" name=""/>
            <label>Testing Time:</label><input  type="time" name=""/><br>

            <label>Design Time:</label><input  type="time" name=""/>
            <label>DRE:</label><input  type="time" name=""/><br>

            <label>Coding Effectiveness:</label><input  type="" name=""/>
            <label>Testing Effectiveness:</label><input  type="" name=""/><br>

            <label>No Of Test Case Executed:</label><input  type="" name=""/>
            <label>EV:</label><input  type="time" name=""/><br>

            <label>SU:</label><input  type="" name=""/><br><br>

            <a href="" class="previous">&laquo; Previous</a>
            <a href="" class="next">&laquo; Next</a>
            <br>
            <br>
            </form>
    </div>
    </div>

    <!-- ------------------------UTA----------------------------------------- -->
  
    <div class="rightinnerdiv">   
            <div id="uta" class="innerright portion" style="display:none">
            <Button class="greenbtn" >UTA</Button>
            <form action="addpersonserver_page.php" method="post" enctype="multipart/form-data">
            <label>Size:</label><input type="text" name="size"/>
            </br>
            <label>Planned Start Date:</label><input type="date" name=""/>
            <label>Planned End Date:</label><input  type="date" name=""/></br>
            
            <label>Actual Start Date:</label><input type="date" name=""/>
            <label>Actual End Date:</label><input  type="date" name=""/></br>

            <label>Planned Efforts:</label><input type="" name=""/>
            <label>Defects:</label><input  type="" name=""/><br>

            <label>Productivity:</label><input  type="" name=""/>
           <label>Code Rate:</label><input  type="" name=""/><br>

            <label>Test Rate:</label><input  type="" name=""/>
            <label>CT:</label><input  type="" name=""/><br>

            <label>Coding Time:</label><input  type="time" name=""/>
            <label>Testing Time:</label><input  type="time" name=""/><br>

            <label>Design Time:</label><input  type="time" name=""/>
            <label>DRE:</label><input  type="time" name=""/><br>

            <label>Coding Effectiveness:</label><input  type="" name=""/>
            <label>Testing Effectiveness:</label><input  type="" name=""/><br>

            <label>No Of Test Case Executed:</label><input  type="" name=""/>
            <label>EV:</label><input  type="time" name=""/><br>

            <label>SU:</label><input  type="" name=""/><br><br>

            <input type="submit" value="SUBMIT"/>
            <br>
            <br>
            </form>
    </div>
    </div>

<script>
        function openpart(portion) {
        var i;
        var x = document.getElementsByClassName("portion");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        document.getElementById(portion).style.display = "block";  
        }
        </script>
    </body>
</html>
