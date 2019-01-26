<!DOCTYPE html>
<html>
<head>
<body>
    <div class="container">    
                <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-                       3 col-sm-8 col-sm-offset-2">
                      <div class="panel panel-info">
                         <div class="panel-heading">
                            <div class="panel-title">Candidate Sign Up</div>
                               <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="candi_login.php">log in</a></div>
                           </div>  
                           <div class="panel-body" >
                               <form id="signupform" class="form-horizontal" role="form" action="http://172.31.128.251/helpingo/public_gathering.php" method="post">
                                <div class="form-group">
                               <label for="first_name" class="col-md-3 control-label">mobile</label>
                                <div class="col-md-9">
                                   <input type="text" class="form-control" name="mobile" placeholder="First Name" size="30" id="na" onblur="ncheck();"><span id="spn" style="color:red"></span>
                                </div>
                              </div>
                              <div class="form-group">
                               <label for="first_name" class="col-md-3 control-label">region</label>
                                <div class="col-md-9">
                                   <input type="text" class="form-control" name="region" placeholder="First Name" size="30" id="na" onblur="ncheck();"><span id="spn" style="color:red"></span>
                                </div>
                              </div>
                              <div class="form-group">
                               <label for="first_name" class="col-md-3 control-label">situation_type</label>
                                <div class="col-md-9">
                                   <input type="text" class="form-control" name="situation_type" placeholder="First Name" size="30" id="na" onblur="ncheck();"><span id="spn" style="color:red"></span>
                                </div>
                              </div>
                              <div class="form-group">
                               <label for="first_name" class="col-md-3 control-label">types_of_problem</label>
                                <div class="col-md-9">
                                   <input type="text" class="form-control" name="types_of_problem" placeholder="First Name" size="30" id="na" onblur="ncheck();"><span id="spn" style="color:red"></span>
                                </div>
                              </div>
                             
                             
                               <!--Reset Button -->
                             <div class="form-group">
                                <div class=" col-md-offset-4 col-md-2">
                                     <input type="reset" id="btn-reset" class="btn btn-info"><i class="icon-hand-right" value="Reset" onclick="#"></i>
                                 </div>
                                 <!--Submit Button -->                                        
                                 <div class="col-md-offset-2 col-md-2">
                                     <input type="submit" id="btn-signup" class="btn btn-info"><i class="icon-hand-right"></i>
                                 </div>
                              </div>
                               </form>
                           </div>
                          </div>
                      </div> 
                     </div>
                    </div>   
</body>
</html>