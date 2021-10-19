<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./pages/css/style.css">
    <title>Document</title>

    <style>
         input[type=text], select, textarea {
        width: 100%;
        padding: 6px;
        border: 1px solid #6880d3;
        border-radius: 4px;
        resize: vertical;
    }
    label{
        padding: 12px 12px 12px 0;
        display: inline-block;

    }

    .col-25 {
       float: left;
       width: 25%;
       margin-top: 6px;
    }

    .col-75 {
       float: left;
       width: 75%;
       margin-top: 6px;
     }
     input[type=submit] {
    background-color: #071d56;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
      }
      .button-3{
        background-color: red;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: left;
    
  }


/* Clear floats after the columns */
    .row:after {
       content: "";
       display: table;
       clear: both;
    }
    @media screen and (max-width: 1000px) {
       .col-25, .col-75, input[type=submit], .button-3 {
           width: 100%;
           margin-top: 0;
        }
    }

      </style>
</head>

<body>
    <div class="dashboard">

        
        <?php
    
    ?>
   
    <section>  
    <div class="home">        
    <div class="sales-boxes">
        <div class="recent-sales">
          <div class="heading">Rejection Comment</div>
          <br/>
          <form action="/action_page.php">
            <!-- <div class="row">
              <div class="col-25">
                <label for="leave-type">EmpID</label>
              </div>
              <div class="col-75">
                <input type="text" id="leave-type" name="" required>
                
              </div>
            </div> -->
            <div class="row">
                <div class="col-25">
                  <label for="amount">Reason for rejection</label>
                </div>
                <div class="col-75">
                  <input type="text" id="amount" name="" required>
                  
                </div>
              </div>
              <br>
              
              <button class="button-3" onclick="myFunction()">Back</button>
         
              <input type="submit" value="Notify Employee">
            <!-- <div class="row">
                <button onclick="myFunction()">Back</button>
              </div>
            <div class="row">
              <input type="submit" value="Notify Employee">
            </div> -->
            </form>



         

         
          
        </div>
       
      </div>
      </div>

     

      </section>


    </div>
    <script>
        function myFunction() {
          location.replace("index.php?Page=leaveRequests.php")
        }
        </script>
</body>

</html>