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
     <h1 style="color:black;">Today's Objective</h1>


                    <div class="card-body">
                        <button type="button" class="btn pink" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo">Create</button>

                        @include('career')
                        <!-- <a href="{{ url('/objcareer/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Create -->
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
            <!--             {{$dt}}  -->



                  @foreach ($dt as $user)
                 
                                        <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->objname }}</td>
                                        <td>{{ $user->descrip }}</td>
                                        <td>{{ $user->targetdate }}</td>
                                        <td>{{ $user->compldate }} </td>                                        

                                        <td>

                                      <!--       {{$user->id}} -->
                                     <a href="{{ url('/objcareer/' . $user->id . '/edit') }}" class="btn btn-primary">Edit</a> 
                                     <form method="POST" action="{{ url('/objcareer' . '/' . $user->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>


                                        </td>

                                    </tr>


                                @endforeach


                                    



                                
                            
                                </tbody>
                            </table>
                        </div>
                    </div>         

 </div>

</div>
        



 </body>
</html> 







<!-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> 

 -->


   <!--  <div class="blog">   -->
 
    <!-- <div id="main">
     <h1 class="text-4xl font-bold ml-auto">Today's Post</h1>

   

        <article class="mb-2">

            <a href="" class="text-xl font-bold text-blue-500"></a>
                <p class='text-md text-gray-600'></p>      
            
            </hr class="mt-2">
                </article>
        </div> 
    </div> 
        


<div class="contain" style="min-height: 400px; flex: 2.5;padding: 20px;padding-right: 0px;">
    <div style="border:solid thin #aaa; padding: 10px;">
 
<div> -->
    
<!--     <button type="button" class="btn btn-light" data-mdb-ripple-color="dark" data-bs-toggle="modal" data-bs-target="#ModalCreate" data-bs-whatever="@mdo">Write your Post</button> 



 <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalCreate">Create Post</a> 


 
</div> -->
<!-- </div> -->





<!-- <div class="container">
    
<h1>Create Career Objective</h1>




</div> -->

