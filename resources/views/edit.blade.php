

<!-- 
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
   
      <div class="modal-body">
        <form>
          <div class="form-group">
    
            <label for="recipient-name" class="col-form-label">Object Name</label>
            <input type="text" class="form-control" id="recipient-name" name="objname" value="{{ $dt->id}}">
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn pink" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn pink" value="Update">Add</button>
      </div>
    </div>
  </div>
</div> -->

@extends('layouts.apptwo')


<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h2 class="logo"> Car<span>eer</span> Go<span>als</span></h2>
           <!--          {{ config('app.name', 'Laravel') }} -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>




                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                         <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about') }}">{{ __('About Me') }}</a>
                                </li>
                            <li class="nav-item dropdown">
                              

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Welcome! {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
   </div>

<div class="container">
    
     <h1 style="color:black;">Edit and Update Objective</h1>
<!-- {{ $dt->id}} -->

                  
  
  <form method="POST" action="{{ url('objcareer/' .$dt->id) }}">  

<!-- <form method="POST" action="{{ url('update/' .$dt->id) }}"> -->
    {!! csrf_field() !!}
        @method("PUT")
 <div class="modal-dialog" role="document">
    <div class="modal-content">
   
      <div class="modal-body">
        <form>
          <div class="form-group">
   
            <label for="recipient-name" class="col-form-label">Title Name</label>
            <input type="text" class="form-control" id="recipient-name" name="objname" value="{{ $dt->objname}}">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Description</label>
             <input type="text" class="form-control" id="recipient-name" name="descrip" value="{{ $dt->descrip}}">
            <!-- <textarea class="form-control" id="message-text" name="descrip" value="{{ $dt->objname}}"></textarea> -->
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Reason Target Date</label>
            <input type="text" class="form-control" id="recipient-name" name="targetdate" value="{{ $dt->targetdate}}">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Completed Date</label>
            <input type="text" class="form-control" id="recipient-name" name="compldate" value="{{ $dt->compldate}}">
          </div>
        </form>
      </div>
      <div class="modal-footer">
<!--         <button type="button" class="btn pink" data-bs-dismiss="modal">Close</button> -->
        <button type="submit" class="btn pink" value="Update">Update</button>
      </div>
    </div>
  </div>
                                    

  </form> 

                                
                       

 </div>

</div>
        



 </body>
</html> 







