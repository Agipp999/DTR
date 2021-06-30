<?php
  foreach ($t_admin->result() as $u) {
   ?>
   <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row mt-sm-4">
            <div class="col-12">
                <div class="card author-box">
                  <div class="card-body">
                    <div class="author-box-center">
                      <img alt="image" src="otika/assets/img/userbaru.png" class="rounded-circle author-box-picture">
                      <div class="clearfix">
                        <a href=""><?php echo $u->username;?></a>
                      </div>
                      <div class="author-box-job"><?php echo $u->level;?></div>            
                      </div>
                    </div>
                  </div>
                <div class="card author-box">
                  <div class="card-body">
                      <div class="card-header">
                          <h3>Profil</h3>
                        </div>
                          <form>
                            <div class="col-md-8">
                              <label for="exampleInputPassword1" class="form-label">Username</label>
                              <input type="text" class="form-control" id="username" name="username" value="<?php echo $u->username;?>">
                              </input>
                            </div>
                            <div class="col-md-8">
                              <label for="exampleInputPassword1" class="form-label">Password</label> 
                              <input type="password" class="form-control" id="password" name="password" value="<?php echo $u->password;?>">
                              </input>
                            </div>
                            <div style="width:99%; text-align:right; margin-bottom:5px;">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            
                          </form>
                        </div>
                      </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
  </div>
  <?php } ?>