<!-- <div class="container-fluid">  

<div class="container">
	 <h1 style="color:black;">Today's Objective</h1>


                    <div class="card-body">
                        <a href="{{ url('/objcareer/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Create
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Objective Name</th>
                                        <th>Description</th>
                                        <th>Target Date</th>
                                        <th>Completed Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                            
                                </tbody>
                            </table>
                        </div>
                    </div>         

 </div>

</div> -->


<!-- 
<form action="" method="POST" enctype="multipart/form-data">

{!! csrf_field() !!} -->

 <form action="{{ url('objcareer') }}" method="post"> 
<!-- 
  <form action="{{ url('store') }}" method="post">  -->
        {!! csrf_field() !!}

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
   
      <div class="modal-body">
        <form>
          <div class="form-group">
   
            <label for="recipient-name" class="col-form-label">Title Name</label>
            <input type="text" class="form-control" id="recipient-name" name="objname">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Description</label>
              <input type="text" class="form-control" id="recipient-name" name="descrip">
           <!--  <textarea class="form-control" id="message-text" name="descrip"></textarea> -->
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Reason Target Date</label>
            <input type="text" class="form-control" id="recipient-name" name="targetdate">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Completed Date</label>
            <input type="text" class="form-control" id="recipient-name" name="compldate">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn pink" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn pink" value="Save">Add</button>
      </div>
    </div>
  </div>
</div>




   </form> 
