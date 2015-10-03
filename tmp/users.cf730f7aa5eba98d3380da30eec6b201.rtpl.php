<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "header" );?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $title;?></h2>
                <a href="" class="btn btn-primary square-btn-adjust">Add User</a>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">

                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <?php if( $users==0 ){ ?>
                            <p>Sorry,No Users</p>

                            <?php }else{ ?>

                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>user_username</th>
                                        <th>user_fname</th>
                                        <th>user_lname</th>
                                        <th>user_email</th>
                                        <th>user_password</th>
                                        <th>user_bio</th>
                                        <th>user_isAdmin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $counter1=-1; if( isset($users) && is_array($users) && sizeof($users) ) foreach( $users as $key1 => $value1 ){ $counter1++; ?>
                                    <tr class="odd gradeX">
                                        <td> <?php echo $value1["user_username"];?></td>
                                        <td> <?php echo $value1["user_fname"];?></td>
                                        <td> <?php echo $value1["user_lname"];?></td>
                                        <td> <?php echo $value1["user_email"];?></td>
                                        <td> <?php echo $value1["user_password"];?></td>
                                        <td> <?php echo $value1["user_bio"];?></td>
                                        <td>    <?php if( $value1["user_isAdmin"]==1 ){ ?> Admin  <?php }else{ ?> User <?php } ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <?php } ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "footer" );?>