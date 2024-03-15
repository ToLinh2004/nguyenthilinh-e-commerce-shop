 <!DOCTYPE html>
 <html lang="en">

 <head>
     <title>Laravel Quickstart - Basic</title>
     <link rel="stylesheet" href="{{ asset('assets/clients/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
 </head>

 <body>
     <div class="container-fuild border">
         <nav class="navbar navbar-light bg-light ">
             <h3>Task List</h3>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                 data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                 aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
         </nav>
     </div>
     <br>
     <div class="container border">
         <div class="container-fuild border">
             <nav class="navbar navbar-light bg-light">
                 <p>New Tasks</p>
             </nav>
         </div>
         <div>
             <label for="task" class="col-sm-3 control-label"><b>Task</b></label>

             <div class="col-sm-6">
                 <input type="text" name="name" id="task-name" class="form-control">
             </div>
         </div>
         <br>
         <div>
             <div class="col-sm-offset-3 col-sm-6">
                 <button type="button" class="btn btn-default border">
                     <i class="fa fa-plus"></i> Add Task
                 </button>
             </div>
             <br>
         </div>
     </div>
     <br>
     </div>
     <div class="container border">
         <div class="container-fuild border">
             <nav class="navbar navbar-light bg-light">
                 <p>Current Tasks</p>

             </nav>
         </div>
         <br>
         <div>
             <label for="task" class="col-sm-3 control-label"><b>Task</b></label>
         </div>
         <br>
         <div>
             <nav class="navbar navbar-light bg-light border ">
                 <p>First Task</p>
                 <div class="">
                     <div class="" style="margin-right:500px">
                         <button type="submit" class="btn btn-danger">
                             <i class="fa fa-trash"></i> Delete
                         </button>
                     </div>
                 </div>
             </nav>
             <nav class="navbar navbar-default bg-default ">
                 <p>Second Tasks</p>
                 <div class="">
                     <div class="" style="margin-right:500px">
                         <button type="submit" class="btn btn-danger">
                             <i class="fa fa-trash"></i> Delete
                         </button>
                     </div>
                 </div>
             </nav>
         </div>
     </div>
 </body>
 </html>
