<div class="panel panel-default">
    <div class="panel-heading">
        <button id="user" class="btn btn-success">Create User</button>
    </div>
    <div id="user_form" class="panel-body" style="display: none;">
        <div class="col-lg-6">
            <form name="form_user" role="form" id="form_user" method="post">
                
                <div class="form-group">
                    <input name="name" placeholder="Enter Role Name..." class="form-control">
                </div>
                <div class="form-group">
                    <textarea placeholder="Enter Role Description..." name="description" rows="3" class="form-control"></textarea>
                </div>
                <!--<button onclick="return false;" id="submit" class="btn btn-success" type="submit">Submit</button>-->
                <button onclick="return false;" type="submit" class="btn btn-success">Sign up</button>
                <button id="reset" class="btn btn-success" type="reset">Reset</button>
            </form>
            
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-user">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>User</th>
                        <th>Surname</th>
                        <th>Given_names</th>
                        <th>Gender</th>
                        <th>Married</th>
                        <th>Children</th>
                        <th>Date_Of_Birth</th>
<!--                        <th>Address</th>
                        <th>City</th>
                        <th>Zip</th>
                        <th>State</th>
                        <th>Country</th>
                        <th>Phone</th>
                        <th>Fax</th>
                        <th>Mail</th>
                        <th>Experience</th>
                        <th>Industry</th>
                        <th>Mobile</th>-->
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <?php $sn = 1; ?>
                    <?php foreach ($user_profile as $user_p) { ?>
                    <tr class="odd gradeX">
                        <td><?php echo $sn;?></td>
                        <td><?php echo $user_p->user_id;?></td>
                        <td><?php echo $user_p->surname;?></td>
                        <td><?php echo $user_p->given_names;?></td>
                        <td><?php echo $user_p->gender;?></td>
                        <td><?php echo $user_p->married;?></td>
                        <td><?php echo $user_p->children;?></td>
                        <td><?php echo $user_p->date_of_birth;?></td>
<?php /*                <td><?php echo $user_p->address;?></td>
                        <td><?php echo $user_p->city;?></td>
                        <td><?php echo $user_p->zip;?></td>
                        <td><?php echo $user_p->state;?></td>
                        <td><?php echo $user_p->country;?></td>
                        <td><?php echo $user_p->phone;?></td>
                        <td><?php echo $user_p->fax;?></td>
                        <td><?php echo $user_p->mail;?></td>
                        <td><?php echo $user_p->experience;?></td>
                        <td><?php echo $user_p->industry;?></td>
                        <td><?php echo $user_p->mobile;?></td> 
 */ ?>
                        
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.panel-body -->
</div>

<?php $this->load->resource('user/js/user_r'); ?>