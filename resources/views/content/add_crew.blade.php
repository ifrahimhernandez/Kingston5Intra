	 <div class="col-md-6 portlets">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left">Add Crew</div>
                   
                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <div class="padd">
                    
                      <div class="form quick-post" >
                          <!-- Edit profile form (not working)-->
                          <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{route('crew_add')}}">
                              <!-- Full Name -->
                              <div class="form-group">
                                <label class="control-label col-lg-2" for="full name">Full Name</label>
                                <div class="col-lg-10"> 
                                  <input type="text" class="form-control" id="full_name" name="full_name" >
                                </div>
                              </div>   
                              <!-- Crew Title -->
                              <div class="form-group">
                                <label class="control-label col-lg-2" for="crew title">Crew Title</label>
                                <div class="col-lg-10">
                                   <input type="text" class="form-control" id="crew_title" name="crew_title">
                                </div>
                              </div>
                              <!-- Full Address -->
                              <div class="form-group">
                                <label class="control-label col-lg-2" for="full address">Full Address</label>
                                <div class="col-lg-10">
                                   <input type="text" class="form-control" id="full_address" name="full_address">
                                </div>
                              </div> 
                              <!-- Phone -->
                              <div class="form-group">
                                <label class="control-label col-lg-2" for="phone">Phone</label>
                                <div class="col-lg-10">
                                   <input type="text" class="form-control" id="phone" name="phone">
                                </div>
                              </div>
                              <!--Emergency Phone -->
                              <div class="form-group">
                                <label class="control-label col-lg-2" for="emergency phone">Emergency Contact</label>
                                <div class="col-lg-10">
                                   <input type="text" class="form-control" id="emergency_phone" name="emergency_phone">
                                </div>
                              </div>
                              <!-- Driver License -->
                              <div class="form-group">
                                <label class="control-label col-lg-2" for="driver license">Driver License</label>
                                <div class="col-lg-10">
                                   <input type="text" class="form-control" id="driver_license" name="driver_license">
                                </div>
                              </div> 
                              <!-- Social -->
                              <div class="form-group">
                                <label class="control-label col-lg-2" for="social security">Social Security</label>
                                <div class="col-lg-10">
                                   <input type="text" class="form-control" id="social_security" name="social_security">
                                </div>
                              </div>
                              <!-- I9 Number -->
                              <div class="form-group">
                                <label class="control-label col-lg-2" for="i9 number">I9 Number</label>
                                <div class="col-lg-10">
                                   <input type="text" class="form-control" id="i9_number" name="i9_number">
                                </div>
                              </div> 
                              <!-- Imdb -->
                              <div class="form-group">
                                <label class="control-label col-lg-2">Imdb Experience</label>
                                <div class="col-lg-10">                               
                                    <select class="form-control" name="imdb_experience">
                                      <option value="YES">YES</option>
                                      <option value="NO">NO</option>
                                    </select>  
                                </div>
                              </div>
                              <!-- W2 Employee -->
                              <div class="form-group">
                                <label class="control-label col-lg-2">W2 Employee</label>
                                <div class="col-lg-10">                               
                                    <select class="form-control" name="w2_employee">
                                      <option value="YES">YES</option>
                                      <option value="NO">NO</option>
                                    </select>  
                                </div>
                              </div> 
                              <!-- Union -->
                              <div class="form-group">
                                <label class="control-label col-lg-2">Union</label>
                                <div class="col-lg-10">                               
                                    <select class="form-control" name="union">
                                      <option value="YES">YES</option>
                                      <option value="NO">NO</option>
                                    </select>  
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
                              
                              <!-- Buttons -->
                              <div class="form-group">
                                 <!-- Buttons -->
                								 <div class="col-lg-offset-2 col-lg-9">
                									<button type="submit" class="btn btn-success btn-lg">Save</button>
                								 </div>
                              </div>
                          </form>
                        </div>
                  

                  </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div>
              </div>
              
            </div>
            
            
            
            
            <div class="col-md-6 portlets" style="text-align: center; padding: 70px 0;">
              @if (Session::has('message'))
          
              <div class="alert alert-block alert-danger fade in" >
                  <ul >
                     <li style="list-style-type:disc">{{ Session::get('message') }}</li>
                  </ul>
              </div>
                   
              @endif
              
              @if (count($errors) > 0)
                  <div class="alert alert-block alert-danger fade in">
                      <ul >
                          
                          @foreach ($errors->all() as $error)
                              <li style="list-style-type:disc">{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              
              @if(Session::has('complete'))
              <script type="text/javascript">alert("Crew Added to the System!!");</script>
              @endif
            </div>