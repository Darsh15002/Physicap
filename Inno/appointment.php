<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="datepicker.css">
    <title>Appointment</title>
    <style>
      body{
  width: 100%;
  height:100%;
  overflow: hidden;
  background-image: url(background.jpg);
}
.inner-layer{
  position: absolute;
  width: 100%;
  height:100%;
  background-color: rgba(0,147,173,0.7);
  overflow: auto;
}
.form-data{
  margin-top: 21%;
  background-color: #FFF;
  
}
.form-body{
  padding: 20px;
}
.form-head{
  padding: 10px;
  border-bottom: 1px solid #CCC;
}
.form-head h2{
  font-size: 22px;
  font-weight: 600;
}
.no-margin{
  margin: 0px;
}

.form-row{
  margin-bottom: 15px;
}
.form-control{
  background-color: #f7f7ff;
  border-radius: 0px;

}
.form-control:focus{
  box-shadow: none;
  border: 3px solid #138496;
}
.btn-appointment{
  margin-bottom: 2px;
  background-color: #138496 !important;
  border-color: #138496 !important;
  width: 100%;
}
.content{
  margin-top: 15%;
  font-family: "Times New Roman", Times, serif;
  text-align: center;
  color: #FFF;
  padding: 30px;
}
.content h1{
  font-weight: 600;
  font-size: 4rem;
}
.content h2{
  font-weight: 600;
  font-size:2.5rem;
  margin-top: 20px;
}
.content p{
  font-size: 22px;
  margin-top: 20px;
}
.datepicker td, .datepicker th{
  padding: 5px;
}
.dropdown-menu.datepicker{
  max-width: 300px !important;
}
.text-color{
  color:#FBFCFC;
}
@media screen and (max-width: 976px){
  
}
</style>
  </head>

    <body>
      <div class="inner-layer">
          <div class="container">
            <div class="row no-margin">
                <div class="col-sm-7">
                    <div class="content">
                        <h1>Book Now</h1>
                        <p>Fast and User-friendly way to book your appointments in one go.</p>
                        <h2>For Help Call : </h2>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-data">
                        <div class="form-head">
                            <h2>Book Appointemnt</h2>
                        </div>
                        <form action="" method="post">
                        <div class="form-body">
                            <div class="row form-row">
                              <input type="text" placeholder="Enter Full name" class="form-control">
                            </div>
                          
                           <div class="row form-row">
                              <input id="dat" type="text" placeholder="Appointment Date" class="form-control">
                            </div>
                            
                            <div class="row form-row">
                              <input type="text" placeholder="Problem" class="form-control">
                            </div>
                            <div>
                            <textarea class="form-control" placeholder="Description" id="textarea"></textarea>
                            </div>
                            <br>
                            <div class="row form-row">
                               <button type="submit" class="btn btn-success btn-appointment">
                                Book Appointment
                               </button>
                               </div>
                              </br>

                        </div>
                      </form>
                    </div>
                </div>
            </div>
          </div>
      </div>
      
    </body>
    <script src="jquery-3.3.1.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="bootstrap-datepicker.js"></script>

    <script>
      $(document).ready(function(){
          $("#dat").datepicker();
      })
    </script>
    
  </body>
</html>