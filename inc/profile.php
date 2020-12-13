
<div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="assets/static/images/profile-default.jpg" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $givenname ." ". $familyname;?> </h3>

                <p class="text-muted text-center"><?php echo $user;?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Year entered</b> <a class="float-right"><?php echo $year; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Contact No.</b> <a class="float-right"><?php echo "+65 ".$contact;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>ID</b> <a class="float-right"><?php echo $identification;?></a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
