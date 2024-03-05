@extends('layouts.app')
 
@section('content')
<div class="container border">
    <div class="container-fuild border">
        <nav class="navbar navbar-light bg-light">
            <!-- Navbar Contents -->
            
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
            <!-- Add Task Button -->
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
    <!-- TODO: Current Tasks -->
    <div class="container border">

        <div class="container-fuild border">
            <nav class="navbar navbar-light bg-light">
                <!-- Navbar Contents -->
                
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
                <!-- Navbar Contents -->
                
                <p>First Task</p>
                <div class="">
                    <div class="">
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i> Delete
                        </button>
                    </div>
                </div>
                
            </nav>
            <nav class="navbar navbar-default bg-default ">
                <!-- Navbar Contents -->
                
                <p>Second Tasks</p>
                <div class="">
                    <div class="">
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i> Delete
                        </button>
                    </div>
                </div>
                
            </nav>
        </div>
        
    </div>
@endsection