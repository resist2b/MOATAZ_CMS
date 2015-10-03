<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "header" );?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $title;?></h2>
                <a href="http://localhost/AhmedSyamRouting/addArticle.php" class="btn btn-primary square-btn-adjust">Add Cat</a>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <?php if( $cats==0 ){ ?>
                <p>Sorry,No Cats</p>

                <?php }else{ ?>

                <?php $counter1=-1; if( isset($cats) && is_array($cats) && sizeof($cats) ) foreach( $cats as $key1 => $value1 ){ $counter1++; ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1><a href="http://localhost/AhmedSyamRouting/cats/show/<?php echo $value1["cid"];?>/" ><?php echo $value1["cname"];?></a></h1>

                    </div>
                </div>
                <?php } ?>
                <?php } ?>



            </div>
        </div>

    </div>
    <?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "footer" );?>