 <div class="row">
  <div class="col-lg-12">
      
          
          <table id="table_id" class="table table-striped table-advance table-hover">
              
            <thead style="background-color: beige;">
               <tr>
                 <th> Full Name</th>
                 <th> Crew title </th>
                 <th> Full Address</th>
                 <th> Mobile</th>
                 <th> Action </th>
              </tr>
            <thead>
                
           <tbody>
            @foreach($crew as $crews)
              <tr>
                 <td>{{$crews->name}}</td>
                 <td>{{$crews->crew_title}}</td>
                 <td>{{$crews->address}}</td>
                 <td>{{$crews->phone}}</td>
                 <td>
                  <div class="btn-group">
                      <a class="btn btn-primary" data-toggle="modal" href="#myModalView{{$crews->id}}">View</a>
                      <a class="btn btn-success" data-toggle="modal" href="#myModalEdit{{$crews->id}}">Edit</a>
                      <a class="btn btn-danger"  href="{{route('delete_data', ['data' => $crews->id])}}">Delete</a>
                  </div>
                  </td>
              </tr>
            @endforeach  
                                    
           </tbody>
        </table>
      
  </div>
</div>

@foreach($crew as $crews)
<!-- Modal View-->
<div class="modal fade" id="myModalView{{$crews->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">View</h4>
            </div>
            <div class="modal-body">

               
                <div class="table-responsive">
                    <table class="table" style=" border-bottom:1px solid #ddd;" >
                        <tbody>
                            <tr>
                              <td class="text-left"><strong>Name :</strong></td>
                              <td class="text-left">  {{$crews->name}}</td>
                            </tr>
                            <tr>
                              <td class="text-left"><strong>Crew Title :</strong></td>
                              <td class="text-left"> {{$crews->crew_title}} <br></td>
                            </tr>
                            <tr>
                              <td class="text-left"><strong>Address :</strong></td>
                              <td class="text-left"> {{$crews->address}}</td>
                            </tr>
                             <tr>
                              <td class="text-left"><strong>Phone # :</strong></td>
                              <td class="text-left"> {{$crews->phone}} <br></td>
                            </tr>
                            <tr>
                              <td class="text-left"><strong>Emergency Contact :</strong></td>
                              <td class="text-left"> {{$crews->emergency_contact}} <br></td>
                            </tr>
                            <tr>
                              <td class="text-left"><strong>Driver License :</strong></td>
                              <td class="text-left"> {{$crews->driver_license}} <br></td>
                            </tr>
                            <tr>
                              <td class="text-left"><strong>Social Security :</strong></td>
                              <td class="text-left"> {{$crews->social_security}} <br></td>
                            </tr>
                            <tr>
                              <td class="text-left"><strong>I9 Number :</strong></td>
                              <td class="text-left"> {{$crews->i9_number}} <br></td>
                            </tr>
                            <tr>
                              <td class="text-left"><strong>Imdb Experience :</strong></td>
                              <td class="text-left"> {{$crews->imdb_experience}} <br></td>
                            </tr>
                            <tr>
                              <td class="text-left"><strong>W2 Employee :</strong></td>
                              <td class="text-left"> {{$crews->w2_employee}} <br></td>
                            </tr>
                            <tr>
                              <td class="text-left"><strong>Union :</strong></td>
                              <td class="text-left"> {{$crews->union}} <br></td>
                            </tr>
                            <tr>
                              <td class="text-left"><strong>Resume :</strong></td>
                              <td class="text-left"><a href = "download/{{$crews->resume}}">{{$crews->resume}}</a>  <br></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- modal View-->    

<!-- Modal -->
 <div class="modal fade" id="myModalEdit{{$crews->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Edit</h4>
             </div>
             <div class="modal-body">

                 <div class="form quick-post" >
                          <!-- Edit profile form (not working)-->
                          <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{route('crew_update')}}">
                              <!-- Full Name -->
                              <div class="form-group">
                                <label class="control-label col-lg-2" for="full name">Full Name</label>
                                <div class="col-lg-10"> 
                                  <input type="text" class="form-control" id="full_name" name="full_name" value="{{$crews->name}}" >
                                </div>
                              </div>   
                              <!-- Crew Title -->
                              <div class="form-group">
                                <label class="control-label col-lg-2" for="crew title">Crew Title</label>
                                <div class="col-lg-10">
                                   <input type="text" class="form-control" id="crew_title" name="crew_title" value="{{$crews->crew_title}}">
                                </div>
                              </div>
                              <!-- Full Address -->
                              <div class="form-group">
                                <label class="control-label col-lg-2" for="full address">Full Address</label>
                                <div class="col-lg-10">
                                   <input type="text" class="form-control" id="full_address" name="full_address" value="{{$crews->address}}">
                                </div>
                              </div> 
                              <!-- Phone -->
                              <div class="form-group">
                                <label class="control-label col-lg-2" for="phone">Phone</label>
                                <div class="col-lg-10">
                                   <input type="text" class="form-control" id="phone" name="phone" value="{{$crews->phone}}">
                                </div>
                              </div>
                              <!--Emergency Phone -->
                              <div class="form-group">
                                <label class="control-label col-lg-2" for="emergency phone">Emergency Contact</label>
                                <div class="col-lg-10">
                                   <input type="text" class="form-control" id="emergency_phone" name="emergency_phone" value="{{$crews->emergency_contact}}">
                                </div>
                              </div>
                              <!-- Driver License -->
                              <div class="form-group">
                                <label class="control-label col-lg-2" for="driver license">Driver License</label>
                                <div class="col-lg-10">
                                   <input type="text" class="form-control" id="driver_license" name="driver_license" value="{{$crews->driver_license}}">
                                </div>
                              </div> 
                              <!-- Social -->
                              <div class="form-group">
                                <label class="control-label col-lg-2" for="social security">Social Security</label>
                                <div class="col-lg-10">
                                   <input type="text" class="form-control" id="social_security" name="social_security" value="{{$crews->social_security}}">
                                </div>
                              </div>
                              <!-- I9 Number -->
                              <div class="form-group">
                                <label class="control-label col-lg-2" for="i9 number">I9 Number</label>
                                <div class="col-lg-10">
                                   <input type="text" class="form-control" id="i9_number" name="i9_number" value="{{$crews->i9_number}}">
                                </div>
                              </div> 
                              <!-- Imdb -->
                              <div class="form-group">
                                <label class="control-label col-lg-2">Imdb Experience</label>
                                <div class="col-lg-10">                               
                                    <select class="form-control" name="imdb_experience">
                                        @if($crews->imdb_experience == 'YES')
                                            <option value="YES">YES</option>
                                        @else
                                            <option value="NO">NO</option>
                                        @endif
                                    </select>  
                                </div>
                              </div>
                              <!-- W2 Employee -->
                              <div class="form-group">
                                <label class="control-label col-lg-2">W2 Employee</label>
                                <div class="col-lg-10">                               
                                    <select class="form-control" name="w2_employee">
                                        @if($crews->w2_employee == 'YES')
                                            <option value="YES">YES</option>
                                        @else
                                            <option value="NO">NO</option>
                                        @endif
                                    </select>  
                                </div>
                              </div> 
                              <!-- Union -->
                              <div class="form-group">
                                <label class="control-label col-lg-2">Union</label>
                                <div class="col-lg-10">                               
                                    <select class="form-control" name="union">
                                        @if($crews->union == 'YES')
                                            <option value="YES">YES</option>
                                        @else
                                            <option value="NO">NO</option>
                                        @endif
                                    </select>  
                                </div>
                              </div> 
                              <!-- Resume view-->
                              <div class="form-group">
                                <label class="control-label col-lg-2">Current Resume</label>
                                <div class="col-lg-10">                               
                                    <label class="control-label col-lg-2">
                                        @if($crews->resume == 'NONE') 
                                            No Resume Attached
                                        @else
                                            <a href = "download/{{$crews->resume}}">{{$crews->resume}}</a>
                                        @endif
                                    </label>
                                </div>
                              </div>
                              
                              <!-- Resume -->
                              <div class="form-group">
                                <label class="control-label col-lg-2">Resume</label>
                                <div class="col-lg-10">                               
                                    <input type="file" class="form-control" id="resume" name="resume">
                                </div>
                              </div>
                              
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <input type="hidden" name="id" value="{{$crews->id}}">
                        </div>
                    </div>
             <div class="modal-footer">
                 <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                 <button class="btn btn-success" type="submit"> Save</button>
             </div>
             </form>
         </div>
     </div>
 </div>
 <!-- modal -->

@endforeach  

@if(Session::has('update'))
<script type="text/javascript">alert("Crew Updated from the System!!");</script>
@endif

@if(Session::has('delete'))
<script type="text/javascript">alert("Crew Deleted from the System!!");</script>
@endif

